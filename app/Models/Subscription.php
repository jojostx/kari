<?php

namespace App\Models;

use App\Events\Customer\PayoutCreatedEvent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Subscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tag',
        'refcode',
        'principal',
        'interest',
        'user_id',
        'plan_id',
        'payment_id',
        'ends_at',
        'next_payout_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'ends_at' => 'datetime',
        'next_payout_at' => 'datetime',
    ];


    ##### Relationships #######

    /**
     * The customer who made the payment.
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * The plan this subscription belongs to.
     */
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * The payment made for this subscription.
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    /**
     * The payouts that belong to this subscription.
     * 
     * @method payouts()
     *
     * @return HasMany
     */
    public function payouts()
    {
        return $this->hasMany(Payout::class, 'subscription_id');
    }

    ##### Scopes #######

    /**
     * Scope a query to return only mature subscriptions for the authenticated user.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMatured(Builder $query)
    {
        return $query->where('ends_at', '<=', now());
    }

    /**
     * Scope a query to return only subscriptions that has pending payouts.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeHasUncreatedPayouts(Builder $query)
    {
        $period = config('app.payout_period', 6);

        return $query->where('next_payout_at', '<=', now())
        ->has(
            'payouts',
            '<',
            function ($query) use ($period) {
                $query->selectRaw("FLOOR(TIMESTAMPDIFF(MONTH, subscriptions.created_at, subscriptions.next_payout_at)/$period)");
            }
        );
    }

    ##### Accessors #######
    public function getTotalPayoutAttribute()
    {
        $period = $this->ends_at->diffInMonths($this->created_at);
        // A = P(1 + r/100)t
        $payout = $this->principal * (1 + $this->interest) ** $period;

        $payout = $payout * (1 + $this->plan->bonus);

        return $payout;
    }

    public function getBiannualPayoutAmountAttribute()
    {
        $payout = $this->principal * (1 + ($this->interest / 2));

        return $payout;
    }

    ###### helpers #######
    public function canCreatePayout(): bool
    {
        $max_payout_count = floor(($this->next_payout_at->diffInMonths($this->created_at)) / config('app.payout_period', 6));

        return $this->next_payout_at->lessThanOrEqualTo(now()) && ($this->payouts()->count() < $max_payout_count);
    }

    public function createPayout()
    {
        if (!$this->canCreatePayout()) {
            return false;
        }

        DB::transaction(function () {
            //create a new payout
            $payout = $this->payouts()->create([
                'tag' => $this->tag,
                'amount' => $this->biannual_payout_amount,
                'status' => Payout::CREATED,
                'user_id' => $this->user_id,
            ]);

            //change subscription->next_payout_at to subscription->next_payout_at->addMonth(config('app.payout_period', 6))
            $ran = $this->update([
                'next_payout_at' => $this->next_payout_at->addMonths(config('app.payout_period', 6)),
            ]);

            //send email to user to notify them of an available payout
            PayoutCreatedEvent::dispatchIf($ran, $payout);
        });
    }
}
