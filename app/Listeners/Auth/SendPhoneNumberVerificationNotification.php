<?php

namespace App\Listeners\Auth;

use App\Models\Concerns\Auth\MustVerifyPhoneNumber;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPhoneNumberVerificationNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

     /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        if ($event->user instanceof MustVerifyPhoneNumber && ! $event->user->hasVerifiedPhoneNumber()) {
            
            try {
                $event->user->sendPhoneNumberVerificationNotification();                
            } catch (\Throwable $e) {
                \logger("\n \n {$e}");
            }
        }
    }
}
