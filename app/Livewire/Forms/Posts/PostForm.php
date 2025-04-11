<?php

namespace App\Livewire\Forms\Posts;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate(['required', 'string'])]
    public $name = '';

    #[Validate(['required', 'exists:users'])]
    public $user_id = '';

    public function store()
    {
        $this->validate();
        Post::create($this->all());
    }
}
