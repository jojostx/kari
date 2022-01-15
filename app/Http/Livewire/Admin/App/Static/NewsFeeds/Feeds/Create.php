<?php

namespace App\Http\Livewire\Admin\App\Static\NewsFeeds\Feeds;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.app.static.news-feeds.feeds.create')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
