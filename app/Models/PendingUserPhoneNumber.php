<?php

namespace App\Models;

use App\Events\Auth\PhoneNumberVerifiedEvent;
use App\Models\Traits\MustVerifyNewPhoneNumber;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Traits\Tappable;
use Propaganistas\LaravelPhone\Casts\E164PhoneNumberCast;

class PendingUserPhoneNumber extends Model
{
    use Tappable, Notifiable, MustVerifyNewPhoneNumber;

    /**
     * This model won't be updated.
     */
    const UPDATED_AT = null;

    /**
     * @var array
     */
    protected $guarded = [];

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

    /**
     * User relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo('user', 'user_id');
    }

    /**
     * Scope for getting all the pending phone number of the user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param \Illuminate\Database\Eloquent\Model $user
     * @return void
     */
    public function scopeForUser($query, Model $user)
    {
        $query->where([
            $this->qualifyColumn('user_id')  => $user->getKey(),
        ]);
    }

    /**
     * Updates the associated user and removes all pending models with this email.
     *
     * @return void
     */
    public function activate()
    {
        $user = $this->user;

        $dispatchEvent = !$user->hasVerifiedPhoneNumber() || $user->phone_number !== $this->phone_number;

        $user->phone_number = $this->phone_number;

        $user->save();

        $user->markPhoneNumberAsVerified();

        static::where("phone_number", $this->phone_number)->get()->each->delete();

        $dispatchEvent ? event(new PhoneNumberVerifiedEvent($user)) : null;
    }

    /**
     * Creates a temporary signed URL to verify the pending email.
     *
     * @return string
     */
    public function verificationUrl(): string
    {
        return URL::temporarySignedRoute(
            'phoneverification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 15)),
            ['token' => $this->token]
        );
    }
}
