<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.frontpage')]
class PostUpload extends Component
{
    public function render()
    {
        return view('livewire.posts.post-upload');
    }
}
