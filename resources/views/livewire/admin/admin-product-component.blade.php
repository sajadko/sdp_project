<div>
    @include('livewire.admin.links')
    <h1>Admin - Products</h1>
    <div>
        <a href="{{ route('admin.products.add') }}" class="btn btn-success mb-5 mt-3">Add Product</a>
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td><img src="{{ asset('assets/images/products') }}/{{ $product->img }}"
                                alt="{{ $product->name }}" width="50" height="50"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->stock_status }}</td>
                        <td>{{ $product->reg_price }} Tooman</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.products.edit', ['product_slug' => $product->slug]) }}"
                                class="btn btn-primary">Edit</a>
                            <a href="#" onclick="confirm('Are you sure ?') || event.stopImmediatePropagation()"
                                wire:click.prevent="deleteProduct({{ $product->id }})"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $products->links('pagination::bootstrap-4') !!}
    </div>
</div>
