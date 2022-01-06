<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Http\Livewire\Exceptions\TooManyRequestsException;
use App\Http\Livewire\Traits\WithRateLimiting;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    use WithRateLimiting;

    public $email = '';
    public $password = '';
    public $remember = false;

    public function mount(): void
    {
        if (Auth::check()) {
            redirect()->route('admin.dashboard');
        }
    }

    protected function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'remember' => ['boolean'],
        ];
    }

    protected $messages = [
        'email' => 'These credentials do not match our records.',
    ];

    public function authenticate()
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            $this->addError('email', __('auth.throttle', [
                'seconds' => $exception->secondsUntilAvailable,
                'minutes' => ceil($exception->secondsUntilAvailable / 60),
            ]));

            return;
        }

        $this->validate();

        if (!Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ], $this->remember)) {

            $this->addError('email', 'These credentials do not match our records.');

            return;
        }

        return redirect()->intended(route('admin.dashboard'));
    }

    public function render()
    {
        return view('livewire.admin.auth.login');
    }
}
