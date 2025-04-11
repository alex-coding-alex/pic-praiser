<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\Posts\PostForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.frontpage')]
class PostUpload extends Component
{
    public PostForm $form;

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('base');
    }

    public function render()
    {
        return view('livewire.posts.post-upload');
    }
}
