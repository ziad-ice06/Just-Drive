@extends('layouts.justdrive')

@section('content')
<div class="payment-main">
	<div class="container-fluid nopadding">
		<div class="row">
			<div class="col-md-4 nopadding">
				<div class="sidebar-login">
					@guest
					<div class="login-form-payment">
						<p class="text-center">Check out</p>
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
					</div>
					<div class="learn-imgae text-center">
						<img src="{{ asset('images/l2.png') }}" alt="">
					</div>
					@else
					<div style="height: 750px">
						<div class="login-form-payment">
							<p class="text-center">Check out</p>
						</div>
						<div class="learn-imgae text-center">
							<img src="{{ asset('images/l2.png') }}" alt="">
						</div>
					</div>
					@endguest
				</div>
			</div>
			<div class="col-md-8 nopadding">
				<div class="payment-area">
					<header id="header" class="header-payment">
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-12 text-right">
									<div class="logo">
										<a href="/"><img src="{{ asset('images/logo.png') }}" alt="#"></a>
									</div>
								</div>				
							</div>
						</div>
					</header><!-- /header -->
					<div class="pay-methods">
						<p>We accept debit cars only</p>
						<img src="{{ asset('images/visa.png') }}" alt="">
						<form action="payment_submit" method="get" accept-charset="utf-8">
							<label><input type="checkbox" ><span class="check"></span> Pay $ 120.00 with Debit card</label>
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div class="form-controls1">
										<label for="cardholder">Cardholder's name</label>
										<input type="text" name="cardholder">
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									<div class="form-controls1">
										<label for="cardnum">Card Number</label>
										<input type="text" name="cardnum">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 nopadding">
									<div class="row">
										<div class="col-md-4 pad-right-0">
											<div class="form-controls1">
												<label for="expiry">Expiry Date</label>
												<input type="text" name="expiry" placeholder="MM/YY">
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-controls1">
												<label for="security">Security code</label>
												<input type="text" name="security">
											</div>
										</div>
									</div>
								</div>
							</div>	
						</form>
					</div>
					<div class="payment-footer">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<p class="back-btn"><a href="#">Back</a></p>
							</div>
							<div class="col-sm-6 col-md-6">
								<p class="next-btn"><a href="#">Next step</a></p>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection