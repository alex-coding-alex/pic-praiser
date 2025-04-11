<?php

namespace App\Livewire\Forms\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate(['required', 'string'])]
    public $name = '';

    public function store()
    {
        $this->validate();

        Post::create([
            ...$this->all(),
            'user_id' => Auth::user()->id,
        ]);
    }
}
