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
     * approve the payment abd create a subscription.
     */
    public function approve(): bool
    {
        $this->status = true;

        $saved = $this->save();

        if (!$saved && \is_null($this->refcode)) {
            return false;
        }
        
        $this->subscription()->create([
           'refcode' => $this->refcode,
           'principal' => $this->plan->principal,
           'interest' => $this->plan->interest,
           'user_id' => $this->user_id,
           'plan_id' => $this->plan_id,
           'payment_id' => $this->id,
           'ends_at' => now()->addYear(),
       ]);

        return $saved;
    }
}
