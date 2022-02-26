<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'contact_message_id',
        'subject',
        'body',
    ];

    /**
     * The Recipient of the reply.
     */
    public function recipient()
    {
        return $this->belongsTo(ContactMessage::class, 'contact_message_id', 'id');
    }
}
