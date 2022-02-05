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
        'state_id',
        'city_id',
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
   
    /**
     * The state who owns this address.
     */
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
   
    /**
     * The city of this address.
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
