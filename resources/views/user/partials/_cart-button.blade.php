<form action="{{ route('cart.store') }}" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">

    <button type="submit" class="btn btn-warning btn-sm float-right"><i class="fa fa-shopping-cart"></i>  Add To Cart</button>
</form>