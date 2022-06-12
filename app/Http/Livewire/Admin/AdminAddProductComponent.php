<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
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

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name'         => 'required',
            'slug'         => 'required|unique:products',
            'short_desc'   => 'required',
            'desc'         => 'required',
            'reg_price'    => 'required|numeric',
            'sale_price'   => 'numeric|nullable',
            'sku'          => 'required',
            'stock_status' => 'required',
            'quantity'     => 'required|numeric',
            'file'         => 'required|mimes:jpeg,png,jpg',
            'category_id'  => 'required',
        ]);
    }

    public function addProduct()
    {
        $this->validate([
            'name'         => 'required',
            'slug'         => 'required|unique:products',
            'short_desc'   => 'required',
            'desc'         => 'required',
            'reg_price'    => 'required|numeric',
            'sale_price'   => 'numeric|nullable',
            'sku'          => 'required',
            'stock_status' => 'required',
            'quantity'     => 'required|numeric',
            'file'         => 'required|mimes:jpeg,png,jpg',
            'category_id'  => 'required',
        ]);
        $product = new Product();
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
        $imagename = Carbon::now()->timestamp . '.' . $this->file->extension();
        $this->file->storeAs('products', $imagename);
        $product->img = $imagename;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message', 'Product has been created successfully !');
        return redirect()->route('admin.products');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component', ['categories' => $categories])->layout('layouts.main');
    }
}
