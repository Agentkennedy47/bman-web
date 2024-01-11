<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bman Digital Services - The best place to buy and sell on all types of E-currencies at an affordable rates, great data plans for all Nigerian network services">
	<meta name="robots" content="index,follow">
	<meta name="title" content="Bman Digital Services - The best place to buy and sell on all types of E-currencies at an affordable rates, great data plans for all Nigerian network services">
	<meta property="og:site_name" content="Bman Digital Services">
	<title>Bman Digital Services | Buying and Selling of E-currencies, and Data Plans</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('frontend/assets/img/logo/favicon.ico') }}">

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

	<!-- Fontawesome css -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/fontawesome/css/all.css') }}">

	<!-- animate.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<!-- slick css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">

	<!-- custom css -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>
<body>
	<!-- preloader-start -->
	   	<div id="preloader">
	   		<div id="container" class="container-preloader">
	   			<div class="animation-preloader">
	   				<div class="spinner"></div>
	   				<div class="txt-loading">
	   					<span preloader-text="B" class="characters">B</span>
	   					<span preloader-text="M" class="characters">M</span>
	   					<span preloader-text="A" class="characters">A</span>
	   					<span preloader-text="N" class="characters">N</span>
	   					<div>
	   						<span preloader-text="D" class="characters">D</span>
	   						<span preloader-text="I" class="characters">I</span>
	   						<span preloader-text="G" class="characters">G</span>
	   						<span preloader-text="I" class="characters">I</span>
	   						<span preloader-text="T" class="characters">T</span>
	   						<span preloader-text="A" class="characters">A</span>
	   						<span preloader-text="L" class="characters">L</span>
	   						<span preloader-text="S" class="characters">S</span>
	   						<span preloader-text="E" class="characters">E</span>
	   						<span preloader-text="R" class="characters">R</span>
	   						<span preloader-text="V" class="characters">V</span>
	   						<span preloader-text="I" class="characters">I</span>
	   						<span preloader-text="C" class="characters">C</span>
	   						<span preloader-text="E" class="characters">E</span>
	   						<span preloader-text="S" class="characters">S</span>
	   					</div>
	   				</div>
	   			</div>	
	   			<div class="loader-section section-left"></div>
	   			<div class="loader-section section-right"></div>
	   		</div>
	   	</div>
	<!-- preloader-end -->
	
	<!-- header -->
	@include('frontend.partials.header')
	<!-- End header -->

	<!-- main content -->
	<main>
		@yield('main')
	</main>
	<!-- end main content -->

	<!-- Footer -->
	@include('frontend.partials.footer')
	<!-- End Footer -->




	<!-- Bootstrap js -->
	<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

	<!-- slick js -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

	<!-- custom js -->
	<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>
</html>