<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class PhoneNumberVerificationPromptController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (!$request->user()->hasVerifiedPhoneNumber()) {
            try {
                $request->user()->sendPhoneNumberVerificationNotification();
                
                return view('auth.verify-phone');
            } catch (\Throwable $e) {
                return back()->with('status', 'verification-sms-not-sent');
            }
        } else {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }
}
