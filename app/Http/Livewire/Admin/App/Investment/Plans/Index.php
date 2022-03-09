<?php

namespace App\Http\Livewire\Admin\App\Investment\Plans;

use App\Models\Plan;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view(
            'livewire.admin.app.investment.plans.index', ['plans' => Plan::all()])
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
