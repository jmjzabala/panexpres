<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoriesScroll extends Component
{
    public $categories;
    public $selectedCategoryId = 0;

    public function mount()
    {
        $this->categories = Category::orderBy('name')->limit(20)->get();
    }

    public function select(int $id)
    {
        $this->selectedCategoryId = $id;
        $this->emit('categorySelected', $id);
    }

    public function render()
    {
        return view('livewire.categories-scroll');
    }
}
