<!DOCTYPE html>
<html lang="zxx">
<head>


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PDTWJ3Z');</script>
    <!-- End Google Tag Manager -->
    <title>XERO - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <!-- Diğer CSS dosyaları -->
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('assets/front/img/favicon.ico" type="image/x-icon')}}" >
    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/skins/default.css')}}">
  

 <link type="text/css" rel="stylesheet" href="{{asset('assets/css/jquery.selectBox.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/rangeslider.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/leaflet.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/map.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/front/fonts/flaticon/font/flaticon.css')}}">

</head>
<body id="top" class="index-body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- top header start -->
@include('front.inculudes.top-header')
<!-- top header end -->

<!-- Main header start -->
@include('front.inculudes.main-header')
<!-- Main header end -->

<!-- Sidenav start -->
@include('front.inculudes.sidenav')
<!-- Sidenav end -->

<!-- Banner start -->
@include('front.inculudes.banner')
<!-- Banner end -->

<!-- featured start -->
@include('front.inculudes.featured')
<!-- featured end -->

<!-- Content start -->
@yield('content')
<!-- Content end -->



<!-- Footer start -->
@include('front.inculudes.footer')
<!-- Footer end -->

<!-- External JS libraries -->
<script src="{{asset('assets/front/js/jquery-2.2.0.min.js')}}"></script>
<!-- Diğer JS dosyaları -->


<!-- Custom JS Script -->
<script  src="{{asset('assets/front/js/app.js')}}"></script>

<!-- External JS libraries -->

<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.selectBox.js')}}"></script>
<script src="{{asset('assets/js/rangeslider.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.filterizr.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/backstretch.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>
<script src="{{asset('assets/js/particles.min.js')}}')}}"></script>
<script src="{{asset('assets/js/typed.min.js')}}"></script>
<script src="{{asset('assets/js/dropzone.js')}}"></script>
<script src="{{asset('assets/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{asset('assets/js/leaflet.js')}}"></script>
<script src="{{asset('assets/js/leaflet-providers.js')}}"></script>
<script src="{{asset('assets/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/maps.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
<script src="{{asset('assets/js/ie-emulation-modes-warning.js')}}"></script>
<!-- Custom JS Script -->



</body>
</html>
