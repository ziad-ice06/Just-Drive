@extends('layouts.justdrive')

@section('content')
<div class="gradient" id="login-page">
    <header class="header" id="header-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <div class="page-arrow left-arrow text-left">
                        <a href="#" ><span> < </span></a>
                    </div>
                </div>
                <div class="col-md-10 text-center">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('images/logo.png') }}" alt="#"></a>
                    </div>
                    <div class="page-title">
                        <h2>{{ __('Login') }}</h2>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="page-arrow right-arrow text-right">
                        <a href="#" ><span> > </span></a>
                    </div>
                </div>
            </div>
        </div>      
    </header><!-- /header -->
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="login-form">
                        <p class="text-center">Enter username and password</p>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-controls">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-controls">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-controls">
                                <button type="submit" class="btn btn-login col-12">
                                    {{ __('Sign in!') }}
                                </button>
                            </div>
                            <div class="col-12 text-center">
                                <a class="btn btn-link " href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </form>
                            <h2 class="text-center">...or Login with.</h2>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <img src="{{ asset('images/1.png') }}" class="backgroun-img" alt="">
                </div>
            </div>
            <div class="row" id="social-bottom-spacing">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="or-login-social">
                        <ul>
                            <li><a href="#"><img src="{{ asset('images/facebook.png') }}" alt="#"></a></li>
                            <li><a href="#"><img src="{{ asset('images/twitter.png') }}" alt="#"></a></li>
                            <li><a href="#"><img src="{{ asset('images/google-plus.png') }}" alt="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr class="login-hr">
                </div>
            </div>
        </div>
    </section>
</div>  
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
