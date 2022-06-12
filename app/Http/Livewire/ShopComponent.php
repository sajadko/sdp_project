<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ShopComponent extends Component
{
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash("success_atc", "Item successfully added to the cart");
        return redirect()->route("product.cart");
    }

    use WithPagination;

    public function render()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(9);
        return view('livewire.shop-component', ['products' => $products])->layout('layouts.main');
    }
}
