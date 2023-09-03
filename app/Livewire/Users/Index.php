<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render(): View
    {
        $users = User::query()->paginate(10);

        return view('livewire.users.index')
            ->with(['users' => $users])
            ->title('List Users');
    }
}
