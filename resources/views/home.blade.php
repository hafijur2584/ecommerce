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
        <div class="container">
            <div class="title-text">
                <span class="h4">FEATURED PRODUCTS</span>
                <div class="btn-group btn-group-sm float-right">
                    <button type="button" class="custom-nav-first owl-custom-prev btn btn-secondary"> < </button>
                    <button type="button" class="custom-nav-first owl-custom-next btn btn-secondary"> > </button>
                </div>

            </div>
            </header>
            <!-- ============== owl slide items 2  ============= -->
            <div class="owl-carousel owl-init slide-items" id="slide_custom_nav" data-custom-nav="custom-nav-first" data-items="5" data-margin="20" data-dots="true" data-nav="false">
                <div class="item-slide">
                    <figure class="card card-product">
                        <span class="badge-new"> NEW </span>
                        <div class="img-wrap"> <img src="{{ asset('user/images/items/1.jpg') }}"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">First item name</a></h6>
                        </figcaption>
                    </figure> <!-- card // -->
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="{{ asset('user/images/items/2.jpg') }}"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Second item name</a></h6>
                        </figcaption>
                    </figure> <!-- card // -->
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="{{ asset('user/images/items/3.jpg') }}"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Third item name</a></h6>
                        </figcaption>
                    </figure> <!-- card // -->
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="{{ asset('user/images/items/4.jpg') }}"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Good item name</a></h6>
                        </figcaption>
                    </figure> <!-- card // -->
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="{{ asset('user/images/items/5.jpg') }}"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Another item name</a></h6>
                        </figcaption>
                    </figure> <!-- card // -->
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="{{ asset('user/images/items/3.jpg') }}"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Third item name</a></h6>
                        </figcaption>
                    </figure> <!-- card // -->
                </div>
            </div>
            <!-- ============== owl slide items 2 .end // ============= -->

        </div> <!-- container .//  -->


        <!-- ========================= SECTION CONTENT ========================= -->
        <section class="section-content padding-y-sm bg">
            <div class="container">
                <header class="section-heading heading-line">
                    <h4 class="title-section bg text-uppercase">New Arival</h4>
                </header>




                <div id="code_prod2">
                    <div class="row">
                        <div class="col-md-3">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="{{ asset('user/images/items/3.jpg') }}">
                                    <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">Good item name</a>
                                    <div class="action-wrap">
                                        <a href="#" class="btn btn-warning btn-sm float-right"> <i class="fa fa-shopping-cart"></i>  Add To Cart </a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$1280</span>
                                            <del class="price-old">$1980</del>
                                        </div> <!-- price-wrap.// -->
                                    </div> <!-- action-wrap -->
                                </figcaption>
                            </figure> <!-- card // -->
                        </div> <!-- col // -->
                        <div class="col-md-3">
                            <figure class="card card-product">
                                <div class="img-wrap"> <img src="{{ asset('user/images/items/4.jpg') }}">
                                    <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">The name of product</a>
                                    <div class="action-wrap">
                                        <a href="#" class="btn btn-warning btn-sm float-right"> Add To Cart </a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </div> <!-- action-wrap -->
                                </figcaption>
                            </figure> <!-- card // -->
                        </div> <!-- col // -->
                        <div class="col-md-3">
                            <figure class="card card-product">
                                <div class="img-wrap"> <img src="{{ asset('user/images/items/5.jpg') }}">
                                    <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">Name of product</a>
                                    <div class="action-wrap">
                                        <a href="#" class="btn btn-warning btn-sm float-right"> Add To Cart </a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </div> <!-- action-wrap -->
                                </figcaption>
                            </figure> <!-- card // -->
                        </div> <!-- col // -->
                        <div class="col-md-3">
                            <figure class="card card-product">
                                <div class="img-wrap"> <img src="{{ asset('user/images/items/6.jpg') }}">
                                    <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">The name of product</a>
                                    <div class="action-wrap">
                                        <a href="#" class="btn btn-warning btn-sm float-right"> Add To Cart </a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </div> <!-- action-wrap -->
                                </figcaption>
                            </figure> <!-- card // -->
                        </div> <!-- col // -->

                        <div class="col-md-3">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="{{ asset('user/images/items/3.jpg') }}">
                                    <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">Good item name</a>
                                    <div class="action-wrap">
                                        <a href="#" class="btn btn-warning btn-sm float-right"> Add To Cart </a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$1280</span>
                                            <del class="price-old">$1980</del>
                                        </div> <!-- price-wrap.// -->
                                    </div> <!-- action-wrap -->
                                </figcaption>
                            </figure> <!-- card // -->
                        </div> <!-- col // -->
                        <div class="col-md-3">
                            <figure class="card card-product">
                                <div class="img-wrap"> <img src="{{ asset('user/images/items/4.jpg') }}">
                                    <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">The name of product</a>
                                    <div class="action-wrap">
                                        <a href="#" class="btn btn-warning btn-sm float-right"> Add To Cart </a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </div> <!-- action-wrap -->
                                </figcaption>
                            </figure> <!-- card // -->
                        </div> <!-- col // -->
                        <div class="col-md-3">
                            <figure class="card card-product">
                                <div class="img-wrap"> <img src="{{ asset('user/images/items/5.jpg') }}">
                                    <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">Name of product</a>
                                    <div class="action-wrap">
                                        <a href="#" class="btn btn-warning btn-sm float-right"> Add to Cart </a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </div> <!-- action-wrap -->
                                </figcaption>
                            </figure> <!-- card // -->
                        </div> <!-- col // -->
                        <div class="col-md-3">
                            <figure class="card card-product">
                                <div class="img-wrap"> <img src="{{ asset('user/images/items/6.jpg') }}">
                                    <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
                                </div>
                                <figcaption class="info-wrap">
                                    <a href="#" class="title">The name of product</a>
                                    <div class="action-wrap">
                                        <a href="#" class="btn btn-warning btn-sm float-right"> Add To Cart </a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </div> <!-- action-wrap -->
                                </figcaption>
                            </figure> <!-- card // -->
                        </div> <!-- col // -->
                    </div> <!-- row.// -->
                </div>
            </div>








        </section>
        <!-- ========================= SECTION CONTENT END// ========================= -->

        <!-- ========================= SECTION CONTENT ========================= -->
        <section class="section-content padding-y-sm bg">
            <div class="container">

                <header class="section-heading heading-line">
                    <h4 class="title-section bg">WE SERVED THIS BRANDS</h4>
                </header>

                <div class="card">
                    <div class="row">





                        <div class="col-md-12">
                            <ul class="row no-gutters border-cols">
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>

                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                                <li class="col-6 col-md-2">
                                    <a href="#" class="itembox">
                                        <div style="text-align: center;
    border-top: 1px solid #eeee!important;" class="card-body">
                                            <img class="img-sm" src="{{ asset('user/images/logos/logo1.png') }}">
                                            <p class="word-limit">Microsoft </p>

                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->

                </div> <!-- card.// -->

            </div> <!-- container .//  -->
        </section>
        <!-- ========================= SECTION ITEMS ========================= -->
        <section class="section-request bg padding-y-sm">
            <div class="container">




                <div class="row">
                    <aside class="col-md-4">
                        <header class="section-heading heading-line">
                            <h4 class="title-section bg text-uppercase">Hot Deals</h4>
                        </header>

                        <div id="code_itemside_img2">
                            <div class="box items-bAdd To Carted-wrap">
                                <figure class="itemside">
                                    <div class="aside"><img src="{{ asset('user/images/items/4.jpg') }}" class="img-sm"></div>
                                    <figcaption class="text-wrap align-self-center">
                                        <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                        <div class="price-wrap">
                                            <span class="price-new">$1280</span>
                                            <del class="price-old text-muted">$1980</del>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure>
                                <figure class="itemside">
                                    <div class="aside"><img src="{{ asset('user/images/items/5.jpg') }}" class="img-sm"></div>
                                    <figcaption class="text-wrap align-self-center">
                                        <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                        <div class="price-wrap">
                                            <span class="price-new">$1280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure>
                                <figure class="itemside">
                                    <div class="aside"><img src="{{ asset('user/images/items/6.jpg') }}" class="img-sm"></div>
                                    <figcaption class="text-wrap align-self-center">
                                        <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                        <div class="price-wrap">
                                            <span class="price-new">$1280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> 	 <hr><a href="#" class="btn btn-warning"> More Hot Deals</a>
                            </div> <!-- box.// -->

                        </div> <!-- code-wrap.// -->
                    </aside> <!-- col.// -->


                    <aside class="col-md-4">
                        <header class="section-heading heading-line">
                            <h4 class="title-section bg text-uppercase">Offer</h4>
                        </header>

                        <div id="code_itemside_img2">
                            <div class="box items-bAdd To Carted-wrap">
                                <figure class="itemside">
                                    <div class="aside"><img src="{{ asset('user/images/items/4.jpg') }}" class="img-sm"></div>
                                    <figcaption class="text-wrap align-self-center">
                                        <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                        <div class="price-wrap">
                                            <span class="price-new">$1280</span>
                                            <del class="price-old text-muted">$1980</del>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure>
                                <figure class="itemside">
                                    <div class="aside"><img src="{{ asset('user/images/items/5.jpg') }}" class="img-sm"></div>
                                    <figcaption class="text-wrap align-self-center">
                                        <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                        <div class="price-wrap">
                                            <span class="price-new">$1280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure>
                                <figure class="itemside">
                                    <div class="aside"><img src="{{ asset('user/images/items/6.jpg') }}" class="img-sm"></div>
                                    <figcaption class="text-wrap align-self-center">
                                        <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                        <div class="price-wrap">
                                            <span class="price-new">$1280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> <hr><a href="#" class="btn btn-warning"> More Offer</a>
                            </div> <!-- box.// -->

                        </div> <!-- code-wrap.// -->
                    </aside> <!-- col.// -->

                    <aside class="col-md-4">
                        <header class="section-heading heading-line">
                            <h4 class="title-section bg text-uppercase">Top Sale</h4>
                        </header>

                        <div id="code_itemside_img2">
                            <div class="box items-bAdd To Carted-wrap">
                                <figure class="itemside">
                                    <div class="aside"><img src="{{ asset('user/images/items/4.jpg') }}" class="img-sm"></div>
                                    <figcaption class="text-wrap align-self-center">
                                        <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                        <div class="price-wrap">
                                            <span class="price-new">$1280</span>
                                            <del class="price-old text-muted">$1980</del>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure>
                                <figure class="itemside">
                                    <div class="aside"><img src="{{ asset('user/images/items/5.jpg') }}" class="img-sm"></div>
                                    <figcaption class="text-wrap align-self-center">
                                        <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                        <div class="price-wrap">
                                            <span class="price-new">$1280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure>
                                <figure class="itemside">
                                    <div class="aside"><img src="{{ asset('user/images/items/6.jpg') }}" class="img-sm"></div>
                                    <figcaption class="text-wrap align-self-center">
                                        <h6 class="title"><a href="#">Some name of item goes here nice</a></h6>
                                        <div class="price-wrap">
                                            <span class="price-new">$1280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure>  <hr><a href="#" class="btn btn-warning"> More Top Sales Product</a>
                            </div> <!-- box.// -->

                        </div> <!-- code-wrap.// -->
                    </aside> <!-- col.// -->


                </div> <!-- row.// -->


            </div><!-- container // -->
        </section>
        <BR><BR>

        <!-- ========================= SECTION SUBSCRIBE END.//========================= -->

@endsection