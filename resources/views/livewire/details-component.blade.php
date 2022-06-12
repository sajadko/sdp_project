<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image"
                                    src="{{ asset('assets/images/products') }}/{{ $product->img }}" width="300" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="mt-4 mb-3">
                                <h5 class="text-uppercase">{{ $product->name }}</h5>
                            </div>
                            <p class="about">{{ $product->short_desc }}</p>
                            <div class="price d-flex flex-row align-items-center">
                                <span class="reg_price">{{ $product->reg_price }} Tooman</span>
                                @if ($product->sale_price)
                                    <span class="sale_price">{{ $product->sale_price }}</span>
                                @endif
                            </div>
                            <div class="cart mt-4 align-items-center">
                                <a class="btn btn-success text-white text-uppercase mr-2 px-4"
                                    wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}',{{ $product->reg_price }})">Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="row">
                    <div class="col py-5 px-5">
                        <h3>Description:</h3>
                        <div>
                            {{ $product->desc }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
