<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.public')]
class Home extends Component
{
    protected $listeners = [
        'categorySelected' => 'onCategorySelected',
    ];

    public function onCategorySelected($categoryId)
    {
        // dd($categoryId);
        // Re-emit the selection specifically to the ProductList component so it filters accordingly.
        $this->emitTo('product-list', 'categorySelected', $categoryId);
    }

    public function render()
    {
        return view('livewire.home');
    }
}
