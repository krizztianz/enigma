<!-- HEADER -->
<header id="header" class="header">
    <div class="container">

        <!-- LOGO -->
        <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('enigma/images/logo.png') }}" alt=""></a></div>
        <!-- END / LOGO -->

        @section('nav')
        @include('includes.nav')
        @show

    </div>
</header>
<!-- END / HEADER -->