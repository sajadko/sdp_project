<div class="row">
    <div class="col">
        <h3>Categories: </h3>
        <div class="d-flex flex-row bd-highlight mb-3">
            @foreach ($categories as $cat)
                <a href="{{ route('product.category', ['category_slug' => $cat->slug]) }}">
                    <div class="pr-3 py-3 category_item_hm font-weight-bold text-secondary text-capitalize">
                        {{ $cat->name }}</div>
                </a>
            @endforeach
        </div>
    </div>
</div>
