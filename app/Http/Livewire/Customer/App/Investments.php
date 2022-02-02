<?php

namespace App\Http\Livewire\Customer\App;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Investments extends Component
{
    public $total_principal;
    public $total_investments;
    public $total_roi;
    public $plans;
    public $subscriptions;

    public function mount()
    {
        $this->total_principal = auth()->user()->subscriptions()->pluck('principal')->sum();

        $this->total_investments = auth()->user()->subscriptions()->count();

        $this->total_roi = auth()->user()->subscriptions->reduce(function ($carry, $item) {
            return $carry + ($item['principal'] * $item['interest']);
        });

        $this->plans = collect(DB::table('plans')->get(['id', 'icon', 'name']))->map(function ($plan)
        {
            $plan->subCount = auth()->user()->subscriptions->countBy(fn ($sub) => $sub->plan_id)->get($plan->id) ?? 0;

            return $plan;
        });

        $this->subscriptions = auth()->user()->subscriptions;
    }

    public function render()
    {
        return view(
            'livewire.customer.app.investments'
        );
    }
}
