<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule(['required', 'string', 'max:255'])]
    public string $title;

    #[Rule(['required', 'string'])]
    public string $body;

    public function save(): void
    {
        $validated = $this->validate();

        $post = Auth::user()->posts()->create($validated);
        $this->dispatch('postCreated', $post->id);

        session()->flash('success', 'Post created successfully.');
        $this->reset();
    }

    public function render(): View
    {
        $users = User::all();

        return view('livewire.posts.create')
            ->with(['users' => $users]);
    }
}
