@extends('user.layouts.layouts')

@section('content')

    <!-- ========================= SECTION MAIN ========================= -->
    <section style="background: #f4f4f4!important" class="section-main bg padding-y-sm">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row row-sm">
                        <aside class="col-md-3">
                            <h5 class="text-uppercase">My Shop</h5>
                            <ul class="menu-category">
                                <li> <a href="product-category.php">Notebook</a></li>
                                <li> <a href="#">Printer </a></li>
                                <li> <a href="#">Desktop </a></li>
                                <li> <a href="#">Toner/Cartiridge </a></li>
                                <li> <a href="#">Monitor  </a></li>
                                <li> <a href="#">Office Equipment  </a></li>
                                <li class="has-submenu"> <a href="#">More category  <i class="icon-arrow-right pull-right"></i></a>
                                    <ul class="submenu">
                                        <li> <a href="#">Tablet PC </a></li>
                                        <li> <a href="#">Smartwatch </a></li>
                                        <li> <a href="#">Scanner </a></li>
                                        <li> <a href="#">Software  </a></li>
                                        <li> <a href="#">Network  </a></li>
                                        <li> <a href="#">Audio/Video  </a></li>
                                        <li> <a href="#">Accessories  </a></li>
                                        <li> <a href="#">Gaming  </a></li>
                                    </ul>
                                </li>
                            </ul>

                        </aside> <!-- col.// -->
                        <div class="col-md-6">

                            <!-- ================= main slide ================= -->
                            <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel1_indicator" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel1_indicator" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item carousel-item-next carousel-item-left">
                                        <img class="d-block w-100" src="{{ asset('user/images/banners/slide1.jpg') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('user/images/banners/slide2.jpg') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item active carousel-item-left">
                                        <img class="d-block w-100" src="{{ asset('user/images/banners/slide3.jpg') }}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- ============== main slidesow .end // ============= -->

                        </div> <!-- col.// -->
                        <aside class="col-md-3">

                            <div id="code_card_list">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('user/images/posts/2.jpg') }}" alt="Card image cap">

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Featured Products</li>
                                        <li class="list-group-item">New Arrival</li>
                                        <li class="list-group-item">Hot Deals</li>
                                        <li class="list-group-item">Offer</li>
                                    </ul>
                                </div><!-- card.// -->
                            </div> <!-- code wrap.// -->
                        </aside>
                    </div> <!-- row.// -->
                </div> <!-- card-body .// -->
            </div> <!-- card.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->
    <section class="section-content padding-y-sm bg">


        <!-- ========================= SECTION CONTENT ========================= -->
        <section class="section-content padding-y-sm bg">
            <div class="container">
                <header class="section-heading heading-line">
                    <h4 class="title-section bg text-uppercase">New Arival</h4>
                </header>




                <div id="code_prod2">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-3">
                                <figure class="card card-product">
                                    <div class="img-wrap">
                                        <img src="{{ asset('user/images/items/4.jpg') }}">
                                        <a class="btn-overlay" href="{{ route('shop.show',$product->name) }}"><i class="fa fa-search-plus"></i> Quick view</a>
                                    </div>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">{{ $product->name }}</a>
                                        <div class="action-wrap">
                                            @include('user.partials._cart-button')
                                            <div class="price-wrap h5">
                                                <span class="price-new">${{ $product->price }}</span>
                                                {{--<del class="price-old">$1980</del>--}}
                                            </div> <!-- price-wrap.// -->
                                        </div> <!-- action-wrap -->
                                    </figcaption>
                                </figure> <!-- card // -->
                            </div> <!-- col // -->
                        @endforeach
                    </div> <!-- row.// -->
                </div>
            </div>








        </section>
        <!-- ========================= SECTION CONTENT END// ========================= -->
        <BR><BR>

        <!-- ========================= SECTION SUBSCRIBE END.//========================= -->
    </section>

@endsection