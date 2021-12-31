<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class PhoneNumberVerificationNotificationController extends Controller
{
    /**
     * Send a new phone verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->user()->hasVerifiedPhoneNumber()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        try {
            $request->user()->sendPhoneNumberVerificationNotification();

            return back()->with('status', 'verification-sms-sent');
        } catch (\Throwable $e) {
            return back()->with('status', 'verification-sms-not-sent');
        }
    }
}
