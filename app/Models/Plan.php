<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'tag',
        'name',
        'principal',
        'interest',
        'bonus',
        'description',
    ];

    protected $guarded = [
        'id'
    ];
}
