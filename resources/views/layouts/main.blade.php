<!doctype html>
<html class="no-js" lang="">

@include('partials._head')

<body class="home-2 h-17">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- header area start -->
@include('partials._header')
<!-- header area end -->

<!-- main menu area start -->
@include('partials._menu')
<!-- main menu area end -->

<!-- mobile-menu-area start -->
@include('partials._mobile_menu')
<!-- mobile-menu-area end -->

@yield('content')


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
<!-- jquerye levatezoom js -->
<script src="{{URL::to('assets/js/jquery.elevatezoom.js')}}"></script>
<!-- jquerye countdown js -->
<script src="{{URL::to('assets/js/countdown.js')}}"></script>
<!-- jquery fancybox js -->
<script src="{{URL::to('assets/js/jquery.fancybox.pack.js')}}"></script>
<!-- jquery bx-slider js -->
<script src="{{URL::to('assets/js/bx-slider.min.js')}}"></script>
<!--RS Lib js -->
<script type="text/javascript" src="{{URL::to('assets/lib/rs-plugin/assets/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets/lib/rs-plugin/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets/js/rs-slider.js')}}"></script>

<!-- plugins js -->
<script src="{{URL::to('assets/js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{URL::to('assets/js/main.js')}}"></script>

<script src="{{URL::to('js/noty.js')}}" type="text/javascript"></script>

@yield('scripts')
@yield('script')

<script>
    @if(Session::has('success'))

    new Noty({

        type: 'success',
        layout: 'bottomRight',
        text: '{{Session::get('success')}}'
    }).show();

    @endif

    @if(Session::has('fail'))
    new Noty({

        type: 'error',
        layout: 'bottomRight',
        text: '{{Session::get('fail')}}'
    }).show();
    @endif
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a0af232bb0c3f433d4c91ed/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
