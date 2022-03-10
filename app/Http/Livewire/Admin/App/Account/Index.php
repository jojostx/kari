<?php

namespace App\Http\Livewire\Admin\App\Account;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.app.account.index')
        ->extends('pages.admin.dashboard')
        ->section('body');
    }
}
