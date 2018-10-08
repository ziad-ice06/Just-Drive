@extends('layouts.justdrive')

@section('content')
<div class="gradient" id="register-page">
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
                    <div class="registration text-center">
                        <h3>{{ __('Registration (Freee)') }}</h3>
                        <p>Free Registration for all driving leaners and instructors</p>
                        <p>Register now & get access now</p>
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
                <div class="col-md-6 text-left">
                    <img src="{{ asset('images/l.png') }}" class="backgroun-img" alt="">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="login-form register-form">
                                <p class="sign-up">Sign up now <span>Fill in the below to get instant access</span> </p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-controls">
                                        <div class="col-12">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus  placeholder="Name">

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <div class="col-12">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <div class="col-12">
                                            <input id="age" type="text" class="form-control" placeholder="Your Age" name="age">
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <div class="col-12">
                                            <input id="tele_no" type="tel" class="form-control" placeholder="Tele No" name="tele_no">
                                        </div>
                                    </div>
                                    <div class="form-controls">
                                        <div class="col-12">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <div class="col-12">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                                        </div>
                                    </div>

                                    <div class="form-controls">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-login col-12">
                                                {{ __('sign me up!') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="terms">
                                    <p>By creating an acccount you agree to our <a href="#">Terms and Conditios.</a> Please read our <a href="#">Terms and Conditios.</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="or-login-social">
                        <ul>
                            <li><a href="#"><img src="{{ asset('images/facebook.png') }}" alt="#"></a></li>
                            <li><a href="#"><img src="{{ asset('images/twitter.png') }}" alt="#"></a></li>
                            <li><a href="#"><img src="{{ asset('images/google-plus.png') }}" alt="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr class="login-hr">
                </div>
            </div>
        </div>
    </section>
</div><!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
