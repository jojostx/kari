<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Exceptions\TooManyRequestsException;
use App\Http\Livewire\Traits\WithRateLimiting;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    use WithRateLimiting;

    public $email = '';
    public $password = '';
    public $remember = false;

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
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
            return $this->addError('email', __('auth.throttle', [
                'seconds' => $exception->secondsUntilAvailable,
                'minutes' => ceil($exception->secondsUntilAvailable / 60),
            ]));
        }

        $this->validate();

        if (!Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
            'is_admin' => true
        ], $this->remember)) {
            return $this->addError('email', 'These credentials do not match our records.');;
        }

        return redirect()->intended(route('admin.dashboard'));
    }

    public function render()
    {
        return view('livewire.admin.auth.login');
    }
}
