<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Show extends Component
{
    public User $user;

    public function render(): View
    {
        return view('livewire.users.show')
            ->title($this->user->name);
    }
}
