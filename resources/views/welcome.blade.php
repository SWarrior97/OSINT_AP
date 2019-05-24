<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>OSint Cape Vert</title>

        <!--
                Google Font
                ============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

        <!--
                CSS
                ============================================= -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
	
	@if (Session::has('message_danger'))
		<div id="mydiv" class="alert alert-danger">
			{{ Session::get('message_danger') }}
		</div>
	@endif
	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/OSINT_TEST.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- End Header Area -->


	<!-- Start Banner Area -->
	<section class="home-banner-area relative">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
					<h1 class="wow fadeIn" data-wow-duration="4s">OSINT - Open Source Intelligence <br> Cape Vert</h1>
					<p class="text-white">
						Retrieve information from open source
					</p>

					<div >
						<form  action="{{route('search')}}" method="POST" class="form-box d-flex justify-content-between" enctype="multipart/form-data">
							@csrf
								<input type="number" placeholder="Nif" class="form-control" name="nif">
								<input type="text" placeholder="Name" class="form-control" name="name">
								<input type="number" placeholder="Phone" class="form-control" name="phone">
								<select id="input" class="form-control" name="type">
									<option value="singular">Singular</option>
									<option value="empresa">Empresa</option>
								</select>
							<button type="submit" class="btn search-btn">Search</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="img/Cloud-OSINT.png" alt="">
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						OSINT - Open Source Intelligence<br>Cape Vert
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							The collection of information in sources that are publicly accessible and for which there is no need for formal requests.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->
	
	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="js/main.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/style.js"></script>
</body>
</html>
