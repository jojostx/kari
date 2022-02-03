<?php

namespace App\Http\Livewire\Customer\App;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class AccountSettings extends Component implements HasForms
{
    use InteractsWithForms;

    public function render()
    {
        return view('livewire.customer.app.account-settings');
    }
}
