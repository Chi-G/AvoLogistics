<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        @include('includes.css')

        <!-- Title -->
        <title>AVO Logistics - Blog Details</title>
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
							<h2>News Details</h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="{{ url('/') }}">
										Home
									</a>
								</li>
								<li>News Details</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Inner Blog Details Area -->
        <section class="blog-details-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="blog-details-desc">
							<div class="article-image">
								<img src="{{ asset('frontend/assets/img/blog-details/news-details-img.jpg')}}" alt="image">
							</div>

							<div class="article-content">
								<div class="entry-meta">
									<ul>
										<li><span>Posted On:</span> <a href="news-details.html">January 31 , 2024</a></li>
										<li><span>Posted By:</span> <a href="news-details.html">John Anderson</a></li>
									</ul>
								</div>

								<h3>Supply chain visibility to manage transportation</h3>

								<p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit, consectetur.</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>

								<blockquote class="flaticon-quote">
									<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus aliquid praesentium eveniet illum asperiores, quidem, ipsum voluptatum numquam ducimus nisi exercitationem dolorum facilis.</p>
								</blockquote>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>
							</div>

							{{-- <div class="post-navigation">
								<div class="navigation-links">
									<div class="nav-previous">
										<a href="news-details.html"><i class='bx bx-left-arrow-alt'></i> Prev Post</a>
									</div>

									<div class="nav-next">
										<a href="news-details.html">Next Post <i class='bx bx-right-arrow-alt'></i></a>
									</div>
								</div>
							</div> --}}
						</div>
					</div>

					<div class="col-lg-4 col-md-12">
						<aside class="widget-area" id="secondary">
							<div class="widget widget_search">
								<h3 class="widget-title">Search Now</h3>
								<div class="post-wrap">
									<form class="search-form">
										<label>
											<span class="screen-reader-text">Search for:</span>
											<input type="search" class="search-field" placeholder="Search...">
										</label>
										<button type="submit"><i class='bx bx-search'></i></button>
									</form>
								</div>
							</div>

							<section class="widget widget_categories">
								<h3 class="widget-title">Categories</h3>
								<div class="post-wrap">
									<ul>
										<li>
											<a href="#">Delivery <span>(10)</span></a>
										</li>
										<li>
											<a href="#">Engineering <span>(20)</span></a>
										</li>
										<li>
											<a href="#">Transport <span>(10)</span></a>
										</li>
										<li>
											<a href="#">Air Flight <span>(12)</span></a>
										</li>
										<li>
											<a href="#">Road Flight <span>(16)</span></a>
										</li>
									</ul>
								</div>
							</section>

							<section class="widget widget_tag_cloud">
								<h3 class="widget-title">Tags</h3>
								<div class="post-wrap">
									<div class="tagcloud">
										<a href="#">Transport (3)</a>
										<a href="#">Delivery (3)</a>
										<a href="#">Engineering (2)</a>
										<a href="#">Transport (2)</a>
										<a href="#">Air Flight (1)</a>
										<a href="#">Road Flight (1)</a>
										<a href="#">Prevoz (1)</a>
									</div>
								</div>
							</section>
						</aside>
					</div>
				</div>
			</div>
		</section>
		<!-- End Inner Blog Details Area -->

		<!-- Start Subscribe Area -->
		{{-- <div class="subscribe-area ptb-100">
			<div class="container">
				<div class="section-title white-title">
					<h2>Subscribe for the latest newsletter</h2>
				</div>
				<div class="tracking-body">
					<form class="tracking-wrap newsletter-form" data-toggle="validator">
						<input type="email" class="input-tracking" placeholder="Your Email" name="EMAIL" required autocomplete="off">

						<button class="default-btn active" type="submit">
							Subscribe
						</button>

						<div id="validator-newsletter" class="form-result"></div>
					</form>
				</div>
			</div>
		</div> --}}
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
