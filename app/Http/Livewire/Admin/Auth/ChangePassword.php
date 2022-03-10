<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Livewire\Component;

class ChangePassword extends Component implements HasForms
{
    use InteractsWithForms;
    
    public $current_password;
    public $new_password;
    public $new_password_confirmation;
    
    public $status;

    public function mount()
    {
        $this->fill([
            'current_password' => '',
            'new_password' => '',
            'new_password_confirmation' => '',
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
                TextInput::make('current_password')
                    ->label('Current Password')
                    ->password()
                    ->rules(['required_with:new_password'])
                    ->currentPassword()
                    ->autocomplete('off')
                    ->columnSpan(1),
                Grid::make()
                    ->schema([
                        TextInput::make('new_password')
                            ->label('New Password')
                            ->password()
                            ->rules(['confirmed'])
                            ->autocomplete('new-password'),
                        TextInput::make('new_password_confirmation')
                            ->label('Confirm New Password')
                            ->password()
                            ->rules([
                                'required_with:new_password',
                            ])
                            ->dehydrated(false)
                            ->autocomplete('new-password'),
                    ]),
            ]),
        ];
    }

    public function savePasswordInfo()
    {
        $user = User::find(auth()->id());

        $status =  $user->forceFill([
            'password' => Hash::make($this->form->getState()['new_password']),
            'remember_token' => Str::random(60),
        ])->save();

        if ($status) {
            event(new PasswordReset($user));

            $this->status = __(Password::PASSWORD_RESET);
        }

        $this->reset(['new_password', 'new_password_confirmation']);
    }

    public function render()
    {
        return view('livewire.admin.auth.change-password')
        ->extends('pages.admin.dashboard')
        ->section('body');;
    }
}
