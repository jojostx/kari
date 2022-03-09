<?php

namespace App\Listeners\Customer;

use App\Events\Customer\PayoutRequestedEvent;
use App\Models\User;
use App\Notifications\Customer\PayoutRequestedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendPayoutRequestedNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public $tries = 5;

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
     * @param  PayoutRequestedEvent  $event
     * @return void
     */
    public function handle(PayoutRequestedEvent $event)
    {
        $admins = User::admins()->get();

        Notification::send($admins, new PayoutRequestedNotification($event->payment));
    }
}
