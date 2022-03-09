<?php

namespace App\Http\Livewire\Admin\App;

use App\Models\Payment;
use App\Models\Payout;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class Dashboard extends Component
{    
    // Customers //
    public function getTotalCustomersProperty()
    {
        return User::customers()->count();
    }

    public function getTotalVerifiedCustomersProperty()
    {
        return User::customers()->verified()->count();
    }

    public function getTotalUnverifiedCustomersProperty()
    {
        return User::customers()->unverified()->count();
    }
  
    // Payments //
    public function getTotalPaymentsProperty()
    {
        return Payment::count();
    }

    public function getTotalPendingPaymentsProperty()
    {
        return Payment::pending()->count();
    }

    public function getTotalApprovedPaymentsProperty()
    {
        return Payment::approved()->count();
    }

    // Subscriptions //
    public function getTotalSubscriptionsProperty()
    {
        return Subscription::count();
    }

    public function getTotalExpiredSubscriptionsProperty()
    {
        return Subscription::matured()->count();
    }

    public function getTotalOngoingSubscriptionsProperty()
    {
        return Subscription::ongoing()->count();
    }

    // Payouts
    public function getTotalPayoutsProperty()
    {
        return Payout::count();
    }

    public function getTotalCreatedPayoutsProperty()
    {
        return Payout::generated()->count();
    }

    public function getTotalRequestedPayoutsProperty()
    {
        return Payout::requested()->count();
    }

    public function getTotalWithdrawnPayoutsProperty()
    {
        return Payout::withdrawn()->count();
    }

    public function render()
    {
        return view('livewire.admin.app.dashboard')
        ->extends('pages.admin.dashboard')
        ->section('body');
    }
}
