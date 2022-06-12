<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $products = Product::latest()->take(8)->get();
        $categories = Category::all();
        return view('livewire.home-component', ['categories' => $categories, 'products' => $products])->layout('layouts.main');
    }
}
