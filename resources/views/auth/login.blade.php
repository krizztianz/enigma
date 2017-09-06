@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<!-- LOGIN -->
<section id="login-content" class="login-content">
    <div class="awe-parallax bg-login-content"></div>
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="row">

            <!-- FORM -->
            <div class="col-xs-12 col-lg-4 pull-right">
                <div class="form-login">
                    <form method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
                        <h2 class="text-uppercase">Masuk</h2>
                        <div class="form-email">
                            <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="form-password">
                            <input type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="check" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="check">
                                <i class="icon md-check-2"></i>
                                Ingat Saya</label>
                            <a href="{{ route('password.request') }}">Lupa Password?</a>
                        </div>
                        <div class="form-submit-1">
                            <input type="submit" value="Sign In" class="mc-btn btn-style-1">
                        </div>
                        <div class="link">
                            <a href="{{ route('register') }}">
                                <i class="icon md-arrow-right"></i>Belum punya akun ? Ayo gabung
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END / FORM -->

            <div class="image">
                <img src="{{ asset('enigma/images/homeslider/img-thumb.png') }}" alt="">
            </div>

        </div>
    </div>
</section>
<!-- END / LOGIN -->
@endsection