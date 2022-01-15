<?php

namespace App\Models;

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

}
