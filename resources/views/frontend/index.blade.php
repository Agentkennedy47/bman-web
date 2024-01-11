@extends('frontend.main_master')

@section('main')

<!-- img slides -->
<section>

	@php

	$slides = App\Models\HomeSlide::latest()->get();
	$testimonials = App\Models\Testimonial::latest()->get();
	$aboutPage = App\Models\About::find(1);

	@endphp

	<!-- Carousel -->
	<div id="imgSlide" class="carousel slide carousel-dark carousel-fade" data-bs-ride="carousel">
		<!-- Indicators/dots -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#imgSlide" data-bs-slide-to="0" class="active"></button>
			<button type="button" data-bs-target="#imgSlide" data-bs-slide-to="1"></button>
		</div>

		<!-- The slideshow/carousel -->
		<div class="carousel-inner">

			@foreach ($slides as $item)

			<div class="carousel-item active">
				<img src="{{ asset($item->slide_image) }}" alt="" class="d-block carousel-img w-100">
				<div class="carousel-caption text-info text-start">
					<h2 class="fs-1 animate__animated animate__fadeInRightBig">{{ $item->title }}</h2>
					<p class="fs-2 animate__animated animate__fadeInLeftBig">{{ $item->description }}</p>
					
					@if ($item->call_action === 'Explore plans')

					<a href="{{ url('/data_plans') }}">{{ $item->call_action}} &rightarrow;</a>

					@else
					
					<a href="{{ url('/ecurrency') }}">{{ $item->call_action}} &rightarrow;</a>

					@endif

				</div> 
			</div>

			@endforeach

			{{-- <div class="carousel-item">
				<img src="{{ asset('frontend/assets/img/slides/bitcoin.jpg') }}" alt="" class="d-block carousel-img" width="100%">
				<div class="carousel-caption text-white text-start">
					<h3 class="fs-1 animate__animated animate__fadeInRightBig">Reliable, Secured, And Fast</h3>
					<p class="animate__animated animate__fadeInLeftBig">Unbeatable Rates At Your Reach</p>
					<a href="">Explore Rates &rightarrow;</a>
				</div> 
			</div> --}}
		</div>

		<!-- Left and right controls/icons -->
		<button class="carousel-control-prev" type="button" data-bs-target="#imgSlide" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#imgSlide" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
		</button>
	</div>
</section>
<!-- End img slides -->

<!-- About -->
<section class="py-5">
	<h1 class="h1 text-center text-muted text-uppercase fs-2">About Us</h1>
	<div class="container">
		<div class="row">
			<div class="about-us col-xl-6 mb-3">
				<img src="{{ asset('frontend/assets/img/about/aboutUs.jpg') }}" alt="">
			</div>
			<div class="img-content col-xl-6 mb-3 lh-base">
				<p>{!! $aboutPage->long_description !!}</p>
			</div>
		</div>
	</div>
</section>
<!-- End About -->

<!-- Services -->
<section class="bg-light py-5">
	<h1 class="h1 text-center text-muted text-uppercase fs-2">Our Services</h1>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6 mb-3">
				<img src="{{ asset('frontend/assets/img/network.png') }}" alt="" class="img-thumbnail img-fluid rounded shadow-sm">
			</div>

			<div class="col-md-6 mb-3">
				<h1>Data Plans</h1>
				<div style="width: 15%; height: 7px; background-color: green;"></div>
				<p class="pt-3">We offer the best affordable data plans for all networks</p>
				<a href="{{ url('/data_plans') }}">Check plans</a>
			</div>
		</div>

		<hr>

		<div class="row mt-5">
			<div class="col-md-6 mb-3">
				<h1>E-currency Rates</h1>
				<div style="width: 15%; height: 7px; background-color: green;"></div>
				<p class="pt-3">We offer the best affordable rates for all cryptocurrencies</p>
				<a href="{{ url('/ecurrency') }}">Check rate</a>
			</div>

			<div class="col-md-6 mb-3">
				<img src="{{ asset('frontend/assets/img/crypto.jpg') }}" alt="" class="img-thumbnail img-fluid rounded shadow-sm">
			</div>
		</div>
	</div>
</section>
<!-- End Services -->

<!-- Testimonials -->
<section>
	<div class="container my-2 py-4">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-8">
				<div class="text-center">
					<h1 class="text-muted" style="font-size: 45px;">TESTIMONIALS</h1>
					<p class="text-dark">What our satisfied customers have to say on our services</p>
				</div>
			</div>
		</div>

		<br>

		<div class="slider">

			@foreach ($testimonials as $item)

			<div class="mx-3">
				<div class="card border-0 rounded-0 shadow-lg">
					<h3 class="text-center my-2">{{ $item->testimonial_title }}</h3>
					<p class="px-2 text-center">{!! $item->testimonial_description !!}</p>
					<div class="d-flex bg-opacity-25 justify-content-center align-items-end" style="height: 20vh">
						<div class="text-center text-white pb-2 bg-dark w-100 pt-3 bg-opacity-75">
							<h4>{{ $item->testimonial_author }}</h4>
						</div>
					</div>
				</div>
			</div>

			@endforeach

			{{-- <div class="mx-3">
				<div class="card border-0 rounded-0 shadow-lg">
					<h2 class="text-center my-2">Excellent Job</h2>
					<p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsam iusto accusantium, illo animi aliquam quidem repudiandae molestias atque rerum.</p>
					<div class="d-flex bg-opacity-25 justify-content-center align-items-end" style="height: 20vh">
						<div class="text-center text-white pb-2 bg-dark w-100 pt-3 bg-opacity-75">
							<h2>Mary Sussan</h2>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
    </div>
</section>
<!-- End Testimonials -->

<!-- Contact -->
<section>
	<div class="contact-img">
		<div class="contact-content">
			<h3 class="text-uppercase fs-1">Reach To Us</h3>
			<div style="width: 20%; height: 7px; background-color: green;"></div>
			<p class="mt-3 fs-5">You can reach to us via WhatsApp.</p>
			<a href="https://wa.me/2348030959780" target="_blank">Contact Us &rightarrow;</a>
		</div>
	</div>
</section>
<!-- End Contact -->

@endsection