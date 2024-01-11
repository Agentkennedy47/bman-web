<footer>

	@php

	// $facebook = App\Models\Facebook::find(1);
	$instagram = App\Models\Instagram::find(1);
	$twitter = App\Models\Twitter::find(1);
	$first_contact = App\Models\Firstnumber::find(1);
	$second_contact = App\Models\Secondnumber::find(1);

	@endphp

	<div class="container">
		<div class="row pt-5 text-white">
			<div class="col-md-3">
				<h3>Working Hours & Days</h3>
				<p>8am - 8pm</p>
				<p>Mondays - Saturdays</p>
				<div class="mt-3">
					<img src="{{ asset('frontend/assets/img/logo/BMan-v2-Green.png') }}" alt="">
				</div>
			</div>

			<div class="col-md-3">
				<h3>Quick Links</h3>
				<div class="mt-3">
					<div class="mt-3 mb-3"><a href="{{ url('/') }}" class="text-white">Home</a></div>
					<div class="mt-3 mb-3"><a href="{{ url('/ecurrency') }}" class="text-white">E-currency</a></div>
					<div class="mt-3 mb-3"><a href="{{ url('/data_plans') }}" class="text-white">Data plans</a></div>
					<div class="mt-3 mb-3"><a href="https://wa.me/2348030959780" target="_blank" class="text-white">Contact</a></div>
				</div>
			</div>

			<div class="col-md-2">
				<h3>Contact Us</h3>

				<p><a href="mailto:info@bmanservices.com.ng" class="text-white">info@bmanservices.com.ng</a></p>

				<p>For Data plans</p>
				<p>{{ $first_contact->first_number }}</p>

				<p>For E-currency</p>
				<p>{{ $second_contact->second_number }}</p>
			</div>

			<div class="col-md-2">
				<h3>Visit Our Page</h3>
				<div class="mt-3">
					<a class="text-decoration-none text-white" href="{{ $twitter->twitter_link }}" target="_blank">
						<i class="fa-brands fa-twitter fa-xl mx-2"></i>
					</a>
					{{-- <a class="text-decoration-none text-white" href="{{ $facebook->facebook_link }}" target="_blank">
						<i class="fa-brands fa-facebook fa-xl mx-2"></i>
					</a> --}}
					<a class="text-decoration-none text-white" href="{{ $instagram->instagram_link }}" target="_blank">
						<i class="fa-brands fa-instagram fa-xl mx-2"></i>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<h3>Address</h3>
				<address>3<sup>rd</sup> Floor, The Garnet Building, lekki epe express Rd, Lagos.</address>
			</div>
		</div>

		<hr class="bg-white">

		<div class="text-center text-white">
			Copyright &copy; <script>document.write(new Date().getFullYear())</script> Bmandigitalservices - All Rights Reserved
		</div>
	</div>
</footer>