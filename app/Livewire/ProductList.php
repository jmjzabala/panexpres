<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductList extends Component
{
    use WithPagination;

    public $perPage = 12;
    public $categoryId = null;

    protected $listeners = [
        'categorySelected' => 'onCategorySelected',
    ];

    public function mount()
    {
        $this->resetPage();
    }

    public function onCategorySelected($categoryId)
    {
        dd($categoryId);
        $this->categoryId = $categoryId ?: null;
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Product::with(['bakery', 'categories']);

        if ($this->categoryId) {
            $query->whereHas('categories', function ($q) {
                $q->where('categories.id', $this->categoryId);
            });
        }

        $products = $query->paginate($this->perPage);

        return view('livewire.products.product-list', [
            'products' => $products,
        ]);
    }
}
