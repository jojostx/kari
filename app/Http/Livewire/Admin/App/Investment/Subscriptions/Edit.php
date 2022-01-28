<?php

namespace App\Http\Livewire\Admin\App\Investment\Subscriptions;

use App\Models\Subscription;
use Livewire\Component;

class Edit extends Component
{
    public Subscription $subscription;
    
    public function delete()
    {
        $this->dispatchBrowserEvent('open-subscription-delete-modal');

        $this->emit('open-subscription-delete-modal', [$this->subscription->getKey()]);
    }

    public function render()
    {
        return view('livewire.admin.app.investment.subscriptions.edit')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
