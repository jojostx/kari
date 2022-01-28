<?php

namespace App\Http\Livewire\Admin\App\Investment\Customers;

use App\Models\User;
use Livewire\Component;

class View extends Component
{
    public User $customer;

    public function save()
    {
        \sleep(3);
    }

    public function render()
    {
        return view('livewire.admin.app.investment.customers.view')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
