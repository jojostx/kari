<?php

namespace App\Http\Livewire\Admin\App;

use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class Dashboard extends Component
{
    public function seedData()
    {
        $this->commandStatus = Artisan::call('setup:prod');      
    }
    
    public function getCommandStatusProperty()
    {
        return 700;
    }

    public function render()
    {
        return view('livewire.admin.app.dashboard')
        ->extends('pages.admin.dashboard')
        ->section('body');
    }
}
