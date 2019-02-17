<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->
<head>
    @include('includes.head')
</head>

<body>
<div class="wrapper">
    <!--=== Header ===-->
@include('includes.header')
<!--=== End Header ===-->

@yield('content')



<!--=== Footer Version 1 ===-->
@include('includes.footer')
<!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->



<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
<script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();
        ParallaxSlider.initParallaxSlider();
    });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>
