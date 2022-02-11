<?php

namespace App\Providers;

use App\Events\Admin\PaymentApprovedEvent;
use App\Events\Customer\PaymentRefcodeUpdatedByCustomerForApprovalEvent;
use App\Events\Customer\PayoutCreatedEvent;
use App\Listeners\Admin\SendPaymentApprovedNotification;
use App\Listeners\Admin\SendSubsriptionCreatedNotification;
use App\Listeners\Customer\SendPaymentApprovalRequestNotification;
use App\Listeners\Customer\SendPayoutCreatedNotification;
use App\Models\PendingUserPhoneNumber;
use App\Models\User;
use App\Observers\PendingUserPhoneNumberObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        PaymentApprovedEvent::class => [
            SendPaymentApprovedNotification::class,
        ],
       
        PayoutCreatedEvent::class => [
            SendPayoutCreatedNotification::class,
        ],

        PaymentRefcodeUpdatedByCustomerForApprovalEvent::class => [
            SendPaymentApprovalRequestNotification::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        
        PendingUserPhoneNumber::observe(PendingUserPhoneNumberObserver::class);
    }
}
