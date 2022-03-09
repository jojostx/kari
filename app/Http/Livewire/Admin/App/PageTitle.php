<?php

namespace App\Http\Livewire\Admin\App;

use Livewire\Component;

class PageTitle extends Component
{
    public $title = 'DashBoard';

    protected function getListeners(): array
    {
        return ['changeTitle'];
    }
    
    public function changeTitle($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.admin.app.page-title');
    }
}
