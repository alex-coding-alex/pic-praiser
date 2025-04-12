<?php

namespace App\Livewire\Frontpage;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.frontpage')]
class Base extends Component
{
    #[Computed]
    public function randPost(): ?Post
    {
        // Get a random post to show
        return Post::inRandomOrder()->first();
    }

    public function render()
    {
        return view('livewire.frontpage.base');
    }
}
