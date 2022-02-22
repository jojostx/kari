<?php

namespace App\Http\Livewire\Customer\App\Payouts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['refreshParent' => '$refresh'];

    public function getCreatedPayoutsProperty()
    {
        return Auth::user()->payouts()->generated()->get();
    }
   
    public function getRequestedPayoutsProperty()
    {
        return Auth::user()->payouts()->requested()->get();
    }
 
    public function getWithdrawnPayoutsProperty()
    {
        return Auth::user()->payouts()->withdrawn()->get();
    }

    public function render()
    {
        return view('livewire.customer.app.payouts.index');
    }
}
