<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    @livewireScripts
    <title>SDP Project | IAUCTB</title>
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a href="/" class="my-0 mr-md-auto">
            <h5 class="font-weight-normal">Software Design Principles</h5>
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="{{ route('product.search') }}">
            <input type="search" name="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/shop">Shop</a>
            <a class="p-2 text-dark" href="/cart">Cart</a>
            <a class="p-2 text-dark" href="/checkout">Checkout</a>
        </nav>
        @if (Route::has('login'))
            @auth
                @if (Auth::user()->user_type === 'admin')
                    <a class="btn btn-primary mr-2" href="{{ route('admin.dashboard') }}">Admin:
                        {{ Auth::user()->name }}</a>
                @else
                    <a class="btn btn-primary mr-2" href="{{ route('user.dashboard') }}">Customer:
                        {{ Auth::user()->name }}</a>
                @endif
            @else
                <a class="btn btn-primary mr-2" href="{{ route('login') }}">Login</a>
                <a class="btn btn-outline-primary" href="{{ route('register') }}">Register</a>
            @endif
            @endif

        </div>
