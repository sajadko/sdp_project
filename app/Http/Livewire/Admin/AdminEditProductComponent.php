<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_desc;
    public $desc;
    public $reg_price;
    public $sale_price;
    public $sku;
    public $stock_status;
    public $featured;
    public $quantity;
    public $file;
    public $category_id;
    public $newimage;
    public $product_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug', $product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_desc = $product->short_desc;
        $this->desc = $product->desc;
        $this->reg_price = $product->reg_price;
        $this->sale_price = $product->sale_price;
        $this->sku = $product->sku;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->file = $product->img;
        $this->category_id = $product->category_id;
        $this->product_id = $product->id;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name'         => 'required',
            'slug'         => 'required|unique:products,slug,' . $this->product_id,
            'short_desc'   => 'required',
            'desc'         => 'required',
            'reg_price'    => 'required|numeric',
            'sale_price'   => 'numeric|nullable',
            'sku'          => 'required',
            'stock_status' => 'required',
            'quantity'     => 'required|numeric',
            'newimage'     => 'mimes:jpeg,png,jpg|nullable',
            'category_id'  => 'required',
        ]);
    }

    public function updateProduct()
    {
        $this->validate([
            'name'         => 'required',
            'slug'         => 'required|unique:products,slug,' . $this->product_id,
            'short_desc'   => 'required',
            'desc'         => 'required',
            'reg_price'    => 'required|numeric',
            'sale_price'   => 'numeric|nullable',
            'sku'          => 'required',
            'stock_status' => 'required',
            'quantity'     => 'required|numeric',
            'newimage'     => 'mimes:jpeg,png,jpg|nullable',
            'category_id'  => 'required',
        ]);
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_desc = $this->short_desc;
        $product->desc = $this->desc;
        $product->reg_price = $this->reg_price;
        $product->sale_price = $this->sale_price;
        $product->sku = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        if ($this->newimage) {
            $imagename = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('products', $imagename);
            $product->img = $imagename;
        }
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message', 'Product has been updated successfully !');
        return redirect()->route('admin.products');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component', ['categories' => $categories])->layout('layouts.main');
    }
}
