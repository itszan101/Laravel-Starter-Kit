<!DOCTYPE html>
<html lang="en-US">

<head>

	<!-- Meta
	============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

	<meta name="author" content="ExplicitConcepts">
	<!-- description -->
	<meta name="description" content="softdev_adhivasindo">
	<!-- keywords -->
	<meta name="keywords" content="softdev_adhivasindo">

	<!-- Stylesheets
	============================================= -->
	<link href="{{ asset('assets/css/css-assets.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700i,700" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="{{ asset('assets/img/logo_header.png') }}">
	<link rel="apple-touch-icon" href="images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Title
	============================================= -->
	<title>Laravel-Starter-Kit</title>
</head>

<body>

	<div id="scroll-progress">
		<div class="scroll-progress"><span class="scroll-percent"></span></div>
	</div>

	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-bar-1" class="header-bar">

				<div class="header-bar-wrap">

					<div class="container">
						<div class="row">
							<div class="col-md-12">

								{{-- <div class="hb-content">
									<a class="logo logo-header" href="#">
										<img src="" alt="" style="width: 200px;">
										<h3><span class="colored"></span></h3>
										<span></span>
									</a><!-- .logo end -->
									<div class="hb-meta">
									</div><!-- .hb-meta end -->
								</div><!-- .hb-content end --> --}}

							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .header-bar-wrap -->

			</div><!-- #header-bar-1 end -->

		</header><!-- #header end -->

		<!-- Banner
		============================================= -->
		<section id="banner">

			<div class="banner-parallax" data-banner-height="800">
				<img src="{{ asset('assets/img/imagess.png') }}" alt=""> <!--ADD BACKGROUND-->
				<div class="overlay-colored color-bg-gradient opacity-90"></div><!-- .overlay-colored end -->
				<div class="slide-content">

					<div class="container">
						<div class="row">
                            <a class="logo logo-header" href="#">
                                <img src="{{ asset('assets/img/laravel_logo.png') }}" alt="" style="width: 130px;padding-bottom: 136px;padding-top: 40px;">
                                <h3><span class="colored">Starter-Kit</span></h3>
                                <span></span>
                            </a><!-- .logo end -->
							<div class="col-md-7">
                                
								<div class="banner-center-box text-white md-text-center">
									<h1>
										Laravel-Starter-Kit
									</h1>
									<div class="description">
										- Laravel(9) with Jetstream, LiveWire, Stisla Admin Template
									</div>
								</div><!-- .banner-center-box end -->

							</div><!-- .col-md-7 end -->

							{{ $slot }}

						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .slide-content end -->
				<div class="section-separator wave-1 bottom">
					<div class="ss-content">
						<img class="svg" src="img/wave-1.svg" alt="">
					</div><!-- .ss-content -->
				</div><!-- .section-separator -->
			</div><!-- .banner-parallax end -->

		</section><!-- #banner end -->

		<!-- Content
		============================================= -->
		<section id="">

			<div id="content-wrap">
				
				



			</div><!-- #content-wrap -->

		</section><!-- #content end -->

		

	</div><!-- #full-container end -->

	<a class="scroll-top-icon scroll-top" href="#"><i class="fa fa-angle-up"></i></a>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/jRespond.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.stellar.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('assets/js/simple-scrollbar.min.js') }}"></script>
	<script src='{{ asset('assets/js/functions.js') }}'></script>

</body>

</html>