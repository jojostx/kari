<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'state',
        'city',
        'address',
        'postcode',
    ];

    /**
     * The customer who owns this address.
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
