<?php

namespace App\Models\Traits;

use App\Notifications\Auth\VerifyPhoneNumberSMS;
use NotificationChannels\AfricasTalking\Exceptions\CouldNotSendNotification;

trait MustVerifyPhoneNumber
{
    /**
     * Determine if the user has verified their phone number.
     *
     * @return bool
     */
    public function hasVerifiedPhoneNumber()
    {
        return ! is_null($this->phone_verified_at);
    }

    /**
     * Mark the given user's phone number as verified.
     *
     * @return bool
     */
    public function markPhoneNumberAsVerified()
    {
        return $this->forceFill([
            'phone_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    /**
     * Send the phone number verification notification.
     *
     * @return void
     * 
     * @throws CouldNotSendNotification
     */
    public function sendPhoneNumberVerificationNotification()
    {
        $this->notify(new VerifyPhoneNumberSMS);
    }

    /**
     * Get the phone number that should be used for verification.
     *
     * @return string
     */
    public function getPhoneNumberForVerification()
    {
        return $this->phone_number_e164;
    }
}
