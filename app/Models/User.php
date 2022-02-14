<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Concerns\Auth\MustVerifyPhoneNumber;
use App\Models\Traits\MustVerifyPhoneNumber as TraitsMustVerifyPhoneNumber;
use App\Notifications\Auth\VerifyEmailQueued;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Propaganistas\LaravelPhone\Casts\E164PhoneNumberCast;
use ProtoneMedia\LaravelVerifyNewEmail\MustVerifyNewEmail;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class User extends Authenticatable implements MustVerifyPhoneNumber, MustVerifyEmail, Searchable
{
    use HasApiTokens, HasFactory, Notifiable, TraitsMustVerifyPhoneNumber, MustVerifyNewEmail;

    public $searchableType = 'Customers';

    public function getSearchResult(): SearchResult
    {
        $url = route('admin.investment.customers.view', $this->getKey());

        return new SearchResult(
            $this,
            $this->full_name,
            $url
        );
    }

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
        'birthdate',
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
        'birthdate' => 'datetime:Y-m-d',
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
        return \boolval($this->is_admin);
    }

    public function getFullNameAttribute($value): string
    {
        return ucwords("{$this->first_name} {$this->last_name}");
    }

    public function getVerifiedAttribute()
    {
        return boolval($this->hasVerifiedEmail());
    }

    public function getVerifiedPhoneAttribute()
    {
        return boolval($this->hasVerifiedPhoneNumber());
    }

    /**
     * Scope a query to return the available roommates for the authenticated user.
     * @method availableRoommates()
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCustomers($query)
    {
        return $query->where('is_admin', false);
    }

    /**
     * Scope a query to return the available roommates for the authenticated user.
     * @method availableRoommates()
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAdmins($query)
    {
        return $query->where('is_admin', true);
    }

    /**
     * The payments for a user.
     */
    public function payments(): HasMany
    {
        return $this->HasMany(Payment::class);
    }

    /**
     * The subscriptions for a user.
     */
    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    /**
     * The payouts for a user.
     */
    public function payouts(): HasMany
    {
        return $this->hasMany(Payout::class);
    }

    /**
     * The address for a user.
     */
    public function location(): HasOne
    {
        return $this->hasOne(UserAddress::class, 'user_id');
    }

    /**
     * The pending Phone Number for a user.
     */
    public function pendingPhoneNumber(): HasOne
    {
        return $this->hasOne(PendingUserPhoneNumber::class, 'user_id');
    }

    public function hasPayment(Payment $payment)
    {
        return $this->payments()
            ->where('id', $payment->getKey())
            ->exists();
    }
}
