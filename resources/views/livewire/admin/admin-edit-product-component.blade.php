<div>
    @include('livewire.admin.links')
    <h1>Edit Product</h1>
    <div>
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif
        <form class="mt-5" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Product Name"
                        wire:model="name" wire:keyup="generateSlug">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputSlug" class="col-sm-2 col-form-label">Product Slug</label>
                <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" id="inputSlug" placeholder="Product Slug"
                        wire:model="slug">
                    @error('slug')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputShortDesc" class="col-sm-2 col-form-label">Short Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="short_desc" class="form-control" id="inputShortDesc" placeholder="Short Description"
                        wire:model="short_desc"></textarea>
                    @error('short_desc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputShortDesc" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="desc" class="form-control" id="inputShortDesc" placeholder="Description"
                        wire:model="desc"></textarea>
                    @error('desc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="inputRegularPrice" class="col-sm-2 col-form-label">Regular Price</label>
                <div class="col-sm-10">
                    <input type="number" name="reg_price" class="form-control" id="inputRegularPrice"
                        placeholder="Regular Price" wire:model="reg_price">
                    @error('reg_price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="inputSalePrice" class="col-sm-2 col-form-label">Sale Price</label>
                <div class="col-sm-10">
                    <input type="number" name="sale_price" class="form-control" id="inputSalePrice"
                        placeholder="Sale Price" wire:model="sale_price">
                    @error('sale_price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="inputSlug" class="col-sm-2 col-form-label">SKU</label>
                <div class="col-sm-10">
                    <input type="text" name="sku" class="form-control" id="inputSKU" placeholder="SKU"
                        wire:model="sku">
                    @error('sku')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="inputSlug" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <select name="stock_status" class="form-control" wire:model="stock_status">
                        <option value="instock">In Stock</option>
                        <option value="outofstock">Out Of Stock</option>
                    </select>
                    @error('stock_status')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="inputSlug" class="col-sm-2 col-form-label">Featured</label>
                <div class="col-sm-10">
                    <select name="featured" class="form-control" wire:model="featured">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>

                </div>
            </div>


            <div class="form-group row">
                <label for="inputQuantity" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                    <input type="number" name="quantity" class="form-control" id="inputQuantity"
                        placeholder="Quantity" wire:model="quantity">
                    @error('quantity')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="inputImage" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" wire:model="newimage">
                    @if ($newimage)
                        <img src="{{ $newimage->temporaryUrl() }}" width="80" />
                    @else
                        <img src="{{ asset('assets/images/products') }}/{{ $file }}"
                            alt="{{ $name }}" width="80" />
                    @endif
                    @error('newimage')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="inputSlug" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="category_id" class="form-control" wire:model="category_id">
                        <option value="">Select Category</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <button type="submit" class="btn btn-primary mt-3">Edit</button>
        </form>
    </div>
</div>
