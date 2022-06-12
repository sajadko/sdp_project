<div>
    @include('livewire.admin.links')
    <h1>Admin Dashboard</h1>
    <div class="px-3">
        <div class="row mb-4 mt-4">
            <h3 class="mb-4">Latest Orders</h3>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Orders Count</h4>
                        <p class="h4 mt-3">{{ $totalorders }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Today Orders Count</h4>
                        <p class="h4 mt-3">{{ $todayorders }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Earn</h4>
                        <p class="h4 mt-3">{{ $totalearn }} Tooman</p>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div>
</div>
