@extends('layouts.justdrive')

@section('content')
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-5 col-md-5">
					<div class="logo">
						<a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="#"></a>
						<a class="nav-link openme" href="#" onclick="menu_open()"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-12 col-sm-7 col-md-7">
					<div class="mainmenu">
						<nav class="text-right">
							<ul class="list-inline">
								<li><a href="index.html">Home</a></li>
								<li><a href="register.html">Register</a></li>
								<li><a href="profile.html">Profile</a></li>
								<li><a href="login.html">Log In</a></li>
								<li><a href="payment.html">Payment</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header><!-- /header -->
	<section id="section-banner">
		<div class="container-fluid nopadding">
			<div class="row">
				<div class="col-md-12 nopadding">
					<img src="{{ asset('images/banner1.png') }}" alt="">
				</div>
			</div>
		</div>
	</section><!-- /section-banner -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h4>Find your driving instructor now</h4>
					<p>Seach by postcode</p>
					<form action="index_submit" method="get" accept-charset="utf-8">
						<div class="form-group"><input type="search"></div> <span><input type="submit" value="Go"></span>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</section>

		<aside id="menu-responsive">
			<div class="row">
				<div class="col-md-12">
					<div class="btn-close text-right">
		              <a href="#"><i class="fa fa-close" onclick="menu_close()"></i></a>
		            </div>	
		            <div class="mainmenu-responsive">
		            	<nav class="text-center">
		            		<ul class="list-inline">
		            			<li><a href="index.html">Home</a></li>
		            			<li><a href="register.html">Register</a></li>
		            			<li><a href="profile.html">Profile</a></li>
		            			<li><a href="login.html">Log In</a></li>
		            			<li><a href="payment.html">Payment</a></li>
		            		</ul>
		            	</nav>
		            </div>			
				</div>
			</div>			
		</aside>

	<footer id="footer">
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-4">
							<h4>Customer services</h4>
						<div class="service-content">
							<div class="footer-mennu">
								<ul>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Log in</a></li>
									<li><a href="#">Sign up</a></li>
									<li><a href="#">Mobile App</a></li>
									<li><a href="#">Help</a></li>
									<li><a href="#">Boking</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-4">
							<h4>Who we are</h4>
						<div class="service-content">
							<p>Provide instructors in your area, Manage your booking and payment, offer the best deal for you</p>
							<ul class="our">
								<li><a href="#"><img src="{{ asset('images/staring.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('images/cap.png') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('images/euro.png') }}" alt=""></a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-4">
							<h4>What we do</h4>
						<div class="service-content">
							<p>Just drive is the easiest and quickest way to mannage your driving lessons.</p>
							<ul class="stores text-center">
								<li><a href="#"><img src="{{ asset('images/app-store.png') }}" class="app-store" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('images/google-play.png') }}" class="google-play" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-right-footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-4">
						<div class="social-icons">
							<ul>
								<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-4">
						<div class="visa-image">
							<img src="{{ asset('images/visa.png') }}">
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-3 offset-md-1">
						<div class="feedback">
							<h6>Feedback</h6>
							<p>Help us improve our webside</p>
							<a href="#">Send Feedback</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- /footer -->
@endsection