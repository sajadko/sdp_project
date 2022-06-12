<div>
    @include('livewire.admin.links')
    <h1>Admin - Orders</h1>
    <div>
        {{-- <a href="{{ route('admin.products.add') }}" class="btn btn-success mb-5 mt-3">Add Product</a> --}}
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Total</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Zipcode</th>
                    <th scope="col">Status</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td scope="row">{{ $order->total }}</td>
                        <td scope="row">{{ $order->first_name }}</td>
                        <td scope="row">{{ $order->last_name }}</td>
                        <td scope="row">{{ $order->mobile }}</td>
                        <td scope="row">{{ $order->email }}</td>
                        <td scope="row">{{ $order->zipcode }}</td>
                        <td scope="row">{{ $order->status }}</td>
                        <td scope="row">{{ $order->created_at }}</td>

                        <td>
                            <a href="{{ route('admin.orders.details', ['order_id' => $order->id]) }}"
                                class="btn btn-primary">View</a>
                            {{-- <a href="#" onclick="confirm('Are you sure ?') || event.stopImmediatePropagation()"
                                wire:click.prevent="deleteProduct({{ $product->id }})"
                                class="btn btn-danger">Delete</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $orders->links('pagination::bootstrap-4') !!}
    </div>
</div>
