@extends('layouts.justdrive')

@section('content')
<div class="gradient" id="profile">
	<header id="header" class="header-3">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-5 col-md-5">
					<div class="logo">
						<a href="/"><img src="{{ asset('images/white-logo.png') }}" alt="#"></a>
						<a class="nav-link openme" href="#" onclick="menu_open()"><i class="fa fa-bars" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-12 col-sm-7 col-md-7">
					<div class="mainmenu">
						<nav class="text-right">
							<ul class="list-inline">
								<li><a href="#">Password</a></li>
								<li><a href="#">Application</a></li>
								<li><a href="{{ route('result') }}">Result</a></li>
								<li><a href="{{ route('payment') }}">Payment</a></li>
								<!-- <li>
	                                <div class="" aria-labelledby="navbarDropdown">
	                                    <a class="" href="{{ route('logout') }}"
	                                       onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                        {{ __('Logout') }}
	                                    </a>
	                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                        @csrf
	                                    </form>
	                                </div>
	                            </li> -->
	                            <li class="nav-item dropdown">
	                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                                    {{ Auth::user()->name }} <span class="caret"></span>
	                                </a>

	                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	                                    <a class="dropdown-item" href="{{ route('logout') }}"
	                                       onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                        {{ __('Logout') }}
	                                    </a>

	                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                        @csrf
	                                    </form>
	                                </div>
	                            </li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header><!-- /header -->
	<section id="page-content" class="profile-content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6">
					<div class="profile-heading-hr">
						<h6>My Profile</h6>
						<hr>
					</div>
					<form action="login_submit" method="get" accept-charset="utf-8">
						<div class="form-controls">
							<input type="text" placeholder="Name/Female-Male">
						</div>
						<div class="form-controls">
							<input type="text" placeholder="Mile from you">
						</div>
						<div class="form-controls">
							<div class="reviews">
								<span><input type="text" placeholder="Review"></span>
								<span>
									<ul>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
								</span>	
							</div>
						</div>
						<div class="form-controls">
							<input type="text" placeholder="Manual & Automatic">
						</div>
						<div class="form-controls">
							<input type="tel" placeholder="20 Years & experience">
						</div>
						<div class="form-controls">
							<input type="text" placeholder="English + Polish">
						</div>
					</form>
					<div class="or-login-social">
						<ul>
							<li><a href="#"><img src="{{ asset('images/facebook.png') }}" alt="#"></a></li>
							<li><a href="#"><img src="{{ asset('images/twitter.png') }}" alt="#"></a></li>
							<li><a href="#"><img src="{{ asset('images/google-plus.png') }}" alt="#"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-sm-12 offset-md-1 col-md-4 ">
					<div class="profile-heading-hr">
						<h6>To view instruter detail included</h6>
						<hr>
					</div>
					<div class="calender-img">
						<img src="{{ asset('images/calender.png') }}" alt="">
					</div>
					<div class="lessson">
						<div class="white-box">
							<span>Total Lesson:</span>
							<span>4</span>
						</div>
						<div class="white-box">
							<span>Total Hours:</span>
							<span>8</span>
						</div>
						<div class="white-box">
							<span>Fees</span>
							<span>$ 240</span>
						</div>
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
	<aside id="menu-responsive">
		<div class="row">
			<div class="col-md-12">
				<div class="btn-close text-right">
	              <a href="#"><i class="fa fa-close" onclick="menu_close()"></i></a>
	            </div>	
	            <div class="mainmenu-responsive">
	            	<nav class="text-center">
	            		<ul class="list-inline">
	            			<li><a href="profile.html">Profile</a></li>
							<li><a href="#">Password</a></li>
							<li><a href="#">Application</a></li>
	            		</ul>
	            	</nav>
	            </div>			
			</div>
		</div>			
	</aside>
</div>

	
@endsection