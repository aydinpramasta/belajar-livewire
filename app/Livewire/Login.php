<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Login extends Component
{
    public string $email;
    public string $password;

    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function authenticate(): void
    {
        $credentials = $this->validate();

        if (!Auth::guard('web')->attempt($credentials)) {
            $this->reset('password');

            throw ValidationException::withMessages(['email' => __('auth.failed')]);
        }

        $this->redirectRoute('home');
    }

    public function render(): View
    {
        return view('livewire.login');
    }
}
