    <div class="container">
        <h1 class="mt-5">Shop</h1>
        <div class="row row-cols-3 row-cols-md-3 g-4">
            @php
                $i = 1;
            @endphp
            @foreach ($products as $product)
                <div class="col-4 mb-5 mt-5">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products') }}/{{ $product->img }}" class="card-img-top"
                            alt="{{ $product->name }}">
                        <div class="card-body">
                            <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                <h5 class="card-title">{{ $product->name }}</h5>
                            </a>
                            <p class="card-text">{{ $product->short_desc }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <div class="card_price_box">
                                    <div class="card_price">{{ $product->reg_price }} Tooman</div>
                                    @if ($product->sale_price)
                                        <div class="card_sale_price">{{ $product->sale_price }}</div>
                                    @endif
                                </div>
                                <div class="card_atc_box">
                                    <div>
                                        <a class="btn btn-primary text-white"
                                            wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->reg_price }})">Add
                                            To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($i === 3 || $i === 6)
                    <div class="w-100"></div>
                @endif
                @php
                    $i++;
                @endphp
            @endforeach
        </div>

        {!! $products->links('pagination::bootstrap-4') !!}



    </div>
