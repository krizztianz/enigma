@extends('layouts.auth')

@section('title', 'Daftar Baru')

@section('content')
<!-- REGISTER -->
    <section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">
    
                <!-- FORM -->
                <div class="col-lg-4 pull-right">
                    <div class="form-login">
                        <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                            <h2 class="text-uppercase">Mendaftar</h2>
                            <div class="form-email"{{ ($errors->has('name')? ' has-error' : "") }}>
                                <input type="text" placeholder="Nama Lengkap" name="name" value="{{ old('name') }}" required autofocus>
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-email"{{ ($errors->has('email')? ' has-error' : "") }}>
                                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-email"{{ ($errors->has('organization')? ' has-error' : "") }}>
                                <input type="text" placeholder="Nama Organisasi" name="organization_name" value="{{ old('name') }}" required>
                                <span class="help-block">{{ $errors->first('organization') }}</span>
                            </div>
                            <div class="form-password"{{ ($errors->has('password')? ' has-error' : "") }}>
                                <input type="password" placeholder="Password" name="password" required>
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-password"{{ ($errors->has('password_confirmation')? ' has-error' : "") }}>
                                <input id="password-confirm" placeholder="Ulangi Password" type="password" name="password_confirmation" required>
                                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                            </div>
                            
                            <div class="form-submit-1">
                                <input type="submit" value="Daftarkan" class="mc-btn btn-style-1">
                            </div>
                            <div class="link">
                                <a href="{{ route('login') }}">
                                    <i class="icon md-arrow-right"></i>Sudah punya akun ? Masuk
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
<!-- END / REGISTER -->
@endsection