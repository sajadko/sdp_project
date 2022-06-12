<div>
    @include('livewire.user.links')
    <h1>User - Orders</h1>
    <div>
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
        @endif
        @if (count($orders) > 0)
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
                                <a href="{{ route('user.orders.details', ['order_id' => $order->id]) }}"
                                    class="btn btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @else
            <p align="center">No orders</p>
        @endif
        {!! $orders->links('pagination::bootstrap-4') !!}
    </div>
</div>
