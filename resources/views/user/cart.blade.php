@extends('user.layouts.layouts')

@section('content')
    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-content bg padding-y-sm">
        <div class="container">
            <nav class="mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Category name</a></li>
                    <li class="breadcrumb-item"><a href="#">Sub category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Items</li>
                </ol>
            </nav>
            <div class="row">
                <main class="col-sm-8">

                    <div class="card">
                        <table class="table table-hover shopping-cart-wrap">
                            <thead class="text-muted">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" width="120">Total</th>
                                <th scope="col" class="text-right" width="200">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(App\Model\Cart::totalCarts() as $cart)
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="{{ asset('user/images/items/1.jpg') }}" class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">{{ $cart->product->name }}</h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Model: </dt>
                                                    <dd>{{ $cart->product->model }}</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>{{ $cart->product->color }}</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <form class="" action="">
                                            <input class="form-control" type="number" value="{{ $cart->product_quantity }}">
                                        </form>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">USD {{ $cart->product->price }}</var>
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">USD {{ $cart->product->price * $cart->product_quantity }}</var>
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                        <a href="" class="btn btn-outline-danger"> × Remove</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div> <!-- card.// -->

                </main> <!-- col.// -->
                <aside class="col-sm-4">

                    <div class="box">		<h4> Billing Information</h4><hr>
                        <dl class="dlist-inline">
                            <dt>Name:</dt>
                            <dd>Hafijur Rahman </dd>
                        </dl>
                        <dl class="dlist-inline">
                            <dt>Billing Address:</dt>
                            <dd>Ashulia, Savar</dd>
                        </dl>
                        <dl class="dlist-inline">
                            <dt>Mobile: </dt>
                            <dd>01875033293</dd>
                        </dl>

                    </div>
                    <br>
                    <div class="alert alert-warning">
                        <dl class="dlist-align">
                            <dt>Total price: </dt>
                            <dd class="text-right">BDT 568</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Shipping:</dt>
                            <dd class="text-right">BDT 50</dd>
                        </dl>
                        <dl class="dlist-align h4">
                            <dt>Total:</dt>
                            <dd class="text-right"><strong>USD 1,650</strong></dd>
                        </dl>

                    </div>
                    <div class="alert alert-info">
                        <select class="form-control">
                            <option>Payment Methood</option>
                            <option>Cash On Delivery</option>
                            <option>Bkash</option>
                            <option>Roket</option>
                        </select>
                        <br>

                        <input type="text" class="form-control" placeholder="Transaction No.">

                    </div>

                    <center>

                        <a href="" class="btn btn-success btn-block btn-lg"> Place your order</a>
                    </center>
                </aside> <!-- col.// -->
            </div>

        </div> <!-- container .//  --><br><br>
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->



@endsection