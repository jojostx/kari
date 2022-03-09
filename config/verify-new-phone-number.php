<?php

use App\Providers\RouteServiceProvider;

return [
    /**
     * Here you can specify the name of a custom route to handle the verification.
     */
    'route' => null,

    /**
     * Here you can specify the path to redirect to after verification.
     */
    'redirect_to' => RouteServiceProvider::HOME,

    /**
     * Whether to login the user after successfully verifying its email.
     */
    'login_after_verification' => true,

    /**
     * Should the user be permanently "remembered" by the application.
     */
    'login_remember' => false,

    /**
     * Model class that will be used to store and retrieve the tokens.
     */
    'model' => App\Models\PendingUserPhoneNumber::class,
];
