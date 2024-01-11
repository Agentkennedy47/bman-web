@extends('frontend.main_master')

@section('main')

<h1 class="text-center text-secondary title">E-currencies Rate</h1>
<p class="text-center text-secondary context">Buy and sell e-currencies and cryptocurrencies such as Bitcoin, Ethereum, <br> Paypal, Perfect Money etc.</p>

<section>

	@php

	$bitcoinPage = App\Models\Bitcoin::find(1);
	$usdtPage = App\Models\USDT::find(1);
	$perfectmoneyPage = App\Models\Perfectmoney::find(1);
	$ethereumPage = App\Models\Ethereum::find(1);
	$bitcoincashPage = App\Models\BitcoinCash::find(1);
	$bnbPage = App\Models\BNB::find(1);

	@endphp


	<div class="container">
		<!-- First row -->
		<div class="row d-flex justify-content-center my-4">
			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header d-flex justify-content-center align-items-center">
						<span class="h3 px-3">Bitcoin</span>
						<svg id="svg2" preserveAspectRatio="xMidYMid" version="1.1" viewBox="0 0 1 1" width="30px" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs4"><filter color-interpolation-filters="sRGB" id="_drop-shadow"><feGaussianBlur id="feGaussianBlur7" in="SourceAlpha" result="blur-out" stdDeviation="1"/><feBlend id="feBlend9" in="SourceGraphic" in2="blur-out" mode="normal"/></filter><linearGradient id="coin-gradient" x1="0%" x2="0%" y1="0%" y2="100%"><stop id="stop12" offset="0%" style="stop-color:#f9aa4b"/><stop id="stop14" offset="100%" style="stop-color:#f7931a"/></linearGradient></defs><g id="g16" transform="scale(0.015625)"><path d="m 63.0359,39.741 c -4.274,17.143 -21.637,27.576 -38.782,23.301 -17.138,-4.274 -27.571,-21.638 -23.295,-38.78 4.272,-17.145 21.635,-27.579 38.775,-23.305 17.144,4.274 27.576,21.64 23.302,38.784 z" id="coin" style="fill:url(#coin-gradient)"/><path d="m 46.1009,27.441 c 0.637,-4.258 -2.605,-6.547 -7.038,-8.074 l 1.438,-5.768 -3.511,-0.875 -1.4,5.616 c -0.923,-0.23 -1.871,-0.447 -2.813,-0.662 l 1.41,-5.653 -3.509,-0.875 -1.439,5.766 c -0.764,-0.174 -1.514,-0.346 -2.242,-0.527 l 0.004,-0.018 -4.842,-1.209 -0.934,3.75 c 0,0 2.605,0.597 2.55,0.634 1.422,0.355 1.679,1.296 1.636,2.042 l -1.638,6.571 c 0.098,0.025 0.225,0.061 0.365,0.117 -0.117,-0.029 -0.242,-0.061 -0.371,-0.092 l -2.296,9.205 c -0.174,0.432 -0.615,1.08 -1.609,0.834 0.035,0.051 -2.552,-0.637 -2.552,-0.637 l -1.743,4.019 4.569,1.139 c 0.85,0.213 1.683,0.436 2.503,0.646 l -1.453,5.834 3.507,0.875 1.439,-5.772 c 0.958,0.26 1.888,0.5 2.798,0.726 l -1.434,5.745 3.511,0.875 1.453,-5.823 c 5.987,1.133 10.489,0.676 12.384,-4.739 1.527,-4.36 -0.076,-6.875 -3.226,-8.515 2.294,-0.529 4.022,-2.038 4.483,-5.155 z m -8.022,11.249 c -1.085,4.36 -8.426,2.003 -10.806,1.412 l 1.928,-7.729 c 2.38,0.594 10.012,1.77 8.878,6.317 z m 1.086,-11.312 c -0.99,3.966 -7.1,1.951 -9.082,1.457 l 1.748,-7.01 c 1.982,0.494 8.365,1.416 7.334,5.553 z" id="symbol" style="fill:#ffffff"/></g></svg>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>Buy</th>
									<th>Sell</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span>&#8358;</span>{{ $bitcoinPage->bitcoin_buy }} / &#36;</td>
									<td><span>&#8358;</span>{{ $bitcoinPage->bitcoin_sell }} / &#36;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header d-flex justify-content-center align-items-center">
						<span class="h3 px-3">USDT</span>
						<svg width="30px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 339.43 295.27"><title>tether-usdt-logo</title><path d="M62.15,1.45l-61.89,130a2.52,2.52,0,0,0,.54,2.94L167.95,294.56a2.55,2.55,0,0,0,3.53,0L338.63,134.4a2.52,2.52,0,0,0,.54-2.94l-61.89-130A2.5,2.5,0,0,0,275,0H64.45a2.5,2.5,0,0,0-2.3,1.45h0Z" style="fill:#50af95;fill-rule:evenodd"/><path d="M191.19,144.8v0c-1.2.09-7.4,0.46-21.23,0.46-11,0-18.81-.33-21.55-0.46v0c-42.51-1.87-74.24-9.27-74.24-18.13s31.73-16.25,74.24-18.15v28.91c2.78,0.2,10.74.67,21.74,0.67,13.2,0,19.81-.55,21-0.66v-28.9c42.42,1.89,74.08,9.29,74.08,18.13s-31.65,16.24-74.08,18.12h0Zm0-39.25V79.68h59.2V40.23H89.21V79.68H148.4v25.86c-48.11,2.21-84.29,11.74-84.29,23.16s36.18,20.94,84.29,23.16v82.9h42.78V151.83c48-2.21,84.12-11.73,84.12-23.14s-36.09-20.93-84.12-23.15h0Zm0,0h0Z" style="fill:#fff;fill-rule:evenodd"/></svg>
					</div>
					<div class="card-body d-flex">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>Buy</th>
									<th>Sell</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span>&#8358;</span>{{ $usdtPage->usdt_buy }} / &#36;</td>
									<td><span>&#8358;</span>{{ $usdtPage->usdt_sell }} / &#36;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header">
						<span class="h2 px-3">Perfect Money</span>
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" viewBox="0 0 480.6 480.6" version="1.1">
						<g id="surface1">
						<path style=" stroke:none;fill-rule:evenodd;fill:rgb(94.139099%,6.272888%,6.272888%);fill-opacity:1;" d="M 240.335938 -0.03125 C 373.035156 -0.03125 480.609375 107.539063 480.609375 240.238281 C 480.609375 372.9375 373.035156 480.507813 240.335938 480.507813 C 107.640625 480.507813 0.0664063 372.9375 0.0664063 240.238281 C 0.0664063 107.539063 107.640625 -0.03125 240.335938 -0.03125 Z M 240.335938 -0.03125 "/>
						<path style=" stroke:none;fill-rule:evenodd;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 230.105469 162.34375 L 209.75 162.34375 C 206.417969 161.964844 202.347656 161.964844 198.28125 161.601563 C 197.175781 161.964844 196.792969 163.089844 196.421875 164.566406 C 196.054688 166.050781 196.421875 167.160156 197.175781 168.265625 L 201.613281 168.640625 C 207.152344 169.738281 211.222656 170.851563 213.828125 171.972656 C 216.410156 173.445313 218.253906 176.039063 219.003906 179.371094 C 219.742188 182.703125 220.109375 187.136719 219.742188 192.695313 C 219.363281 200.464844 219.003906 209.710938 218.632813 220.445313 C 218.253906 231.191406 217.519531 242.289063 216.773438 253.769531 C 216.042969 271.515625 214.449219 314.753906 209.625 327.554688 C 208.507813 330.515625 206.664063 332.371094 204.441406 333.496094 C 201.84375 334.589844 198.871094 335.703125 195.171875 336.085938 L 189.234375 336.824219 C 188.128906 337.554688 187.753906 338.679688 188.128906 340.53125 C 188.128906 341.644531 188.496094 342.746094 189.609375 343.863281 C 194.421875 343.496094 198.871094 343.121094 203.691406 342.746094 L 232.980469 342.746094 C 238.53125 343.121094 243.355469 343.496094 247.800781 343.863281 C 248.917969 343.121094 249.65625 342.011719 249.65625 340.53125 C 249.65625 339.039063 249.289063 337.933594 248.167969 336.824219 L 237.796875 336.085938 C 234.453125 335.703125 231.859375 334.96875 230.011719 333.496094 C 229.082031 332.742188 228.335938 331.710938 227.78125 330.453125 C 225.59375 325.191406 225.546875 316.289063 225.660156 310.761719 C 225.898438 299.289063 226.039063 287.820313 226.402344 276.34375 C 226.773438 264.871094 227.144531 254.867188 227.507813 246.359375 C 227.867188 238.589844 228.628906 230.4375 228.988281 222.296875 C 229.359375 214.164063 229.722656 206.011719 230.105469 197.871094 L 230.839844 197.871094 C 233.804688 204.160156 236.769531 210.453125 239.359375 217.484375 C 242.324219 224.152344 245.28125 230.816406 248.234375 237.113281 L 273.035156 290.023438 C 275.269531 294.480469 277.851563 300.03125 280.804688 306.691406 C 284.144531 313.722656 287.464844 320.378906 290.433594 327.039063 C 292 330.566406 293.355469 333.871094 294.503906 336.980469 C 294.800781 336.980469 296.875 343.800781 297.105469 344.59375 C 298.53125 346.039063 300.867188 346.003906 302.296875 344.59375 C 304.597656 339.078125 307 333.496094 309.675781 328.160156 C 316.6875 312.425781 324 297.398438 332.257813 282.265625 L 356.316406 234.519531 C 358.171875 230.4375 360.015625 225.996094 362.605469 221.191406 C 365.199219 216.011719 367.785156 211.199219 370.011719 207.128906 C 371.859375 202.683594 373.335938 199.726563 374.070313 198.613281 L 374.445313 198.613281 L 375.195313 312.992188 C 375.554688 318.90625 375.195313 323.328125 374.824219 326.664063 C 374.527344 329.3125 373.78125 331.828125 371.238281 333.121094 C 369.746094 334.96875 366.785156 335.703125 361.96875 336.085938 L 353.8125 336.824219 C 353.070313 337.554688 352.703125 338.679688 353.070313 340.53125 C 353.070313 341.644531 353.445313 342.746094 354.5625 343.863281 C 360.113281 343.496094 366.035156 343.121094 371.597656 342.746094 L 403.484375 342.746094 C 409.035156 343.121094 414.59375 343.496094 420.167969 343.863281 C 421.28125 343.121094 421.644531 342.011719 421.644531 340.53125 C 422.011719 339.039063 421.644531 337.933594 420.90625 336.824219 L 412.007813 336.085938 C 407.929688 335.703125 404.964844 334.589844 403.101563 332.738281 C 401.269531 330.890625 399.78125 328.664063 399.410156 325.699219 C 399.03125 322.371094 398.660156 318.28125 398.660156 313.839844 C 397.902344 300.070313 397.386719 286.078125 397.027344 272.277344 C 396.652344 257.453125 395.910156 243.402344 395.546875 230.089844 L 395.546875 194.914063 C 395.546875 188.621094 395.910156 183.8125 396.652344 180.105469 C 397.40625 176.78125 399.253906 173.824219 401.835938 171.972656 C 404.433594 170.492188 408.867188 169.371094 414.789063 168.640625 L 420.347656 168.265625 C 421.09375 167.523438 421.457031 166.414063 421.09375 164.566406 C 421.09375 163.449219 420.71875 162.34375 419.980469 161.601563 C 415.535156 161.964844 411.089844 161.964844 407.023438 162.34375 L 387.039063 162.34375 C 383.699219 161.964844 379.992188 161.964844 375.195313 161.601563 C 374.824219 167.882813 372.601563 174.929688 369.269531 183.074219 C 365.199219 191.570313 360.394531 201.953125 354.472656 214.164063 L 328.554688 266.34375 C 321.835938 280.550781 315.714844 294.070313 307.480469 307.539063 L 306.742188 307.539063 C 300.191406 295.179688 294.152344 282.355469 288.210938 269.683594 L 256.757813 206.753906 C 252.691406 197.871094 248.984375 189.367188 246.023438 181.59375 C 243.429688 173.824219 242.324219 167.160156 242.691406 161.601563 C 238.253906 161.964844 234.175781 161.964844 230.105469 162.34375 Z M 78.234375 303.039063 C 78.234375 312.464844 77.863281 319.640625 77.109375 324.554688 C 76.363281 334.070313 70.082031 337.1875 61.226563 337.796875 L 55.554688 338.550781 C 53.730469 340.382813 53.871094 344.351563 55.949219 345.722656 C 67.644531 344.996094 78.21875 344.585938 89.953125 344.585938 C 102.464844 344.585938 114.128906 345.136719 126.601563 345.722656 C 127.355469 344.96875 127.746094 343.835938 128.121094 342.328125 C 128.121094 340.441406 127.746094 339.296875 126.984375 338.550781 L 119.425781 337.796875 C 113.378906 337.40625 109.226563 336.273438 106.960938 334.382813 C 106.824219 334.285156 106.6875 334.183594 106.554688 334.078125 C 104.269531 332.179688 102.632813 329.28125 101.945313 324.789063 C 101.195313 319.882813 100.816406 312.71875 101.195313 303.304688 L 101.195313 276.871094 C 92.890625 277.253906 85.347656 276.871094 78.550781 275.742188 Z M 54.019531 165.195313 C 53.648438 166.699219 54.40625 167.828125 55.539063 168.96875 L 65.351563 170.085938 C 69.496094 170.476563 72.519531 171.601563 74.402344 173.492188 C 76.285156 174.996094 77.425781 177.644531 77.796875 181.789063 C 78.179688 185.9375 78.550781 191.988281 78.550781 199.898438 L 78.550781 255.742188 C 86.097656 256.121094 93.640625 256.121094 101.195313 255.742188 L 101.195313 178.769531 C 100.816406 175.753906 101.195313 173.492188 101.945313 171.601563 C 102.320313 170.476563 103.832031 169.328125 105.714844 168.96875 C 107.980469 168.589844 111.761719 168.589844 116.664063 168.589844 C 130.996094 168.96875 141.941406 172.734375 149.863281 180.660156 C 157.410156 188.574219 161.179688 199.523438 161.179688 213.117188 C 161.570313 225.183594 158.546875 235.371094 152.132813 243.664063 C 146.472656 250.847656 138.171875 256.121094 126.847656 258.761719 C 115.910156 261.40625 100.441406 262.539063 79.683594 262.152344 C 61.570313 261.796875 41.953125 260.65625 20.445313 258.394531 C 44.222656 263.296875 61.949219 266.6875 73.277344 267.816406 C 91.753906 270.09375 109.867188 269.703125 126.847656 267.074219 C 135.523438 265.929688 143.449219 263.675781 150.621094 261.035156 C 157.410156 258.019531 164.207031 253.867188 171.375 248.953125 C 175.523438 245.941406 179.296875 241.019531 182.699219 234.617188 C 185.34375 228.578125 186.847656 221.410156 187.21875 212.726563 C 186.847656 203.289063 184.582031 195.007813 180.4375 187.828125 C 176.28125 180.660156 171.375 174.996094 164.957031 170.859375 C 158.546875 167.078125 150.621094 164.050781 141.566406 162.164063 C 132.886719 160.660156 122.695313 159.902344 111.003906 159.902344 C 99.679688 159.902344 89.492188 159.902344 80.441406 160.277344 C 71.382813 160.660156 63.082031 161.035156 55.90625 161.789063 C 54.78125 162.550781 54.019531 163.679688 54.019531 165.195313 Z M 54.019531 165.195313 "/>
						</g>
						</svg>

					</div>
					<div class="card-body">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>Buy</th>
									<th>Sell</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span>&#8358;</span>{{ $perfectmoneyPage->pm_buy }} / &#36;</td>
									<td><span>&#8358;</span>{{ $perfectmoneyPage->pm_sell }} / &#36;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- End first row -->

		<!-- Second row -->
		<div class="row d-flex justify-content-center my-4">
			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header d-flex justify-content-center align-items-center">
						<span class="h3 px-3">Ethereum</span>
						<svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x31_16-Ethereum"><g><polygon points="256.16,358.909 256.16,472.499 395.646,274.453   " style="fill:#2F3030;"/><polygon points="390.294,264.834 256.16,39.501 256.16,203.346   " style="fill:#2F3030;"/><polygon points="256.16,203.291 256.16,343.114 389.201,264.348   " style="fill:#131313;"/><polygon points="122.078,264.834 256.19,39.501 256.19,203.346   " style="fill:#828384;"/><polygon points="256.19,203.291 256.19,343.114 122.788,264.348   " style="fill:#343535;"/><polygon points="255.83,358.909 255.83,472.499 116.354,274.453   " style="fill:#828384;"/></g></g><g id="Layer_1"/></svg>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>Buy</th>
									<th>Sell</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span>&#8358;</span>{{ $ethereumPage->ethereum_buy }} / &#36;</td>
									<td><span>&#8358;</span>{{ $ethereumPage->ethereum_sell }} / &#36;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header d-flex justify-content-center align-items-center">
						<span class="h3 px-3">Bitcoin Cash</span>
						<svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M481.857,102.698c13.854,0,25.126,11.271,25.126,25.126v257.899c0,13.854-11.271,25.126-25.126,25.126    H30.126C16.272,410.85,5,399.579,5,385.724v-257.9c0-13.854,11.271-25.126,25.126-25.126H481.857 M481.857,97.698H30.126    C13.488,97.698,0,111.186,0,127.824v257.899c0,16.64,13.488,30.126,30.126,30.126h451.731c16.64,0,30.126-13.486,30.126-30.126    V127.824C511.983,111.186,498.496,97.698,481.857,97.698L481.857,97.698z" fill="#F7931A"/></g><g><g><g><path d="M376.466,286.042c-16.59,66.534-83.978,107.026-150.519,90.437      c-66.516-16.59-107.009-83.98-90.412-150.511c16.582-66.541,83.971-107.039,150.494-90.45      C352.563,152.105,393.053,219.503,376.466,286.042z" fill="#F7931A"/><g><g><path d="M310.735,238.304c2.471-16.527-10.11-25.411-27.314-31.337L289,184.579l-13.626-3.396l-5.435,21.797        c-3.583-0.894-7.26-1.736-10.92-2.57l5.471-21.94l-13.618-3.396l-5.585,22.379c-2.964-0.675-5.875-1.342-8.702-2.045        l0.016-0.068l-18.794-4.692l-3.623,14.552c0,0,10.11,2.318,9.898,2.462c5.518,1.38,6.517,5.032,6.35,7.927l-6.358,25.502        c0.379,0.099,0.872,0.235,1.417,0.455c-0.455-0.114-0.94-0.235-1.44-0.356l-8.913,35.724        c-0.675,1.675-2.386,4.192-6.244,3.237c0.136,0.197-9.906-2.471-9.906-2.471l-6.765,15.597l17.732,4.419        c3.297,0.826,6.532,1.69,9.714,2.509l-5.638,22.643l13.612,3.396l5.585-22.402c3.72,1.008,7.328,1.941,10.861,2.818        l-5.564,22.298l13.626,3.396l5.64-22.601c23.236,4.397,40.711,2.623,48.064-18.394c5.926-16.921-0.296-26.683-12.519-33.049        C302.24,256.258,308.947,250.4,310.735,238.304z M279.603,281.965c-4.213,16.923-32.702,7.776-41.94,5.479l7.482-29.996        C254.381,259.751,284.005,264.314,279.603,281.965z M283.816,238.061c-3.842,15.394-27.555,7.571-35.247,5.653l6.783-27.206        C263.043,218.426,287.818,222.004,283.816,238.061z" fill="#FFFFFF"/></g></g></g></g></g></g></svg>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>Buy</th>
									<th>Sell</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span>&#8358;</span>{{ $bitcoincashPage->bitcoin_cash_buy }} / &#36;</td>
									<td><span>&#8358;</span>{{ $bitcoincashPage->bitcoin_cash_sell }} / &#36;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-3 mb-3">
				<div class="card">
					<div class="card-header d-flex justify-content-center align-items-center">
						<span class="h3 px-3">BNB</span>
						<svg width="30px" style="fill: #f7931a;" data-name="Layer 1" id="Layer_1" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><title/><rect height="18.36" transform="translate(-13.86 94.54) rotate(-45)" width="18.36" x="98.02" y="54.82"/><rect height="18.36" transform="translate(-39.16 33.46) rotate(-45)" width="18.36" x="11.63" y="54.82"/><polygon points="64 94.22 42.48 72.7 29.5 85.68 64 120.18 98.5 85.68 85.52 72.7 64 94.22"/><polygon points="64 33.78 85.52 55.3 98.5 42.32 64 7.82 29.5 42.32 42.48 55.3 64 33.78"/><rect height="18.13" transform="translate(-26.51 64) rotate(-45)" width="18.13" x="54.93" y="54.93"/></svg>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>Buy</th>
									<th>Sell</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span>&#8358;</span>{{ $bnbPage->bnb_buy }} / &#36;</td>
									<td><span>&#8358;</span>{{ $bnbPage->bnb_sell }} / &#36;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- End second row -->
	</div>
</section>

@endsection