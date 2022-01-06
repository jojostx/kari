<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Concerns\Auth\MustVerifyPhoneNumber;
use App\Models\Traits\MustVerifyPhoneNumber as TraitsMustVerifyPhoneNumber;
use App\Notifications\Auth\VerifyEmailQueued;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Propaganistas\LaravelPhone\Casts\E164PhoneNumberCast;


class User extends Authenticatable implements MustVerifyPhoneNumber, MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, TraitsMustVerifyPhoneNumber;

    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailQueued);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'phone_number',
        'email',
        'password',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_admin' => 'boolean',
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'phone_number_e164' => E164PhoneNumberCast::class . ':NG',
    ];

    /**
     * Route notifications for the Africas Talking channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForAfricasTalking($notification)
    {
        return $this->phone_number_e164;
    }

    public function admin()
    {
        return $this->is_admin;
    }
    
    public function getFullNameAttribute($value)
    {
        return ucwords("{$this->first_name} {$this->last_name}");
    }
}
