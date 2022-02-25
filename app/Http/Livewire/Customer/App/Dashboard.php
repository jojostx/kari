<?php

namespace App\Http\Livewire\Customer\App;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public $total_principal;
    public $total_investments;
    public $total_roi;
    public $plans;

    public function mount()
    {
        $this->total_principal = auth()->user()->subscriptions()->ongoing()->pluck('principal')->sum();

        $this->total_investments = auth()->user()->subscriptions()->ongoing()->count();

        $this->total_roi = auth()->user()->subscriptions()->ongoing()->get()->reduce(function ($carry, $item) {
            return $carry + $item->total_payout;
        });

        $this->plans = collect(DB::table('plans')->get(['id', 'icon', 'name']))->map(function ($plan)
        {
            $plan->subCount = auth()->user()->subscriptions()->ongoing()->get()->countBy(fn ($sub) => $sub->plan_id)->get($plan->id) ?? 0;

            return $plan;
        });
    }

    public function render()
    {
        return view('livewire.customer.app.dashboard');
    }
}
