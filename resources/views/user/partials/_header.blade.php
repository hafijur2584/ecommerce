
<header class="section-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/"><img class="logo" src="{{ asset('user/images/logos/logo122.png') }}" alt="e-commerce html" title="e-commerce">   </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTop">
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.php" class="nav-link" > <i class="fa fa-home"></i>  </a></li>
                    <li class="nav-item"><a href="page.php" class="nav-link" > Terms and policy </a></li>
                    <li class="nav-item"><a href="page.php" class="nav-link" > Money refund  </a></li>
                    <li class="nav-item"><a href="page.php" class="nav-link" > Payment  </a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link" > Contact  </a></li>
                </ul> <!-- navbar-nav.// -->
            </div> <!-- collapse.// -->
        </div>
    </nav>

    <section class="header-main shadow-sm">
        <div class="container">
            <div class="row-sm align-items-center">
                <div class="col-lg-4-24 col-sm-3">
                    <div class="category-wrap dropdown py-1">
                        <button type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-bars"></i> Categories</button>
                        <div class="dropdown-menu">

                            <a class="dropdown-item"  href="product-category.php">Notebook</a>
                            <a class="dropdown-item" href="#">Printer </a>
                            <a class="dropdown-item" href="#">Desktop </a>
                            <a class="dropdown-item" href="#">Toner/Cartiridge </a>
                            <a class="dropdown-item" href="#">Monitor  </a>
                            <a class="dropdown-item" href="#">Office Equipment  </a>
                            <a class="dropdown-item" href="#">Tablet PC </a>
                            <a class="dropdown-item" href="#">Smartwatch </a>
                            <a class="dropdown-item" href="#">Scanner </a>
                            <a class="dropdown-item" href="#">Software  </a>
                            <a class="dropdown-item" href="#">Network  </a>
                            <a class="dropdown-item" href="#">Audio/Video  </a>
                            <a class="dropdown-item" href="#">Accessories  </a>
                            <a class="dropdown-item" href="#">Gaming  </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-11-24 col-sm-8">
                    <form action="#" class="py-1">
                        <div class="input-group w-100">
                            <select class="custom-select"  name="category_name">
                                <option value="">All type</option>
                                <option value="">Special</option>
                                <option value="">Only best</option>
                                <option value="">Latest</option>
                            </select>
                            <input type="text" class="form-control" style="width:50%;" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="submit">
                                    <i class="fa fa-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-9-24 col-sm-12">
                    <div class="widgets-wrap float-right row no-gutters py-1">
                        <div class="col-auto">
                            <div class="widget-header dropdown">
                                <a href="#" data-toggle="dropdown" data-offset="20,10">
                                    <div class="icontext">
                                        <div class="icon-wrap"><i class="text-warning icon-sm fa fa-user"></i></div>
                                        <div class="text-wrap text-dark">
                                            Sign in <br>
                                            My account <i class="fa fa-caret-down"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <form class="px-4 py-3">
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" placeholder="email@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="sign-up.php">Have account? Sign up</a>
                                    <a class="dropdown-item" href="#">Forgot password?</a>
                                </div> <!--  dropdown-menu .// -->
                            </div>  <!-- widget-header .// -->
                        </div> <!-- col.// -->
                        <div class="col-auto">
                            <a href="/cart" class="widget-header">
                                <div class="icontext">
                                    <div class="icon-wrap"><i class="text-warning icon-sm fa fa-shopping-cart"></i></div>
                                    <div class="text-wrap text-dark">
                                        Products Cart<br> {{ App\Model\Cart::totalItem() }}
                                    </div>
                                </div>
                            </a>
                        </div> <!-- col.// -->
                        <div class="col-auto">
                            <a href="#" class="widget-header">
                                <div class="icontext">
                                    <div class="icon-wrap"><i class="text-warning icon-sm  fa fa-heart"></i></div>
                                    <div class="text-wrap text-dark">
                                        <span class="small round badge badge-secondary">0</span>
                                        <div>Favorites</div>
                                    </div>
                                </div>
                            </a>
                        </div> <!-- col.// -->
                    </div> <!-- widgets-wrap.// row.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->

<!-- header end -->
