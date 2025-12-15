<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Product;

#[Layout('layouts.public')]
class Home extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::with(['bakery', 'categories'])->take(12)->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
