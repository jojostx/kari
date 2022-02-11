<?php

namespace App\Http\Livewire\Admin\Components;

use App\Events\Admin\PaymentApprovedEvent;
use App\Models\Payout;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PayoutApprovalModal extends Component
{
    public Payout $payout;

    public $showForm = false;

    protected $rules = [
        'payout.refcode' => ['required', 'string', 'min:8', 'unique:payouts,refcode', 'unique:subscriptions,refcode'],
    ];

    protected $validationAttributes = [
        'payout.refcode' => 'Teller Code'
    ];

    protected function getListeners()
    {
        return ['open-payout-approval-modal' => 'hydrateProperties'];
    }

    public function hydrateProperties(Payout $payout)
    {
        $this->payout = $payout;
        
        if (is_null($this->payout->refcode)) {
            $this->showForm = true;
        }
    }

    public function confirm(): void
    {
        $this->validate();

        DB::transaction(function () {
            if ($this->payout->approve()) {
                $this->emit('payout-approved', [$this->payout->getKey()]);
    
                $this->dispatchBrowserEvent('close-payout-approval-modal');
                
                PaymentApprovedEvent::dispatch($this->payout);
            }
        });
    }

    public function render()
    {
        return view('livewire.admin.components.payout-approval-modal');
    }
}
