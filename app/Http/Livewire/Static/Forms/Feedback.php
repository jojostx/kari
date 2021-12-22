<?php

namespace App\Http\Livewire\Static\Forms;

use App\Models\Feedback as FeedbackModel;
use Livewire\Component;

class Feedback extends Component
{
    public $type;
    public $email;
    public $ip_address;

    public function mount()
    {
        $this->ip_address = \request()->ip() ?? "";
        $this->email = \auth()->user() ? auth()->user()->email : '';  
    }

    protected function rules()
    {
        return [
            'type' => ['required', 'boolean'],
            'ip_address' => ['nullable', 'ip'],
            'email' => ['nullable', 'email'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {      
        $validated = $this->validate();

        $feedback = FeedbackModel::create($validated);

        //this is where we send an email [queued job] to support containing the saved feedback
   
        $feedback->type ? \session()->flash('message', 'Thanks for your feedback.') : \session()->flash('message', 'Thanks for your feedback. We will try to update this article to be more helpful to you.');
    
        $this->reset();
    }

    public function render()
    {
        return view('livewire.static.forms.feedback');
    }
}
