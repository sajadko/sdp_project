<div class="row">
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order Items</h4>
                @foreach ($order->orderItems as $item)
                    <div class="row border-bottom">
                        <div class="row main align-items-center w-100 mb-3 mt-3 px-3">
                            <div class="col-2"><img class="img-fluid"
                                    src="{{ asset('assets/images/products') }}/{{ $item->product->img }}"
                                    width="60">
                            </div>
                            <div class="col-3">
                                <div class="row"><a
                                        href="{{ route('product.details', ['slug' => $item->product->slug]) }}"><b>{{ $item->product->name }}</b></a>
                                </div>
                            </div>
                            <div class="col-2"><b>{{ $item->quantity }}</b></div>
                            <div class="col">{{ $item->price }} TMN</div>
                            <div class="col-2">{{ $item->price * $item->quantity }} TMN</div>
                        </div>
                    </div>
                @endforeach

                <h4 class="mt-5">Summary</h4>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">{{ $order->total }} Tooman</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Billing Details</h4>
                <div class="row">
                    <div class="col"><b>First Name</b></div>
                    <div class="col">{{ $order->first_name }}</div>
                    <div class="col"><b>Lasr Name</b></div>
                    <div class="col">{{ $order->last_name }}</div>
                    <div class="w-100"></div>
                    <div class="col"><b>Phone</b></div>
                    <div class="col">{{ $order->mobile }}</div>
                    <div class="col"><b>Email</b></div>
                    <div class="col">{{ $order->email }}</div>
                    <div class="w-100"></div>
                    <div class="col"><b>Line 1</b></div>
                    <div class="col">{{ $order->line1 }}</div>
                    <div class="col"><b>Line 2</b></div>
                    <div class="col">{{ $order->line2 }}</div>
                    <div class="w-100"></div>
                    <div class="col"><b>Country</b></div>
                    <div class="col">{{ $order->country }}</div>
                    <div class="col"><b>Province</b></div>
                    <div class="col">{{ $order->province }}</div>
                    <div class="w-100"></div>
                    <div class="col"><b>City</b></div>
                    <div class="col">{{ $order->city }}</div>
                    <div class="col"><b>Zip Code</b></div>
                    <div class="col">{{ $order->zipcode }}</div>
                    <div class="w-100"></div>

                </div>
            </div>
        </div>
    </div>
    @if ($order->is_shipping_different)
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Shipping Details</h4>
                    <div class="row">
                        <div class="col"><b>First Name</b></div>
                        <div class="col">{{ $order->shipping->first_name }}</div>
                        <div class="col"><b>Lasr Name</b></div>
                        <div class="col">{{ $order->shipping->last_name }}</div>
                        <div class="w-100"></div>
                        <div class="col"><b>Phone</b></div>
                        <div class="col">{{ $order->shipping->mobile }}</div>
                        <div class="col"><b>Email</b></div>
                        <div class="col">{{ $order->shipping->email }}</div>
                        <div class="w-100"></div>
                        <div class="col"><b>Line 1</b></div>
                        <div class="col">{{ $order->shipping->line1 }}</div>
                        <div class="col"><b>Line 2</b></div>
                        <div class="col">{{ $order->shipping->line2 }}</div>
                        <div class="w-100"></div>
                        <div class="col"><b>Country</b></div>
                        <div class="col">{{ $order->shipping->country }}</div>
                        <div class="col"><b>Province</b></div>
                        <div class="col">{{ $order->shipping->province }}</div>
                        <div class="w-100"></div>
                        <div class="col"><b>City</b></div>
                        <div class="col">{{ $order->shipping->city }}</div>
                        <div class="col"><b>Zip Code</b></div>
                        <div class="col">{{ $order->shipping->zipcode }}</div>
                        <div class="w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="col-md-12 mb-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaction Details</h4>
                <div class="row">
                    <div class="col"><b>Status</b></div>
                    <div class="col">{{ $order->transaction->status }}</div>
                    <div class="col"><b>Transaction Date</b></div>
                    <div class="col">{{ $order->transaction->created_at }}</div>
                    <div class="w-100"></div>
                </div>
            </div>
        </div>
    </div>
</div>
