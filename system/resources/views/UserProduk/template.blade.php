@php

function checkRouteActive($route){
if(Route::current()->uri == $route) return 'active-leni';
}
@endphp


<!DOCTYPE html>
<html>

<head>
    <title>LENSTORE</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap dan fontawesome -->
    <link href="{{url('public')}}/uas-atw/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('public')}}/uas-atw/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" media="all" />

    <!-- //for-mobile-apps -->
    <link href="{{url('public')}}/uas-atw/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="{{url('public')}}/uas-atw/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


    <!-- //pignose css -->
    <link href="{{url('public')}}/uas-atw/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="{{url('public')}}/uas-atw/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="{{url('public')}}/uas-atw/js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{url('public')}}/uas-atw/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <script src="{{url('public')}}/uas-atw/js/jquery.easing.min.js"></script>
</head>
<style>
    .active-leni {
        border-bottom: 5px solid orangered;
        height: 70px;
    }

    .nav-item :hover {
        border-bottom: 5px solid orangered;
        height: 70px;
    }
</style>

<body>
    <!-- header -->
    <div class="header">

    </div>
    <!-- //header -->
    <!-- header-bot -->
    <div class="header-bot text-center">
        <h3> SELAMAT DATANG <strong class="text-uppercase"> @if(Auth::check())
                {{request()->user()->nama}}
                @elseif(Auth::guard('pembeli')->check())
                {{Auth::guard('pembeli')->user()->nama}}
                @elseif(Auth::guard('penjual')->check())
                {{Auth::guard('penjual')->user()->nama}}
                @elseif(Auth::guard('user')->check())
                {{Auth::guard('user')->user()->nama}}
                @else
                silahkan login
                @endif</strong> PELANGGAN SETIA <strong>LENSTORE</strong> </h3>
    </div>
    <!-- //header-bot -->
    <!-- banner -->
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{checkRouteActive('/')}}" aria-current="page" href="{{url('/')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{checkRouteActive('userproduk')}}" href="{{url('userproduk')}}">PRODUK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{checkRouteActive('keranjang')}}" href="{{url('keranjang')}}"> <i class="fas fa-shopping-bag mr-2"></i>KERANJANG</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-right mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link {{checkRouteActive('logout')}}" href="{{url('logout')}}"> <i class="fas fa-sign-out-alt"></i> LOGOUT</a>
                        </li>



                    </ul>
                </div>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>


    @yield('content')

    <!-- footer -->
    <div class="footer">
        <div class="container">

            <div class="clearfix"></div>
            <p class="copy-right">Build With <strong style="color:red">LOVE</strong> by <strong>Leni Suryani</strong> </p>
        </div>
    </div>
    <!-- //footer -->
    @stack('script')
</body>

</html>