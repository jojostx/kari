<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'bank_name',
        'account_name',
        'account_number',
    ];

    /**
     * The customer who owns this bank account.
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
