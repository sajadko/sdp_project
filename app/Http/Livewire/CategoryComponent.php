<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class CategoryComponent extends Component
{

    public $category_slug;

    public function mount($category_slug)
    {
        $this->categoey_slug = $category_slug;
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
        $category = Category::where('slug', $this->category_slug)->first();
        $category_name = $category->name;
        $category_id = $category->id;
        $products = Product::where('category_id', $category_id)->paginate(6);
        return view('livewire.category-component', ['products' => $products, 'category_name' => $category_name])->layout('layouts.main');
    }
}
