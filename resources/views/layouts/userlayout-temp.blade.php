<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('assets/home/images/favicon.png')}}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('assets/home/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('assets/home/css/reset.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/home/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
	
</head>
<body class="js">
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
								<li><i class="ti-email"></i> support@shophub.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Store location</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
								<li class="dropdown">
                                    <i class="ti-user"></i>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="account">My account</a>
									@if(auth()->user())
                                    <div class="dropdown-menu" id="midropdown" aria-labelledby="account">
										<div class="dropdown-profile text-center">
											@if(!empty(auth()->user()->profile->thumbnail))
											<img src="{{ asset('storage/'.auth()->user()->profile->thumbnail) }}" alt="">
											@else
											<img src="{{ asset('assets/user/img/img_avatar.png') }}" alt="#" class="img-thumbnail">
											@endif
											<p style="text-transform: uppercase">{{ auth()->user()->name }}</p>
											<p>{{ auth()->user()->created_at }}</p>
										</div>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{ route('user.dashboard') }}"><i class="ti-dashboard"></i> Dashboard</a>
										<a class="dropdown-item" href="{{ route('user.profile.index') }}"><i class="ti-user"></i> Profile</a>
										<a class="dropdown-item" href="{{ route('user.settings') }}"><i class="ti-settings"></i> Settings</a>
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											<i class="ti-lock"></i>{{ __('Logout') }}
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
										@else
										<a class="dropdown-item" href="{{ route('login') }}"><i class="ti-power-off"> Login</a>
										<a class="dropdown-item" href="{{ route('register') }}"> <i class="ti-user"></i> Register</a>
									</div>
									@endif
                                </li>

							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
	
	</header>
	<!--/ End Header -->
<div class="user-wrapper">	
<div class="container">
    <div class="row">
        <div class="col-md-3">
			<div class="profile-wrap">
				<div class="profile text-center">
				@if(!empty(auth()->user()->profile->thumbnail))
				<img src="{{ asset('storage/'.auth()->user()->profile->thumbnail) }}" alt="">
				@else
				<img src="{{ asset('assets/user/img/img_avatar.png') }}" alt="#" class="img-thumbnail">
				@endif
					<p class="user-name">{{ auth()->user()->name }}</p>
					<p>Registered On: {{ auth()->user()->created_at }}</p>
				</div>
				<div class="user-menu">
					<ul class="list-group">
						<a href="{{ route('user.dashboard')}}"><li class="list-group-item"> <i class="ti-dashboard"></i> Dashboard</li></a>
						<a href="#"><li class="list-group-item"> <i class="ti-user"></i> Company</li></a>
						<a href="{{ route('user.product.index') }}"><li class="list-group-item"> <i class="ti-server"></i> Products</li></a>
						<a href="http://"><li class="list-group-item"><i class="ti-email"></i> Messages</li></a>
						<a href="http://"><li class="list-group-item">Account</li></a>
					</ul>
				</div>
			</div>
        </div>
        <div class="col-md-9">
			<div class="content-wrap">
			@yield('content')
			</div>
		
		</div>
    </div>
</div>
</div>

	



	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="{{asset('assets/home')}}/images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - London Oxford Street.</li>
									<li>012 United Kingdom.</li>
									<li>info@eshop.com</li>
									<li>+032 3456 7890</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="{{asset('assets/home')}}/images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{ asset('assets/home/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/home/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{ asset('assets/home/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('assets/home/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/home/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<!-- <script src="{{ asset('assets/home/js/colors.js')}}"></script> -->
	<!-- Slicknav JS -->
	<script src="{{ asset('assets/home/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('assets/home/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('assets/home/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('assets/home/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('assets/home/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('assets/home/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('assets/home/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('assets/home/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('assets/home/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('assets/home/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{ asset('assets/home/js/active.js')}}"></script>
</body>
</html>