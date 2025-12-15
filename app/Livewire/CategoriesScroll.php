<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoriesScroll extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::orderBy('name')->limit(20)->get();
    }

    public function render()
    {
        return view('livewire.categories-scroll');
    }
}
