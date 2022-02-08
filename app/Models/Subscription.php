<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'refcode',
        'principal',
        'interest',
        'user_id',
        'plan_id',
        'payment_id',
        'ends_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'ends_at' => 'datetime',
    ];

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
     * Scope a query to return only mature subscriptions authenticated user.
     * 
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMatured(Builder $query)
    {
        return $query->where('ends_at', '<=', now());
    }

    public function getPayoutAttribute()
    {
        $period = 5;
        // A = P(1 + r/100)t
        $payout = $this->principal * (1 + $this->interest) ** $period;

        $payout = $payout * (1 + $this->plan->bonus);

        return $payout;
    }
}
