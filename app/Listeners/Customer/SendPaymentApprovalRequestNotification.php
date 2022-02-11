<?php

namespace App\Listeners\Customer;

use App\Events\Customer\PaymentRefcodeUpdatedByCustomerForApprovalEvent;
use App\Models\User;
use App\Notifications\Customer\PaymentApprovalRequestNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendPaymentApprovalRequestNotification implements ShouldQueue
{
    use InteractsWithQueue;
    
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
     * @param  PaymentRefcodeUpdatedByCustomerForApprovalEvent  $event
     * @return void
     */
    public function handle(PaymentRefcodeUpdatedByCustomerForApprovalEvent $event)
    {
        $admins = User::admins()->get();

        Notification::send($admins, new PaymentApprovalRequestNotification($event->payment));
    }
}
