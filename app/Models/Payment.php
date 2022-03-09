<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag',
        'refcode',
        'status',
        'user_id',
        'plan_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];


    /**
     * Scope a query to return payments pending approval.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePending($query)
    {
        return $query->where('status', false);
    }

    /**
     * Scope a query to return approved payments.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeApproved($query)
    {
        return $query->where('status', true);
    }

    /**
     * The customer who made the payment.
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the phone associated with the user.
     */
    public function subscription(): HasOne
    {
        return $this->hasOne(Subscription::class, 'payment_id', 'id');
    }

    /**
     * The the plan the payment was made for.
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * approve the payment and create a subscription.
     */
    public function approve(): bool
    {
        if ($this->status) {
            return false;
        }
        
        if (\is_null($this->refcode)) {
            return false;
        }

        $this->status = true;

        $saved = $this->save();

        $this->subscription()->create([
            'tag' => $this->tag,
            'refcode' => $this->refcode,
            'principal' => $this->plan->principal,
            'interest' => $this->plan->interest,
            'user_id' => $this->user_id,
            'plan_id' => $this->plan_id,
            'payment_id' => $this->id,
            'ends_at' => now()->addYear(),
            'next_payout_at' => now()->addMonths(\config('app.payout_period', 6)),
        ]);

        return $saved;
    }
}
