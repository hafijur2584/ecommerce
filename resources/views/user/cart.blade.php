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
                                <th scope="col" class="text-right" width="200">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <figure class="media">
                                        <div class="img-wrap"><img src="{{ asset('user/images/items/1.jpg') }}" class="img-thumbnail img-sm"></div>
                                        <figcaption class="media-body">
                                            <h6 class="title text-truncate">Product name goes here </h6>
                                            <dl class="dlist-inline small">
                                                <dt>Size: </dt>
                                                <dd>XXL</dd>
                                            </dl>
                                            <dl class="dlist-inline small">
                                                <dt>Color: </dt>
                                                <dd>Orange color</dd>
                                            </dl>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">USD 145</var>
                                        <small class="text-muted">(USD5 each)</small>
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right">
                                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                    <a href="" class="btn btn-outline-danger"> × Remove</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <figure class="media">
                                        <div class="img-wrap"><img src="{{ asset('user/images/items/2.jpg') }}" class="img-thumbnail img-sm"></div>
                                        <figcaption class="media-body">
                                            <h6 class="title text-truncate">Product name goes here </h6>
                                            <dl class="dlist-inline small">
                                                <dt>Size: </dt>
                                                <dd>XXL</dd>
                                            </dl>
                                            <dl class="dlist-inline small">
                                                <dt>Color: </dt>
                                                <dd>Orange color</dd>
                                            </dl>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">USD 35</var>
                                        <small class="text-muted">(USD10 each)</small>
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right">
                                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                    <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <figure class="media">
                                        <div class="img-wrap"><img src="{{ asset('user/images/items/3.jpg') }}" class="img-thumbnail img-sm"></div>
                                        <figcaption class="media-body">
                                            <h6 class="title text-truncate">Product name goes here </h6>
                                            <dl class="dlist-inline small">
                                                <dt>Size: </dt>
                                                <dd>XXL</dd>
                                            </dl>
                                            <dl class="dlist-inline small">
                                                <dt>Color: </dt>
                                                <dd>Orange color</dd>
                                            </dl>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">USD 45</var>
                                        <small class="text-muted">(USD15 each)</small>
                                    </div> <!-- price-wrap .// -->
                                </td>
                                <td class="text-right">
                                    <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                    <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div> <!-- card.// -->

                </main> <!-- col.// -->
                <aside class="col-sm-4">

                    <div class="box">		<h4> Billing Information</h4><hr>
                        <dl class="dlist-inline">
                            <dt>Name:</dt>
                            <dd>Mamun </dd>
                        </dl>
                        <dl class="dlist-inline">
                            <dt>Billing Address:</dt>
                            <dd>Dagonbhuiyan, Feni</dd>
                        </dl>
                        <dl class="dlist-inline">
                            <dt>Mobile: </dt>
                            <dd>01777615690</dd>
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