<?php

namespace App\Http\Livewire\Admin\App\Static\NewsFeeds\Subscribers;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.app.static.news-feeds.subscribers.index')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
