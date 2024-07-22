<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS --> 
        @include('includes.css')
		
        <!-- Title -->
        <title>AVO Logistics - Teams</title>
    </head>
    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- End Preloader Area -->

		<!-- Start Header Area -->
		@include('includes.header')
		<!-- End Header Area -->

		<!-- Start Sidebar Modal -->
		@include('includes.sidebar')
		<!-- End Sidebar Modal -->

		<!-- Start Search Box Modal -->
		<div class="search-wrap">
			<div class="search">
				<button type="button" class="close">×</button>
				<form>
					<input type="search" value="" class="form-control" placeholder="Type Here..." />
					<button type="submit" class="default-btn">
						Search
					</button>
				</form>
			</div>
		</div>
        <!-- End Search Box Modal -->

		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1 jarallax"  data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="page-title-content">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<h2>Team</h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="{{ url('/') }}">
										Home 
									</a>
								</li>
								<li>Team</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Team Area -->
		<section class="team-area ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Our Team</span>
					<h2>Meet the Experts Behind AVO Logistics</h2>
					<p>At AVO Logistics, our team of dedicated professionals is committed to delivering exceptional logistics solutions. With years of experience and a passion for excellence, we work tirelessly to ensure your logistics needs are met efficiently and effectively.</p>
				</div>				
				<div class="row">
					@foreach($teams as $team)
						<div class="col-lg-4 col-sm-6">
							<div class="single-team">
								<img src="{{ $team->image ? asset('storage/' . $team->image) : asset('frontend/assets/img/default.jpg') }}" alt="Image">
								<div class="team-content">
									<h3>{{ $team->name }}</h3>
									<span>{{ $team->position }}</span>
								</div>
								<ul>
									@if($team->facebook)
									<li>
										<a href="{{ $team->facebook }}" target="_blank">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>
									@endif
									@if($team->twitter)
									<li>
										<a href="{{ $team->twitter }}" target="_blank">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									@endif
									@if($team->instagram)
									<li>
										<a href="{{ $team->instagram }}" target="_blank">
											<i class="bx bxl-instagram"></i>
										</a>
									</li>
									@endif
									@if($team->linkedin)
									<li>
										<a href="{{ $team->linkedin }}" target="_blank">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
									@endif
								</ul>
							</div>
						</div>
						@endforeach
					
					<div class="col-lg-12">
						<div class="page-navigation-area">
							<nav aria-label="Page navigation example text-center">
								{{ $teams->links('pagination::bootstrap-5') }}
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Area -->

		<!-- Start Subscribe Area -->
		<div class="subscribe-area ptb-100">
			<div class="container">
			
			</div>
		</div>
		<!-- End Subscribe Area -->

		<!-- Start Footer Bottom Area -->
		@include('includes.footer')
		<!-- End Footer Bottom Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- End Go Top Area --> 

        
        <!-- Jquery Min JS -->
        @include('includes.script')
    </body>
</html>