
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>E-commerce | Login </title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/images/favicon.ico') }}">

    <!-- jQuery -->
    <script src="{{ asset('user/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset('user/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('user/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="{{ asset('user/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{ asset('user/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
    <script src="{{ asset('user/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- custom style -->
    <link href="{{ asset('user/css/ui.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)"/>

    <!-- custom javascript -->
    <script src="{{ asset('user/js/script.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function () {
            // jQuery code

        });
        // jquery end
    </script>

</head>
<body>
<header class="section-header">


</header> <!-- section-header.// -->


<!-- ========================= SECTION CONTENT ========================= -->

<section class="section-content bg padding-y-sm">
    <div class="container">
        <nav class="mb-">

        </nav>
        <div class="row">
            <div class="col-xl-12 col-md-9 col-sm-12">
                <div class="row">

                    <aside class="col-sm-3">

                    </aside>

                    <!-- PRODUCT DETAIL -->
                    <aside class="col-sm-6">

                        <div id="code_register_1">
                            <div class="card">
                                <header class="card-header">
                                    <a href="/" class="float-right btn btn-outline-primary mt-1">Home </a>
                                    <h4 class="card-title mt-2">Sign In</h4>
                                </header>
                                <article class="card-body">
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input id="email" name="email" value="{{ old('email') }}" type="email" class="form-control">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" id="password" >
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div> <!-- form-group end.// -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block"> Login</button>
                                        </div> <!-- form-group// -->
                                        <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you
                                            accept our <br> Terms of use and Privacy Policy.
                                        </small>
                                    </form>
                                </article>
                            </div> <!-- card.// -->

                        </div> <!-- code-wrap.// -->
                    </aside>
                    <!-- card.// -->

                    <!-- PRODUCT DETAIL .// -->

                </div>
                <!-- col // -->


            </div>
            <!-- row.// -->

        </div>
    </div>
        <!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->
</body>
