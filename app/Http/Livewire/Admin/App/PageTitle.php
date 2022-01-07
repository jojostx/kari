<?php

namespace App\Http\Livewire\Admin\App;

use Livewire\Component;

class PageTitle extends Component
{
    public $title = 'Dash';

    protected function getListeners(): array
    {
        return ['Title:Dashboard' => 'changeTitle'];
    }
    
    public function changeTitle()
    {
        $this->title = 'Dashboard';
    }

    public function render()
    {
        return view('livewire.admin.app.page-title');
    }
}
