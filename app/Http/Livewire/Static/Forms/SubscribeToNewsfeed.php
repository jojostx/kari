<?php

namespace App\Http\Livewire\Static\Forms;

use App\Models\NewsfeedSubscription;
use Livewire\Component;

class SubscribeToNewsfeed extends Component
{
    public $fullname;
    public $email;

    protected function rules()
    {
        return [
            'fullname' => ['required', 'max:255'],
            'email' => ['required', 'email'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {        
        $validated = $this->validate();

        $newsfeedSubscription = NewsfeedSubscription::firstOrCreate(
            ['email' => $validated['email'] ],
            $validated
        );

        //this is where we notify support through mail of a new newsfeed subscription
        // @todo add the ability to unsub from newsfeed.
    
        \session()->flash('message', 'Your subscription has been recieved. Thank you');
        
        $this->reset();
    }

    public function render()
    {
        return view('livewire.static.forms.subscribe-to-newsfeed');
    }
}
