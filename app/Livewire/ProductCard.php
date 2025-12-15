<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductCard extends Component
{
    public Product $product;

    public function mount(Product $product)
    {
        $this->product = $product->loadMissing(['bakery', 'categories']);
    }

    public function addToCart()
    {
        $this->dispatch('productAddedToCart', productId: $this->product->id);
    }

    public function render()
    {
        return view('livewire.products.product-card');
    }
}
