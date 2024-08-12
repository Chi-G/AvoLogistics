<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        @include('includes.css')

        <!-- Title -->
        <title>AVO Logistics - Services</title>
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
							<h2>Services</h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="{{ url('/') }}">
										Home
									</a>
								</li>
								<li>Services</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start What We Offer Area -->
		<section class="what-offer-area-two pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-server"></i>
							<h3>Warehousing</h3>
							<p>AVO Logistics offers state-of-the-art warehousing facilities with advanced security and climate control.</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-air-freight"></i>
							<h3>Air Freight</h3>
							<p>Our air freight services ensure timely and efficient delivery of goods across the globe.</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					{{-- <div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-plastic-bottle"></i>
							<h3>Ocean Freight</h3>
							<p>We provide reliable ocean freight solutions for large and small shipments, ensuring safe transit.</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div> --}}
					<div class="col-lg-4 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-street"></i>
							<h3>Road Freight</h3>
							<p>Our road freight services offer comprehensive logistics solutions for domestic and regional deliveries.</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End What We Offer Area -->

		<!-- start Service Area -->
		<section class="service-area service-area-two pb-100">
			<div class="container">
				<div class="section-title">
					<span>We Offer Services </span>
					<h2>Prime logistics services for the world’s logistics companies.</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="icon flaticon-home"></i>
								<h3>Residential Moves</h3>
								<p>Our residential moving services ensure a hassle-free experience for relocating homes.</p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="service-details.html">
									<h3>Residential Moves</h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="icon flaticon-package"></i>
								<h3>Corporate Relocation</h3>
								<p>We offer comprehensive corporate relocation services to ensure smooth transitions for businesses.</p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="service-details.html">
									<h3>Corporate Relocation</h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="icon flaticon-server"></i>
								<h3>Warehouse & Storage</h3>
								<p>Our warehouse and storage services offer secure and efficient storage solutions for various goods.</p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="service-details.html">
									<h3>Warehouse & Storage</h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Service Area -->

        <!-- Start Why Choose Us Area -->
        <section class="choose-us-area">
			<div class="container">
				<div class="section-title">
					<span>Why Choose Us</span>
					<h2>We are best among them</h2>
				</div>
				<div class="row">
					<div class="col-lg-8 pr-0">
						<div class="choose-tab-wrap">
							<h2>Why our Company is best</h2>
							<div class="tab quote-list-tab choose-tab">
								<ul class="tabs">
									<li>
										<a href="javascript:;">
											Our Mission
										</a>
									</li>
									<li>
										<a href="javascript:;">
											Our Vision
										</a>
									</li>
									<li>
										<a href="javascript:;">
											Our Goal
										</a>
									</li>
								</ul>
								<div class="tab_content">
									<div class="tabs_item">
										<p>Our mission is to provide reliable and efficient logistics solutions that exceed customer expectations. We strive to innovate and improve our services to ensure the highest level of satisfaction.</p>

										<p>We are committed to delivering value through our comprehensive range of services, including warehousing, air freight, ocean freight, and road freight, tailored to meet the unique needs of each client.</p>
									</div>

									<div class="tabs_item">
										<p>Our vision is to be the leading logistics company, known for our excellence in service, operational efficiency, and innovative solutions. We aim to create a seamless and integrated logistics experience for our customers worldwide.</p>

										<p>We envision a future where logistics is simplified, and businesses can rely on us for all their transportation needs, allowing them to focus on their core activities and growth.</p>
									</div>

									<div class="tabs_item">
										<p>Our core values guide us in every aspect of our business. We prioritize customer satisfaction, operational integrity, and continuous improvement. Our team is dedicated to providing exceptional service and building long-lasting relationships with our clients.</p>

										<p>We value transparency, accountability, and teamwork. These principles ensure that we deliver on our promises and maintain the trust and loyalty of our customers.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 pl-0">
						<div class="choose-img choose-img-two">
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- End Why Choose Us Area -->

		<!-- Start Fun Facts Area -->
		<section class="fun-facts-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>Facts & Fun</span>
					<h2>We're Some Fun Facts About AVO Logistics</h2>
					<p>Our achievements and milestones highlight our dedication to providing top-notch logistics services.</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-fun-fact">
							<h2>
								<span class="odometer" data-count="20">00</span>
								<span class="sign-icon">+</span>
							</h2>
							<p>Successful Projects</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-fun-fact">
							<h2>
								<span class="odometer" data-count="150">00</span>
								<span class="sign-icon">+</span>
							</h2>
							<p>Satisfied Clients</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-fun-fact">
							<h2>
								<span class="odometer" data-count="5">00</span>
								<span class="sign-icon">+</span>
							</h2>
							<p>Years of Experience</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-fun-fact">
							<h2>
								<span class="odometer" data-count="30">00</span>
								<span class="sign-icon">+</span>
							</h2>
							<p>Team Members</p>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- End Fun Facts Area -->

		<!-- Start Subscribe Area -->
		<hr>
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
