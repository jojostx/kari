<?php

namespace App\Http\Livewire\Admin\App\Investment\Customers;

use App\Models\User;
use Livewire\Component;

class View extends Component
{
    public User $customer;

    protected $rules = [
        'customer.location.address' => ['required', 'string'],
        'customer.phone_number' => ['required', 'string'], 
        'customer.email' => ['required', 'email'], 
        'customer.first_name' => ['required', 'string', 'max:124'], 
        'customer.middle_name' => ['required', 'string', 'max:124'], 
        'customer.last_name' => ['required', 'string', 'max:124'], 
    ];

    public function save()
    {
        return redirect()->route('admin.investment.customers.index');
    }

    public function render()
    {
        return view('livewire.admin.app.investment.customers.view')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
