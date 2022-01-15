<?php

namespace App\Http\Livewire\Admin\App\Investment\Payouts;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.app.investment.payouts.index')
        ->extends('pages.admin.dashboard')
        ->section('body');
    }
}
