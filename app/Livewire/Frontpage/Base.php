<?php

namespace App\Livewire\Frontpage;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.frontpage')]
class Base extends Component
{
    public function render()
    {
        return view('livewire.frontpage.base');
    }
}
