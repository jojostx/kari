<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
  
    /**
     * The the plan the payment was made for.
     */
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
