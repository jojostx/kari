<?php

namespace App\Listeners\Customer;

use App\Notifications\Customer\PayoutCreatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPayoutCreatedNotification implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $event->payout->customer->notify(new PayoutCreatedNotification());
    }
}
