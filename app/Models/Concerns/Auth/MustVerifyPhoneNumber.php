<?php

namespace App\Models\Concerns\Auth;

use NotificationChannels\AfricasTalking\Exceptions\CouldNotSendNotification;

interface MustVerifyPhoneNumber
{
    /**
     * Determine if the user has verified their Phone number.
     *
     * @return bool
     */
    public function hasVerifiedPhoneNumber();

    /**
     * Mark the given user's Phone number as verified.
     *
     * @return bool
     */
    public function markPhoneNumberAsVerified();

    /**
     * Send the Phone number verification notification.
     *
     * @return void
     * 
     * @throws CouldNotSendNotification
     */
    public function sendPhoneNumberVerificationNotification();

    /**
     * Get the Phone number that should be used for verification.
     *
     * @return string
     */
    public function getPhoneNumberForVerification();
}
