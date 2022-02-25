<?php

namespace App\Http\Livewire\Admin\Components;

use App\Events\Admin\PaymentApprovedEvent;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PaymentApprovalModal extends Component
{
    public Payment $payment;

    public $showForm = false;

    protected $rules = [
        'payment.refcode' => ['required', 'string', 'min:8', 'unique:payments,refcode', 'unique:payouts,refcode', 'unique:subscriptions,refcode'],
    ];

    protected $validationAttributes = [
        'payment.refcode' => 'Teller Code'
    ];

    protected function getListeners()
    {
        return ['open-payment-approval-modal' => 'hydrateProperties'];
    }

    public function hydrateProperties(Payment $payment)
    {
        $this->payment = $payment;
        
        if (is_null($this->payment->refcode)) {
            $this->showForm = true;
        }
    }

    public function confirm(): void
    {
        $this->validate();

        DB::transaction(function () {
            if ($this->payment->approve()) {
                $this->emit('payment-approved', [$this->payment->getKey()]);
    
                $this->dispatchBrowserEvent('close-payment-approval-modal');
                
                PaymentApprovedEvent::dispatch($this->payment, $this->payment->subscription);
            }
        });
    }


    public function render()
    {
        return view('livewire.admin.components.payment-approval-modal');
    }
}
