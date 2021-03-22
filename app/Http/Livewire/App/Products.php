<?php

namespace App\Http\Livewire\App;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        $products = Product::get();
        return view('livewire.app.products', [
            'products' => $products,
        ]);
    }
}
