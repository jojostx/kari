<?php

namespace App\Http\Livewire\Admin\Components;

use App\Models\Subscription;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SubscriptionEditConfirmationModal extends Component
{
    public Subscription $subscription;

    public $password;

    protected $rules = [
        'password' => ['required', 'string'],
    ];

    protected function getListeners()
    {
        return ['open-subscription-edit-modal' => 'hydrateProperties'];
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

        $this->dispatchBrowserEvent('close-subscription-edit-modal');
        
        session()->flash('message', 'Subscription successfully updated.');

        return redirect()->route('admin.investment.subscriptions.index');
    }

    public function render()
    {
        return view('livewire.admin.components.subscription-edit-confirmation-modal');
    }
}
