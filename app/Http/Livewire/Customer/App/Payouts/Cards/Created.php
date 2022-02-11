<?php

namespace App\Http\Livewire\Customer\App\Payouts\Cards;

use App\Models\Payout;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Created extends Component
{
    public Payout $payout;

    public function withdraw()
    {
        DB::transaction(function () {
            if ($this->payout->withdraw()) {
                $this->emit('refreshParent');
            }
        });
    }
    public function render()
    {
        return view('livewire.customer.app.payouts.cards.created');
    }
}
