<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ResetEmail extends Component implements HasForms
{
    use InteractsWithForms;

    public $email;
    public $current_password;

    public bool $savedEmailInfo = false;

    public function mount()
    {
        $this->fill([
            'email' => auth()->user()->email,
            'current_password' => '',
        ]);
    }

    protected function getFormModel()
    {
        return  auth()->user();
    }

    protected function getFormSchema(): array
    {
        return [
            Grid::make([
                'default' => 1,
                'md' => 2,
            ])->schema([
                TextInput::make('email')->label('Email Address')
                    ->required()
                    ->rules([
                        'unique:pending_user_emails,email',
                        'email',
                        Rule::unique('users', 'email'),
                        'max:255',
                        'ends_with:@kariinvestment.com'
                    ])
                    ->columnSpan(1),

                TextInput::make('current_password')
                    ->label('Current Password')
                    ->password()
                    ->required()
                    ->currentPassword()
                    ->autocomplete('off')
                    ->columnSpan(1),
            ])
        ];
    }

    public function saveEmailInfo()
    {
        $user = User::find(auth()->id());

        $result = $user->newEmail($this->form->getState()['email']);

        if ($result) {
            $this->savedEmailInfo = true;
        }

        $this->reset(['current_password']);
    }

    public function render()
    {
        return view('livewire.admin.auth.reset-email')
            ->extends('pages.admin.dashboard')
            ->section('body');
    }
}
