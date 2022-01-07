<?php

namespace App\Http\Livewire\Admin\App;

use Livewire\Component;

class Dashboard extends Component
{
    public function changer()
    {
        $this->emit('Title:Dashboard');    
    }

    public function render()
    {
        return view('livewire.admin.app.dashboard');
    }
}
