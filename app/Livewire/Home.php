<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.public')]
class Home extends Component
{
    #[On('categorySelected')]
    public function onCategorySelected($categoryId)
    {
        // received categorySelected via Livewire v3 dispatch API
    }

    public function render()
    {
        return view('livewire.home');
    }
}
