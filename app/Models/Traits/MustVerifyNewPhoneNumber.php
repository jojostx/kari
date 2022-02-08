<?php

namespace App\Models\Traits;

use App\Notifications\Auth\VerifyNewPhoneNumberSMS;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Password;
use NotificationChannels\AfricasTalking\Exceptions\CouldNotSendNotification;

trait MustVerifyNewPhoneNumber
{
    /**
     * Deletes all previous attempts for this user, creates a new model/token
     * to verify the given phone number and send the verification URL
     * to the new phone number.
     *
     * @param string $phoneNumber
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function newPhoneNumber(Model $user, string $phoneNumber): ?Model
    {
        $phoneNumberE164 = phone($phoneNumber, 'NG')->formatE164();

        if ($user->getPhoneNumberForVerification() === $phoneNumberE164 && $user->hasVerifiedPhoneNumber()) {
            return null;
        }

        return $this->createPendingUserPhoneNumberModel($user, $phoneNumber)->tap(function ($model) {
            $this->sendPendingPhoneNumberVerificationSMS($model);
        });
    }

    /**
     * Creates new PendingUserModel model for the given phone number.
     *
     * @param string $phoneNumber
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createPendingUserPhoneNumberModel(Model $user, string $phone_number): Model
    {
        $this->clearPendingPhoneNumber($user);

        $token = hash('sha256', Str::random(60));

        return parent::create([
            'user_id'   => $user->getKey(),
            'phone_number' => $phone_number,
            'token' => $token,
        ]);
    }

    /**
     * Returns the pending phone number.
     * 
     * @return string|null
     */
    public function getPendingPhoneNumber(): ?string
    {
        return $this->forUser($this)->value('phone_number');
    }

    /**
     * Deletes the pending phone number models for this user.
     *
     * @return void
     */
    public function clearPendingPhoneNumber($user)
    {
        $this->forUser($user)->delete();
    }

    /**
     * Determine if the user has verified their phone number.
     *
     * @return bool
     */
    public function hasVerifiedPhoneNumber()
    {
        return !is_null($this->user->phone_verified_at);
    }

    /**
     * Send the phone number verification notification.
     *
     * @return void
     * 
     * @throws CouldNotSendNotification
     */
    public function sendPendingPhoneNumberVerificationSMS()
    {
        $this->notify(new VerifyNewPhoneNumberSMS);
    }

    /**
     * Grabs the pending user phone number, generates a new token and sends the Mailable.
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function resendPendingPhoneNumberVerificationSMS(): ?Model
    {
        $pendingUserPhoneNumber = $this->forUser($this->user)->firstOrFail();

        return $this->newPhoneNumber($this->user, $pendingUserPhoneNumber->phone_number);
    }
}
