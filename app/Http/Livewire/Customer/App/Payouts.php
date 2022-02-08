<?php

namespace App\Http\Livewire\Customer\App;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Payouts extends Component
{
    public Collection $subscriptions;

    public function mount()
    {
        $this->subscriptions = Auth::user()->subscriptions()->matured()->get();
    }

    public function render()
    {
        return view('livewire.customer.app.payouts');
    }
}
