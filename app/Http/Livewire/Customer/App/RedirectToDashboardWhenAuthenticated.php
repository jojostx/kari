<?php

namespace App\Http\Livewire\Customer\App;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RedirectToDashboardWhenAuthenticated extends Component
{
    public function checkIfEmailHasBeenVerified()
    {
        if (Auth::id()) {
            $user = User::find(Auth::id());
        }

        if (Auth::check() && $user?->hasVerifiedEmail()) {
            return \redirect()->route('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.customer.app.redirect-to-dashboard-when-authenticated');
    }
}
