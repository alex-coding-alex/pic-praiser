<?php

namespace App\Livewire\Forms\Posts;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CommentForm extends Form
{
    #[Validate(['required', 'string', 'max:1000'])]
    public $comment = '';

    public function store(Post $post): Comment
    {
        $this->validate();

        $comment = Comment::create([
            ...$this->all(),
            'user_id' => Auth::user()->id,
            'post_id' => $post->id,
        ]);
        $this->reset('comment');

        return $comment;
    }
}
