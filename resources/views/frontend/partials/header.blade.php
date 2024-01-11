<header>
	<nav class="navbar navbar-expand-md bg-white navbar-light shadow-sm fixed-top">
		<div class="container">
			<a href="{{ url('/') }}" class="navbar-brand">
				<img src="{{ asset('frontend/assets/img/logo/BMan-v2-Green.png') }}" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menulist">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menulist">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="{{ url('/ecurrency') }}" class="nav-link">E-currency</a></li>
					<li class="nav-item"><a href="{{ url('/data_plans') }}" class="nav-link">Data plans</a></li>
					<li class="nav-item">
						<a href="https://wa.me/2348030959780" target="_blank" class="nav-link">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>