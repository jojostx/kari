<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'country',
    ];

    /**
     * The cities that belongs to this state.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
