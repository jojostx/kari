<?php

namespace App\Listeners\Admin;

use App\Events\Admin\PaymentApprovedEvent;
use App\Notifications\Customer\SubscriptionCreatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPaymentApprovedNotification implements ShouldQueue
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
     * @param  PaymentApprovedEvent  $event
     * @return void
     */
    public function handle(PaymentApprovedEvent $event)
    {        
        if ($event->payment->customer) {
            try {
                $event->payment->customer->notify(new SubscriptionCreatedNotification($event->subscription));                
            } catch (\Throwable $e) {
                \logger("\n \n {$e}");
            }
        }
    }
}
