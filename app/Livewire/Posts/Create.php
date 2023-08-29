<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule(['required', 'string', 'max:255'])]
    public string $title;

    #[Rule(['required', 'string'])]
    public string $body;

    #[Rule(['required', 'exists:' . User::class . ',id'])]
    public string $user_id;

    public function save(): void
    {
        $validated = $this->validate();

        Post::query()->create($validated);

        $this->reset();
    }

    public function render(): View
    {
        $users = User::all();

        return view('livewire.posts.create')
            ->with(['users' => $users]);
    }
}
