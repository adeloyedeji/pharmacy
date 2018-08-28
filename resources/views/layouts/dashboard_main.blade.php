<!doctype html>
<html class="no-js" lang="">

<head>
    <!-- Basic page needs
    ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')| Dollar Pharmacy</title>
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
     <link rel="shortcut icon" type="image/png" href="assets/img/favicon-32x32.png">
    <!--All Fonts  Here -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,400,700,300' rel='stylesheet' type='text/css'>

    <!-- ALL CSS FILES HERE -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{URL::to('assets/css/font-awesome.min.css')}}">
    <!-- fancybox CSS -->
    <link rel="stylesheet" href="{{URL::to('assets/css/fancybox/jquery.fancybox.css')}}">
    <!--bxslider CSS -->
    <link rel="stylesheet" href="{{URL::to('assets/css/jquery.bxslider.min.css')}}">
    <!-- owl.carousel CSS-->
    <link rel="stylesheet" href="{{URL::to('assets/css/owl.carousel.css')}}">
    <!-- owl.carousel transitions CSS-->
    <link rel="stylesheet" href="{{URL::to('assets/css/owl.transitions.css')}}">
    <!-- simplelens CSS-->
    <link rel="stylesheet" href="{{URL::to('assets/css/jquery.simplelens.css')}}">
    <!-- owl.theme CSS-->
    <link rel="stylesheet" href="{{URL::to('assets/css/owl.theme.css')}}">
    <!-- rs-plugin CSS -->
    <!-- slider revolution css settings -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/lib/rs-plugin/css/settings.css')}}" media="screen" />
    <!-- jquery-ui-->
    <link rel="stylesheet" href="{{URL::to('assets/css/jquery-ui.css')}}">
    <!-- css for mobile menu-->
    <link rel="stylesheet" href="{{URL::to('assets/css/mobile_menu.min.css')}}">
    <!-- normalize CSS -->
    <link rel="stylesheet" href="{{URL::to('assets/css/normalize.css')}}">
    <!-- main CSS -->
    <link rel="stylesheet" href="{{URL::to('assets/css/main.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{URL::to('assets/style.css')}}">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{URL::to('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"'>


    <!--  Material Dashboard CSS    -->
    <link href="{{URL::to('assets/profile/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{URL::to('assets/profile/css/demo.css" rel="stylesheet')}}" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="{{URL::to('css/noty.css')}}" rel="stylesheet">

    <!-- modernizr js -->
    <script src="{{URL::to('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body class="home-2 h-17">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


@include('partials._header')


<!-- main menu area start -->
@include('partials._menu')
<!-- main menu area end -->

<!-- mobile-menu-area start -->
@include('partials._mobile_menu')
<!-- mobile-menu-area end -->


<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{URL::to('assets/profile/img/sidebar-1.jpg')}}">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="logo">
            <a href="#" class="simple-text">
                Dashboard
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{route('dashboard')}}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ Request::is('dashboard/profile') ? 'active' : '' }}">
                    <a href="{{route('profile')}}">
                        <i class="material-icons">person</i>
                        <p>My Profile</p>
                    </a>
                </li>
                <li class="{{ Request::is('dashboard/wallet') ? 'active' : '' }}">
                    <a href="{{route('dashboard.wallet')}}">
                        <i class="material-icons">account_balance_wallet</i>
                        <p>My Wallet</p>
                    </a>
                </li>
                <li class="{{ Request::is('dashboard/orders') || Request::is('dashboard/order-details*') ? 'active' : '' }}">
                    <a href="/dashboard/orders">
                        <i class="material-icons">shopping_basket</i>
                        <p>My Orders</p>
                    </a>
                </li>
                <li class="{{ Request::is('dashboard/prescription') ? 'active' : '' }}">
                    <a href="{{route('prescription.index')}}">
                        <i class="material-icons">local_pharmacy</i>
                        <p>My Prescriptions</p>
                    </a>
                </li>
                <li class="{{ Request::is('dashboard/profile') ? 'active' : '' }}">
                    <a href="{{route('profile')}}">
                        <i class="material-icons">settings</i>
                        <p>Account Settings</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">lock</i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Welcome {{Auth::user()->name}}! </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>

                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group  is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</div>






<!-- footer area start -->
@include('partials._footer')
<!-- footer area end -->




<!-- ALL JS FILES HERE -->
<!-- jquery js -->
<script src="{{URL::to('assets/js/vendor/jquery-1.11.3.min.js')}}"></script>
<!-- price_slider js -->
<script src="{{URL::to('assets/js/price_slider.js')}}"></script>
<!-- bootstrap js -->
<script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
<!-- owl.carousel.min js -->
<script src="{{URL::to('assets/js/owl.carousel.min.js')}}"></script>
<!-- slicknav js -->
<script src="{{URL::to('assets/js/jquery.mobilemenu.js')}}"></script>
<!-- jquery.scrollUp js -->
<script src="{{URL::to('assets/js/jquery.scrollUp.min.js')}}"></script>
<!-- jquerye levatezoom js -->
<script src="{{URL::to('assets/js/jquery.elevatezoom.js')}}"></script>




{{--Profile Javascript--}}

<script src="{{URL::to('assets/profile/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{URL::to('assets/profile/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{URL::to('assets/profile/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{URL::to('assets/profile/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{URL::to('assets/profile/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{URL::to('assets/profile/js/material-dashboard.js?v=1.2.0')}}"></script>
{{--<!-- Material Dashboard DEMO methods, don't include it in your project! -->--}}
{{--<script src="{{URL::to('assets/profile/js/demo.js')}}"></script>--}}
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="{{URL::to('js/noty.js')}}" type="text/javascript"></script>


<script>


        type = ['', 'info', 'success', 'warning', 'danger'];
    color = Math.floor((Math.random() * 4) + 1);


    notify =
        {

            showNotification: function(from, align, design) {

                color = design;

                $.notify({
                    icon: "notifications",
                    message: '{{Session::get('fail')}}'

                }, {
                    type: type[color],
                    timer: 6000,
                    placement: {
                        from: from,
                        align: align
                    }
                });
            }
        }

        @if(Session::has('fail'))

            notify.showNotification('top','center', 4);

        @endif

        @if(Session::has('success'))

        notify.showNotification('top','center', 1);

        @endif


</script>


@yield('javascripts')
<!--Start of Tawk.to Script-->
{{--<script type="text/javascript">--}}
    {{--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();--}}
    {{--(function(){--}}
        {{--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];--}}
        {{--s1.async=true;--}}
        {{--s1.src='https://embed.tawk.to/5a0af232bb0c3f433d4c91ed/default';--}}
        {{--s1.charset='UTF-8';--}}
        {{--s1.setAttribute('crossorigin','*');--}}
        {{--s0.parentNode.insertBefore(s1,s0);--}}
    {{--})();--}}
{{--</script>--}}
<!--End of Tawk.to Script-->

</body>

</html>
