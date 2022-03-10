<?php

namespace App\Http\Livewire\Admin\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Livewire\Component;

class ResetPassword extends Component implements HasForms
{
    use InteractsWithForms;

    public $email;
    public $password;
    public $password_confirmation;
    public $token;

    public $status = '';

    public function mount($token)
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        $this->fill([
            'email' => '',
            'password' => '',
            'password_confirmation' => '',
            'token' => $token,
        ]);
    }

    protected function getFormModel()
    {
        return App\Models\User::class;
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('email')->label('Email Address')
                ->required()
                ->rules([
                    'email',
                    'required',
                    Rule::exists('users')->where(function ($query) {
                        return $query->where('is_admin', true);
                    }),
                ])
                ->columnSpan(1),

            TextInput::make('password')
                ->label('New Password')
                ->password()
                ->rules(['required_with:password_confirmation'])
                ->autocomplete('off')
                ->columnSpan(1),

            TextInput::make('password_confirmation')
                ->label('Confirm New Password')
                ->password()
                ->rules([
                    'required_with:password',
                ])
                ->autocomplete('off'),
        ];
    }

    public function resetPassword()
    {
        $status = Password::reset(
            array_merge($this->form->getState(), ['token' => $this->token]),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('admin.login')->with('status', __($status));
        }

        $this->status = 'unable to reset password, try again later';
    }

    public function render()
    {
        return view('livewire.admin.auth.reset-password')
            ->extends('layouts.admin.app')
            ->section('contents');
    }
}
