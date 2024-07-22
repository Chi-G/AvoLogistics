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
									<img src="{{ asset('frontend/assets/img/blog/14.jpg')}}" alt="Image">
								</a>
								<div class="blog-content">
									<ul>
										<li>
											<a href="{{ route('blogs.show', ['blog' => $blog->id]) }}">By: Jon Smith</a>
										</li>
										<li>Delivery</li>
										<li>jan 30, 2024</li>
									</ul>
									<h3>
										<a href="{{ route('blogs.show', ['blog' => $blog->id]) }}">
											{{ $blog->title }}
										</a>
									</h3>
									<p>{{ $blog->excerpt }}</p>
									<a class="read-more" href="{{ route('blogs.show', ['blog' => $blog->id]) }}">
										Read More
										<i class='bx bx-right-arrow-alt'></i>
									</a>
								</div>
							</div>
						</div>
					@endforeach
					{{-- <div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/15.jpg')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: Amith klev</a>
									</li>
									<li>Delivery</li>
									<li>Feb 5, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Deliveries Logistics Expands Service to West 
									</a>
								</h3>
								<p>Lorem, ipsum dolor ipsum sit amet consectetur adipisicing elit. vel odio impedit reiciendis, eligendi.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div> --}}
					{{-- <div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/16.jpg')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: joney jai</a>
									</li>
									<li>Transport</li>
									<li>Feb 10, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Software May Be Best Bet to Conquer Final Mile
									</a>
								</h3>
								<p>Lorem, ipsum dolor ipsum sit amet consectetur adipisicing elit. vel odio impedit reiciendis, eligendi.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div> --}}
					
					{{-- <div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/7.jpg')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: Amith klev</a>
									</li>
									<li>Delivery</li>
									<li>Feb 6, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Importers Achieve Cost Savings Through The First Sale Rule! 
									</a>
								</h3>
								<p>Lorem, ipsum dolor ipsum sit amet consectetur adipisicing elit. vel odio impedit reiciendis, eligendi.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div> --}}
					{{-- <div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/8.jpg')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: Amith klev</a>
									</li>
									<li>Delivery</li>
									<li>Feb 7, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Cargo Flow Through Better Supply Chain Visibility, Control. 
									</a>
								</h3>
								<p>Lorem, ipsum dolor ipsum sit amet consectetur adipisicing elit. vel odio impedit reiciendis, eligendi.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div> --}}
					{{-- <div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/9.jpg')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: Amith klev</a>
									</li>
									<li>Delivery</li>
									<li>Feb 8, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Importance Of Specialized Focus In Projects, Oil & Gas Logistics? 
									</a>
								</h3>
								<p>Lorem, ipsum dolor ipsum sit amet consectetur adipisicing elit. vel odio impedit reiciendis, eligendi.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div> --}}
					{{-- <div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/10.jpg')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: Amith klev</a>
									</li>
									<li>Delivery</li>
									<li>Feb 9, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										The New Driver Training & Recruitment Program 
									</a>
								</h3>
								<p>Lorem, ipsum dolor ipsum sit amet consectetur adipisicing elit. vel odio impedit reiciendis, eligendi.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div> --}}
					{{-- <div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/11.jpg')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: Amith klev</a>
									</li>
									<li>Delivery</li>
									<li>Feb 10, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										New Additions To Our Great Metro Trucks Fleet 
									</a>
								</h3>
								<p>Lorem, ipsum dolor ipsum sit amet consectetur adipisicing elit. vel odio impedit reiciendis, eligendi.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div> --}}
					{{-- <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/12.jpg')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: Amith klev</a>
									</li>
									<li>Delivery</li>
									<li>Feb 11, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										The New Driver Training & Recruitment Program 
									</a>
								</h3>
								<p>Lorem, ipsum dolor ipsum sit amet consectetur adipisicing elit. vel odio impedit reiciendis, eligendi.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div> --}}
					<div class="col-lg-12">
						<div class="page-navigation-area">
							{{ $blogs->links('pagination::bootstrap-5') }}
							{{-- <nav aria-label="Page navigation example text-center">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link page-links" href="news-full-width.html">
											<i class='bx bx-chevrons-left'></i>
										</a>
									</li>
									<li class="page-item active">
										<a class="page-link" href="news-full-width.html">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="news-full-width.html">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="news-full-width.html">3</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="news-full-width.html">
											<i class='bx bx-chevrons-right'></i>
										</a>
									</li>
								</ul>
							</nav> --}}
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

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