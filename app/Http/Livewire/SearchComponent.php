<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class SearchComponent extends Component
{

    public $search;

    public function mount()
    {
        $this->fill(request()->only('search'));
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash("success_atc", "Item successfully added to the cart");
        return redirect()->route("product.cart");
    }

    use WithPagination;

    public function render()
    {
        $products = Product::where('name', 'like', '%' . $this->search . '%')->paginate(6);
        return view('livewire.search-component', ['products' => $products])->layout('layouts.main');
    }
}
