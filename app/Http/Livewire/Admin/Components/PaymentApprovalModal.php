<?php

namespace App\Http\Livewire\Admin\Components;

use App\Events\Admin\PaymentApprovedEvent;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PaymentApprovalModal extends Component
{
    public Payment $payment;

    protected function getListeners()
    {
        return ['open-payment-approval-modal' => 'hydrateProperties'];
    }

    public function hydrateProperties(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function approve(): void
    {
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
