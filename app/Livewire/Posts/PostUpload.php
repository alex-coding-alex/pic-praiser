<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\Posts\PostForm;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.frontpage')]
class PostUpload extends Component
{
    use WithFileUploads;

    public PostForm $form;

    public function save()
    {
        $this->form->store();

        $this->redirectRoute('base');
    }

    public function render()
    {
        return view('livewire.posts.post-upload');
    }
}
