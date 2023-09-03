<?php

namespace App\Livewire\Posts;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.posts.index');
    }
}
