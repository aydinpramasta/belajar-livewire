<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout(): void
    {
        Auth::logout();

        $this->redirectRoute('login');
    }

    public function render(): View
    {
        return view('livewire.logout');
    }
}
