<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class ContactMessage extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'contact_messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'message'
    ];

    /**
     * The replies for this message.
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class, 'contact_message_id', 'id');
    }
}
