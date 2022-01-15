<?php

namespace App\Listeners\Admin;

use App\Events\Admin\PaymentApprovedEvent;
use App\Notifications\SubscriptionCreatedNotification;
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
     * @param  object  $event
     * @return void
     */
    public function handle(PaymentApprovedEvent $event)
    {        
        try {
            $event->payment->user->notify(new SubscriptionCreatedNotification($event->subscription));                
        } catch (\Throwable $e) {
            \logger("\n \n {$e}");
        }
    }
}
