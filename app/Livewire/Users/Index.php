<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        $users = User::all();

        return view('livewire.users.index')
            ->with(['users' => $users])
            ->title('List Users');
    }
}
