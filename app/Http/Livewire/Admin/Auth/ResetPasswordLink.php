<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Http\Livewire\Traits\WithRateLimiting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ResetPasswordLink extends Component
{
    use WithRateLimiting;

    public $email = '';
    public $status = '';

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
    }

    protected function rules()
    {
        return [
            'email' => [
                'required',
                'email',
                Rule::exists('users')->where(function ($query) {
                    return $query->where('is_admin', true);
                })
            ],
        ];
    }

    protected $messages = [
        'email' => 'These credentials do not match our records.',
    ];

    public function sendPasswordResetLink()
    {
        $status = Password::sendResetLink($this->validate());

        $this->status = ($status == Password::RESET_LINK_SENT) ?  __($status) : 'unable to send reset link, try again later';
    }

    public function render()
    {
        return view('livewire.admin.auth.reset-password-link')
            ->extends('layouts.admin.app')
            ->section('contents');
    }
}
// 