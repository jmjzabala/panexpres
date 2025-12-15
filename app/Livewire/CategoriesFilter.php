<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoriesFilter extends Component
{
    public $categories;
    public $selectedCategoryId = 0;

    protected $listeners = [
        'categorySelected' => 'onCategorySelected',
    ];

    public function mount()
    {
        $this->categories = Category::orderBy('name')->limit(20)->get();
    }

    public function select(int $id)
    {
        $this->selectedCategoryId = $id;
    }

    public function onCategorySelected($id)
    {
        $this->selectedCategoryId = $id ?: 0;
        $this->emit('categorySelected', $id);
    }

    public function render()
    {
        return view('livewire.categories-filter');
    }
}
