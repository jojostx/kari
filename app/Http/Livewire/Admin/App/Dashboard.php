<?php

namespace App\Http\Livewire\Admin\App;

use Livewire\Component;

class Dashboard extends Component
{
    public function mount(): void
    {
        $this->emit('changeTitle', 'Dashboard');    
    }

    public function render()
    {
        return view('livewire.admin.app.dashboard')
        ->extends('pages.admin.dashboard')
        ->section('body');
    }
}
