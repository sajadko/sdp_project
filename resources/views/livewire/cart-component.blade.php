<div class="card px-5 py-5">
    <div class="row">
        <div class="col-md-12 ">
            @if (Session::has('success_atc'))
                <div class="alert alert-success"><strong>Success: </strong> {{ Session::get('success_atc') }}</div>
            @endif
            @if (Session::has('success_message'))
                <div class="alert alert-success"><strong>Success: </strong> {{ Session::get('success_message') }}</div>
            @endif
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h3>Shopping Cart</h3>
                    </div>
                    <div class="col align-self-center text-right text-muted">{{ Cart::count() }} items</div>
                </div>
            </div>
            @if (Cart::count() > 0)
                @foreach (Cart::content() as $item)
                    <div class="row border-bottom">
                        <div class="row main align-items-center w-100 mb-3 mt-3">
                            <div class="col-2"><img class="img-fluid"
                                    src="{{ asset('assets/images/products') }}/{{ $item->model->img }}" width="60">
                            </div>
                            <div class="col-3">
                                <div class="row"><a
                                        href="{{ route('product.details', ['slug' => $item->model->slug]) }}"><b>{{ $item->model->name }}</b></a>
                                </div>
                            </div>
                            <div class="col-2">
                                <a href="#" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')">-</a>
                                <b>{{ $item->qty }}</b>
                                <a href="#" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">+</a>
                            </div>
                            <div class="col">{{ $item->model->reg_price }} TMN
                            </div>
                            <div class="col-2">{{ $item->subtotal }} TMN
                                <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')"><span
                                        class="close">&#10005;</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="col-md-12 border-top mt-5">
            <div>
                <h5>Summary</h5>
            </div>
            <hr>
            <div class="row">
                <div class="col">Items : {{ Cart::count() }}</div>
                <div class="col text-right">Subtotal : {{ Cart::subtotal() }} Tooman</div>
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">{{ Cart::total() }} Tooman</div>
            </div>
            <button wire:click.prevent="checkout()" class="btn">CHECKOUT</button>
        </div>
    @else
        <p align="center" class="pt-5">No items in the cart</p>
        @endif
    </div>

</div>
