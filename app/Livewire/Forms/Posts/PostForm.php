<?php

namespace App\Livewire\Forms\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate(['required', 'string'])]
    public string $name = '';

    #[Validate(['image'])]
    public $image;

    public function store()
    {
        $this->validate();

        $post = Post::create([
            ...$this->all(),
            'user_id' => Auth::user()->id,
        ]);
        $post->addMedia($this->image->getRealPath())->toMediaCollection(Post::IMAGE_COLLECTION);
        $post->save();

        return $post;
    }
}
