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

            @section('preloader')
            <!-- PRELOADER -->
            <div id="preloader">
                <div class="pre-icon">
                    <div class="pre-item pre-item-1"></div>
                    <div class="pre-item pre-item-2"></div>
                    <div class="pre-item pre-item-3"></div>
                    <div class="pre-item pre-item-4"></div>
                </div>
            </div>
            <!-- END / PRELOADER -->
            @show

            @section('header')
            @include('includes.header')
            @show

            @section('slider')
            <!-- HOME SLIDER -->
            <section class="slide" style="background-image: url({{ asset('enigma/images/homeslider/bg.jpg') }})">
                <div class="container">
                    <div class="slide-cn" id="slide-home">
                        <!-- SLIDE ITEM -->
                        <div class="slide-item">
                            <div class="item-inner">
                                <div class="text">
                                    <h2>Bikin kelas online gak pake ribet</h2>
                                    <p>
                                        Daftarkan diri anda dan anda bisa langsung membuka kelas online<br>
                                        Ya, saat itu juga
                                    </p>
                                    <div class="group">
                                        <a href="{{ url('register') }}" class="mc-btn btn-style-1">Daftar Sekarang</a>
                                    </div>
                                </div>

                                <div class="img">
                                    <img src="{{ asset('enigma/images/homeslider/img-thumb.png') }}" alt="">
                                </div>
                            </div>

                        </div>  
                        <!-- SLIDE ITEM -->     

                        <!-- SLIDE ITEM -->
                        <div class="slide-item">
                            <div class="item-inner">
                                <div class="text">
                                    <h2>Butuh pelatihan atau kursus online?</h2>
                                    <p>
                                        Temukan kursus dan pelatihan yang tepat hanya di Enigma <br>    
                                        Cukup dengan mendaftar, anda bisa langsung mencari kursus
                                    </p>
                                    <div class="group">
                                        <a href="#" class="mc-btn btn-style-1">See full features</a>
                                    </div>
                                </div>

                                <div class="img">
                                    <img src="{{ asset('enigma/images/homeslider/img-thumb.png') }}" alt="">
                                </div>

                            </div>  
                        </div>  
                        <!-- SLIDE ITEM -->  

                    </div>
                </div>
            </section>
            <!-- END / HOME SLIDER -->
            @show

            @section('after-slider')
            <!-- AFTER SLIDER -->
            <section id="after-slider" class="after-slider section">
                <div class="awe-color bg-color-1"></div>
                <div class="after-slider-bg-2"></div>
                <div class="container">

                    <form method="POST" action="{{ url('carikursus') }}">
                        {{ csrf_field() }}
                        <div class="after-slider-content tb">
                            <div class="inner tb-cell">
                                <h4>Cari Kursus</h4>
                                <div class="course-keyword">
                                    <input type="text" placeholder="Pencarian Kursus">
                                </div>
                                <div class="mc-select-wrap">
                                    <div class="mc-select">
                                        <select class="select" name="kategori" id="all-categories">
                                            <option value="" selected>All categories</option>
                                            <option value="">IT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tb-cell text-right">
                                <div class="form-actions">
                                    <input type="submit" value="Cari Kursus" class="mc-btn btn-style-1">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </section>
            <!-- END / AFTER SLIDER -->
            @show

            @yield('content')

            @section('before-footer')
            <!-- BEFORE FOOTER -->
            <section id="before-footer" class="before-footer">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="mc-count-item">
                                <h4>Courses</h4>
                                <p><span class="countup">2536,556</span></p>
                            </div>
                            <div class="mc-count-item">
                                <h4>Teachers</h4>
                                <p><span class="countup">10,389</span></p>
                            </div>
                            <div class="mc-count-item">
                                <h4>Students</h4>
                                <p><span class="countup">34,177</span></p>
                            </div>
                            <div class="mc-count-item">
                                <h4>Tuition Paid</h4>
                                <p>$ <span class="countup">793,361,890</span></p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="before-footer-link">
                                <a href="#" class="mc-btn btn-style-2">Become a member</a>
                                <a href="#" class="mc-btn btn-style-1">Become a teacher</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END / BEFORE FOOTER -->
            @show

            @section('footer')
            @include('includes.footer')
            @show

        </div>
        <!-- END / PAGE WRAP -->

        @section('js')
        <!-- Load jQuery -->
        <script type="text/javascript" src="{{ asset('enigma/js/library/jquery-1.11.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('enigma/js/library/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('enigma/js/library/jquery.owl.carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('enigma/js/library/jquery.appear.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('enigma/js/library/perfect-scrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('enigma/js/library/jquery.easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('enigma/js/scripts.js') }}"></script>
        @show
    </body>
</html>