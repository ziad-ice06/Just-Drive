@extends('layouts.justdrive')

@section('content')
<div id="result-page">
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-5 col-md-5">
					<div class="logo">
						<a href="/"><img src="{{ asset('images/logo.png') }}" alt="#"></a>
					</div>
				</div>
				<div class="col-12 col-sm-5 offset-md-1 offset-sm-1 col-md-5">
					<form class="help-form" action="result_submit" method="get" accept-charset="utf-8">
						<div class="form-gropu">
							<label>How can we help you?
								<input type="text" value="">
							</label>
						</div>
					</form>
				</div>
			</div>
		</div>
	</header><!-- /header -->
	<section id="section-banner">
		<div class="container-fluid nopadding">
			<div class="row">
				<div class="col-md-12 nopadding">
					<img src="{{ asset('images/profile-banner.png') }}" alt="">
					<div class="learning-img">
						<img src="assets/images/l2.png" alt="">
					</div>
					<span class="arrowbanner"> > </span>
				</div>
			</div>
		</div>
	</section><!-- /section-banner -->
	<section id="preferance">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="driving-details">
					<h4>Preferance</h4>
						<ul>
							<li><p>Automatic</p></li>
							<li><p>Manual</p></li>
							<li><p>Male Driving instructor</p></li>
							<li><p>Female Driving instructor</p></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="driving-details">
					<h4>Driving Lessons</h4>
						<ul>
							<li><p>Intensive</p></li>
							<li><p>Hourly</p></li>
							<li><p>Deals</p></li>
							<li><p>Student (Discount)</p></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="driving-details">
					<h4>Month, Day, Time</h4>
					<span class="text-center add-calender">Add calender for booking</span>
						<ul>
							<li><p>Year (2018...)</p></li>
							<li><p>Month (Jan..,.... Dec)</p></li>
							<li><p>Day (Mon..,.... Sun)</p></li>
							<li><p>Time (7.00am..,...7.00pm)</p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="instructor-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="instructer-detail">
						<div class="instructor-image">
							<img src="{{ asset('images/instructor-img.png') }}" alt="">
						</div>
						<div class="instructor-info">
							<p>lorem ipsum</p>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
					<div class="instructer-detail">
						<div class="instructor-image">
							<img src="{{ asset('images/instructor-img.png') }}" alt="">
						</div>
						<div class="instructor-info">
							<p>lorem ipsum</p>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
					<div class="instructer-detail">
						<div class="instructor-image">
							<img src="{{ asset('images/instructor-img.png') }}" alt="">
						</div>
						<div class="instructor-info">
							<p>lorem ipsum</p>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="instructer-detail">
						<div class="instructor-image">
							<img src="{{ asset('images/instructor-img.png') }}" alt="">
						</div>
						<div class="instructor-info">
							<p>lorem ipsum</p>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>

					<div class="instructer-detail">
						<div class="instructor-image">
							<img src="{{ asset('images/instructor-img.png') }}" alt="">
						</div>
						<div class="instructor-info">
							<p>lorem ipsum</p>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
					<div class="instructer-detail">
						<div class="instructor-image">
							<img src="{{ asset('images/instructor-img.png') }}" alt="">
						</div>
						<div class="instructor-info">
							<p>lorem ipsum</p>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="instructer-detail">
						<div class="instructor-image">
							<img src="{{ asset('images/instructor-img.png') }}" alt="">
						</div>
						<div class="instructor-info">
							<p>lorem ipsum</p>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
					<div class="instructer-detail">
						<div class="instructor-image">
							<img src="{{ asset('images/instructor-img.png') }}" alt="">
						</div>
						<div class="instructor-info">
							<p>lorem ipsum</p>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
					<div class="instructer-detail">
						<div class="instructor-image">
							<img src="{{ asset('images/instructor-img.png') }}" alt="">
						</div>
						<div class="instructor-info">
							<p>lorem ipsum</p>
							<ul>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">
		<div class="copy-right-footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-8">
						<div class="contact-num">
							<p>You may also call us : 1234567890</p>
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
	</footer>
</div>
@endsection