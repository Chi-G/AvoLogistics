<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        @include('includes.css')

        <!-- Title -->
        <title>AVO Logistics - News</title>
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
							<h2>News Grid</h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="{{ url('/') }}">
										Home
									</a>
								</li>
								<li>News Grid</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Blog Area -->
		<section class="blog-area blog-inner-area ptb-100">
			<div class="container">
				<div class="section-title">
					<span>News & Blog</span>
					<h2>Stay Updated with the Latest News and Insights</h2>
					<p>Welcome to our News & Blog section, where you can find the latest updates, industry trends, and expert insights from AVO Logistics. Stay informed about our services, achievements, and future plans as we continue to innovate and excel in the logistics sector.</p>
				</div>
				<div class="row">
					@foreach ($blogs as $blog)
						<div class="col-lg-4 col-md-6">
							<div class="single-blog">
								<a href="{{ route('blogs.show', ['blog' => $blog->id]) }}">
									<img src="{{ $blog->image_sm ? asset('storage/' . $blog->image_sm) : asset('backend/assets/img/default.jpg') }}" alt="{{ $blog->image_sm }}">
								</a>
								<div class="blog-content">
									<ul>
										<li>
											<a href="{{ route('blogs.show', ['blog' => $blog->id]) }}">By: Jon Smith</a>
										</li>
										<li>Delivery</li>
										<li>{{ $blog->created_at->format('d M, Y') }}</li>
									</ul>
									<h3>
										<a href="{{ route('blogs.show', ['blog' => $blog->id]) }}">
											{{ $blog->blog_title }}
										</a>
									</h3>
									<p>{{ $blog->blog_short_desc }}</p>
									<a class="read-more" href="{{ route('blogs.show', ['blog' => $blog->id]) }}">
										Read More
										<i class='bx bx-right-arrow-alt'></i>
									</a>
								</div>
							</div>
						</div>
					@endforeach

					<div class="col-lg-12">
						<div class="page-navigation-area">
							{{ $blogs->links('pagination::bootstrap-5') }}

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

        <hr>

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
