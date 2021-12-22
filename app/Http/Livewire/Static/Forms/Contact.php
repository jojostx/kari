<?php

namespace App\Http\Livewire\Static\Forms;

use App\Models\ContactMessage;
use App\Rules\StartsWith;
use Livewire\Component;

class Contact extends Component
{
    public $fullname;
    public $phone;
    public $email;
    public $message;

    protected function rules()
    {
        return [
            'fullname' => ['required', 'max:255'],
            'phone' => ['required_without:email', 'size:11', new StartsWith()],
            'email' => ['required_without:phone', 'email'],
            'message' => ['required', 'string', 'max:1024'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {        
        $validated = $this->validate();

        $contactMessage = ContactMessage::create($validated);

        //this is where we send an email [queued job] to support containing the saved contactMessage
        
        \session()->flash('message', 'Your message has been recieved. A customer support agent will get in touch with you soon.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.static.forms.contact');
    }
}
