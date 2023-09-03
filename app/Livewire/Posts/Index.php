<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['postCreated'];

    public function render(): View
    {
        $posts = Post::query()
            ->with('user')
            ->whereBelongsTo(Auth::user())
            ->latest()
            ->get();

        return view('livewire.posts.index', ['posts' => $posts]);
    }
}
