<?php

namespace App\Http\Livewire\Admin\Components;

use App\Models\Subscription;
use Illuminate\Support\Facades\Hash;
use InvalidArgumentException;
use Livewire\Component;

class SubscriptionDeleteConfirmationModal extends Component
{
    public Subscription $subscription;

    public $password;

    protected $rules = [
        'password' => ['required', 'string'],
    ];

    protected function getListeners()
    {
        return ['open-subscription-delete-modal' => 'hydrateProperties'];
    }

    public function hydrateProperties(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function confirm()
    {
        $this->validate();

        if (!Hash::check($this->password, auth()->user()->getAuthPassword())) {
            $this->addError('password', 'The given password does not match the Admin password.');
            return false;
        }

        $this->subscription->delete();

        $this->dispatchBrowserEvent('close-subscription-delete-modal');
        
        session()->flash('message', 'Subscription successfully deleted.');

        return redirect()->route('admin.investment.subscriptions.index');
    }

    public function render()
    {
        return view('livewire.admin.components.subscription-delete-confirmation-modal');
    }
}
