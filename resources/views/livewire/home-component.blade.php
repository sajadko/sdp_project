<div>
    @include('layouts.categories')
</div>

<div>
    <h3>Latest Products</h3>
    <div class="row row-cols-3 row-cols-md-3 g-4">
        @php
            $i = 1;
        @endphp
        @foreach ($products as $product)
            <div class="col-md-3 mb-5 mt-5">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/products') }}/{{ $product->img }}" class="card-img-top"
                        alt="{{ $product->name }}">
                    <div class="card-body">
                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                            <h5 class="card-title">{{ $product->name }}</h5>
                        </a>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex">
                            <div class="card_price_box">
                                <div class="card_price">{{ $product->reg_price }} Tooman</div>
                                @if ($product->sale_price)
                                    <div class="card_sale_price">{{ $product->sale_price }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($i === 4 || $i === 8)
                <div class="w-100"></div>
            @endif
            @php
                $i++;
            @endphp
        @endforeach
    </div>
</div>
