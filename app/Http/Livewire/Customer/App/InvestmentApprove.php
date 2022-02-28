<?php

namespace App\Http\Livewire\Customer\App;

use App\Events\Customer\PaymentRefcodeUpdatedByCustomerForApprovalEvent;
use App\Models\Payment;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class InvestmentApprove extends Component implements HasForms
{
    use InteractsWithForms, AuthorizesRequests;

    public Payment $payment;

    public function mount()
    {
        $this->authorize('view', $this->payment);
      
        if ($this->payment->refcode && !$this->payment->status) {
            abort(403, 'unauthorized action');
        }

        $this->form->fill([
            'refcode' => $this->payment->refcode,
        ]);
    }

    protected function getFormModel()
    {
        return $this->payment;
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('refcode')
            ->label('Refcode/Teller Code')
            ->helperText('The teller code of the payment you made at your bank')
            ->required()
            ->rules(['between:12,32'])->unique(table: Payment::class, column: 'refcode'),
        ];
    }

    public function submit()
    {        
        $this->payment->refcode = $this->form->getState()['refcode'];

        if ($this->payment->save()) {
            PaymentRefcodeUpdatedByCustomerForApprovalEvent::dispatch($this->payment);
            
            session()->flash('message', 'A Payment approval request has been sent to the admin.');

            return redirect()->route('investments.index');
        }

        session()->flash('message', 'An Error occurred while submitting your request. please try');

        return false;
    }

    public function cancel()
    {        
        return redirect()->route('investments.index');
    }

    public function render()
    {
        return view('livewire.customer.app.investment-approve');
    }
}
