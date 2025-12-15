<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryNav extends Component
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
        $this->dispatch('categorySelected', categoryId: $id);
    }

    public function render()
    {
        return view('components.layouts.sidebar.category-nav');
    }
}
