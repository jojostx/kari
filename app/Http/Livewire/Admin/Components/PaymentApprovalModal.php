<?php

namespace App\Http\Livewire\Admin\Components;

use App\Events\Admin\PaymentApprovedEvent;
use App\Models\Payment;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PaymentApprovalModal extends Component
{
    public Payment $payment;

    protected $rules = [
        'payment.refcode' => ['required', 'string', 'min:8', 'unique:subscriptions,refcode'],
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
    }

    public function confirm(): void
    {
        $this->validate();

        DB::transaction(function () {
            $this->payment->status = true;

            $saved = $this->payment->save();

            $saved && Subscription::create([
                'refcode' => $this->payment->refcode,
                'principal' => $this->payment->plan->principal,
                'interest' => $this->payment->plan->interest,
                'user_id' => $this->payment->user_id,
                'plan_id' => $this->payment->plan_id,
                'payment_id' => $this->payment->id,
                'ends_at' => now()->addYear(),
            ]);

            $saved && $this->emit('payment-approved', [$this->payment->getKey()]);
            
            PaymentApprovedEvent::dispatchIf($saved, $this->payment);
            //Send SubsriptionCreatedEmail and SMS to the customer from the Created event of the Subscription model
        });
    }


    public function render()
    {
        return view('livewire.admin.components.payment-approval-modal');
    }
}
