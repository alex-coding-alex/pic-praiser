<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.frontpage')]
class PostView extends Component
{
    public Post $post;

    public function render()
    {
        return view('livewire.posts.post-view');
    }
}
