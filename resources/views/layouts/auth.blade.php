<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,900' rel='stylesheet' type='text/css'>
    @section('css')
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('enigma/css/library/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('enigma/css/library/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('enigma/css/library/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('enigma/css/md-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('enigma/css/style.css') }}">
    @show
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <title>Enigma - @yield('title')</title>
</head>
<body id="page-top" class="home">

<!-- PAGE WRAP -->
<div id="page-wrap">

    @section('header')
    @include('includes.header')
    @show

    @yield('content')
    
    @section('footer')
    @include('includes.footer')
    @show


    


</div>
<!-- END / PAGE WRAP -->

@section('js')
<!-- Load jQuery -->
<script type="text/javascript" src="enigma/js/library/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="enigma/js/library/bootstrap.min.js"></script>
<script type="text/javascript" src="enigma/js/library/jquery.owl.carousel.js"></script>
<script type="text/javascript" src="enigma/js/library/jquery.appear.min.js"></script>
<script type="text/javascript" src="enigma/js/library/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="enigma/js/library/jquery.easing.min.js"></script>
<script type="text/javascript" src="enigma/js/scripts.js"></script>
@show
</body>
</html>