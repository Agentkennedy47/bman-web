@extends('frontend.main_master')

@section('main')

<h1 class="text-center text-secondary title">Data Plans</h1>
<p class="text-center text-secondary context">Affordable data bundles for all networks in Nigeria.<br>We sell the best data rates.</p>

<section>

	@php

	$mtnData = App\Models\MTN::latest()->get();
	$airtelData = App\Models\Airtel::latest()->get();
	$gloData = App\Models\Glo::latest()->get();
	$mobileData = App\Models\Mobile::latest()->get();

	@endphp

	<div class="container">
		<!-- First row -->
		<div class="row d-flex justify-content-center my-4">
			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header text-center bg-warning">
						<span class="h2 px-3">MTN</span>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center table-striped">
							<thead>
								<tr>
									<th>Data</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>

								@foreach($mtnData as $item)

								<tr>
									<td>{{ $item->mtn_data }}</td>
									<td><span>&#8358;</span>{{ $item->mtn_price }}</td>
								</tr>

								@endforeach

							</tbody>
						</table>
					</div>
					<div class="card-footer text-center text-muted">
						<p>1 Month Validity (30 days) <br> To check data balance dial</p>
						<span><sup>*</sup>461<sup>*</sup>4# or <sup>*</sup>131<sup>*</sup>4# </span>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header text-center bg-danger text-white">
						<span class="h2 px-3">Airtel</span>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center table-striped">
							<thead>
								<tr>
									<th>Data</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>

								@foreach($airtelData as $item)

								<tr>
									<td>{{ $item->airtel_data }}</td>
									<td><span>&#8358;</span>{{ $item->airtel_price }}</td>
								</tr>

								@endforeach

							</tbody>
						</table>
					</div>
					<div class="card-footer text-center text-muted">
						<p>1 Month Validity (30 days) <br> To check data balance dial</p>
						<span><sup>*</sup>140#</span>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header text-center bg-success text-white">
						<span class="h2 px-3">Glo</span>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center table-striped">
							<thead>
								<tr>
									<th>Data</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>

								@foreach($gloData as $item)

								<tr>
									<td>{{ $item->glo_data }}</td>
									<td><span>&#8358;</span>{{ $item->glo_price }}</td>
								</tr>

								@endforeach

							</tbody>
						</table>
					</div>
					<div class="card-footer text-center text-muted">
						<p>1 Month Validity (30 days) <br> To check data balance dial</p>
						<span><sup>*</sup>127<sup>*</sup>0#</span>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header text-center" style="background-color: green; color: white;">
						<span class="h2 px-3">9mobile</span>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center table-striped">
							<thead>
								<tr>
									<th>Data</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>

								@foreach($mobileData as $item)

								<tr>
									<td>{{ $item->mobile_data }}</td>
									<td><span>&#8358;</span>{{ $item->mobile_price }}</td>
								</tr>

								@endforeach

							</tbody>
						</table>
					</div>
					<div class="card-footer text-center text-muted">
						<p>1 Month Validity (30 days) <br> To check data balance dial</p>
						<span><sup>*</sup>229<sup>*</sup>9# or <sup>*</sup>228# </span>
					</div>
				</div>
			</div>
		</div>
		<!-- End first row -->
	</div>
</section>

@endsection