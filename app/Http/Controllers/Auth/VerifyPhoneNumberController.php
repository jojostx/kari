<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\PhoneNumberVerificationRequest;

class VerifyPhoneNumberController extends Controller
{
    /**
     * Mark the authenticated user's phone number as verified.
     *
     * @param  \Illuminate\Foundation\Auth\PhoneNumberVerificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PhoneNumberVerificationRequest $request)
    {
        $status = $request->fulfill();

        return $status ?
            \redirect()->to(RouteServiceProvider::HOME)->with('status', 'phone-verification-success') :
            \redirect()->to(RouteServiceProvider::HOME)->with('status', 'phone-verification-failure');
    }
}
