<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Item extends Component
{
    public Post $post;

    public function render(): View
    {
        return view('livewire.posts.item');
    }
}
