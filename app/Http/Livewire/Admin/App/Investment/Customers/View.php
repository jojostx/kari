<?php

namespace App\Http\Livewire\Admin\App\Investment\Customers;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.admin.app.investment.customers.view')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
