<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\Posts\CommentForm;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Comment extends Component
{
    public Post $post;

    public CommentForm $form;

    public function save()
    {
        $this->form->store($this->post);
    }

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
