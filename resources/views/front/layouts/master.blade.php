<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Planter Shop Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('front')}}/images/icon/favicon.png" type="image/x-icon">

    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;amp;subset=latin-ext,vietnamese" rel="stylesheet">

    <!-- Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/animate/animated.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/owl.carousel.min/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/jquery.mmenu.all/jquery.mmenu.all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/direction/css/noJS.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/prettyphoto-master/css/prettyPhoto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/slick-sider/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/libs/countdown-timer/css/demo.css')}}">

    <!-- Template CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/home.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')

    -->
    <style>
        .truncated{
            display: -webkit-box;max-width: 100%;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;
        }
    </style>
</head>
<body class="home planter-shop-home">
<div id="preloaderKDZ"></div>
<div class="yolo-site">
    @include('front.layouts.navbar')

    <div>
        @yield('content')

    </div>

    @include('front.layouts.footer')

</div>
<!-- .mv-site-->



<div class="popup-wrapper">
</div>
<!-- .popup-wrapper-->
<div class="click-back-top-body">
    <button type="button" class="sn-btn sn-btn-style-17 sn-back-to-top fixed-right-bottom"><i class="btn-icon fa fa-angle-up"></i></button>
</div>

<!-- Vendor jQuery-->
<script type="text/javascript" src="{{asset("front/libs/jquery/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/bootstrap/js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/animate/wow.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/jquery.mmenu.all/jquery.mmenu.all.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/countdown/jquery.countdown.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/jquery-appear/jquery.appear.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/jquery-countto/jquery.countTo.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/direction/js/jquery.hoverdir.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/direction/js/modernizr.custom.97074.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/isotope/isotope.pkgd.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/isotope/fit-columns.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/isotope/isotope-docs.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/mansory/mansory.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/prettyphoto-master/js/jquery.prettyPhoto.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/slick-sider/slick.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/countdown-timer/js/jquery.final-countdown.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/countdown-timer/js/kinetic.js")}}"></script>
<script type="text/javascript" src="{{asset("front/libs/owl.carousel.min/owl.carousel.min.js")}}"></script>
<script type="text/javascript" src="{{asset("front/js/main.js")}}"></script>

@yield('additional')
</body>
</html>
