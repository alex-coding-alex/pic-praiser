<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Comment extends Component
{
    public Post $post;

    #[Computed]
    public function postComments()
    {
        return $this->post->comments()->latest()->with('user')->get();
    }

    public function render()
    {
        return view('livewire.posts.comment');
    }
}
