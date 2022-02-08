<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\PendingUserPhoneNumber;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\LaravelVerifyNewEmail\Http\InvalidVerificationLinkException;

class VerifyNewPhoneNumberController extends Controller
{
    /**
     * Mark the user's new email address as verified.
     *
     * @param  string $token
     *
     * @throws \ProtoneMedia\LaravelVerifyNewEmail\Http\InvalidVerificationLinkException
     */
    public function verify(string $token)
    {
        $user = PendingUserPhoneNumber::where('token', $token)->firstOr(['*'], function () {
            throw new InvalidVerificationLinkException(
                __('The verification link is not valid anymore.')
            );
        })->tap(function ($pendingUserPhoneNumber) {
            $pendingUserPhoneNumber->activate();
        })->user;

        if (config('verify-new-phone-number.login_after_verification')) {
            Auth::guard()->login($user, config('verify-new-phone-number.login_remember'));
        }

        return $this->authenticated($user->hasVerifiedPhoneNumber());
    }

    protected function authenticated(bool $status)
    {
        return $status ?
            \redirect(config('verify-new-phone-number.redirect_to', '/dashboard'))->with('status', 'phone-verification-success') :
            \redirect(config('verify-new-phone-number.redirect_to', '/dashboard'))->with('status', 'phone-verification-failure');
    }

    public function __construct()
    {
        $this->middleware('throttle:6,1');
    }
}
