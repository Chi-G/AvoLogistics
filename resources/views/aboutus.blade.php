<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        @include('includes.css')

        <!-- Title -->
        <title>AVO Logistics - About Us</title>
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
							<h2>About Us</h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="{{ url('/') }}">
										Home
									</a>
								</li>
								<li>About Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start About Area -->
		<section class="about-area ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-img">
							<img src="{{ asset('frontend/assets/img/about-img.jpg')}}" alt="Image">
							<div class="about-quatre">
								<i class="bx bxs-quote-alt-left bx-tada"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content ml-30">
							<span>About Us</span>
							<h2>Leading Logistics and Transport Solutions Provider</h2>
							<p>AVO Logistics is dedicated to providing reliable and express logistics and transport solutions. Our commitment to excellence ensures that we do not waste your valuable time. Our services are designed to meet your unique needs and help you achieve your business goals efficiently and effectively.</p>
							<p>We are equipped with a team of highly skilled professionals who are passionate about delivering exceptional services. From our humble beginnings, we have grown into a trusted partner for businesses across various industries, offering customized solutions that ensure timely and safe delivery of your goods.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Area -->

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

		<!-- Start About Area -->
		<section class="about-area about-area-two ptb-100">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-content">
							<span>Know About Us</span>
							<h2>Reliable and express logistics and transport solutions that do not waste your time!</h2>
							<p class="mb-2">AVO Logistics is committed to providing reliable, efficient, and express logistics and transport solutions. Our expert team ensures timely delivery and exceptional service quality, tailored to meet your specific needs.</p>
							<p>We specialize in a variety of logistics services, including air, sea, and land transportation, warehousing, and supply chain management. Our goal is to offer comprehensive solutions that drive success and satisfaction for our clients.</p>
						</div>
					</div>
					<div class="col-lg-6 pr-0">
						<div class="about-img inner-about-img">
							<div class="about-list">
								<h3>Our Prime priorities:</h3>
								<ul>
									<li>
										<i class="flaticon-checked"></i>
										Customer and employee solutions are time-consuming.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										We accomplish our goals more efficiently.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										Transparent Communication Collaboration properly do.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										It provides a road map to increased productivity.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										Providing independent advice for you.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										24/7 support system available
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Area -->

		<!-- Start Counter Area -->
		<section class="counter-area counter-area-two pt-100 pb-70 jarallax"  data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-box"></i>
							<h2>
								<span class="odometer" data-count="1845">00</span> <span class="traget">K</span>
							</h2>
							<p>Delivered Packages</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-support"></i>
							<h2>
								<span class="odometer" data-count="1000">00</span> <span class="traget">K</span>
							</h2>
							<p>Satisfied Clients</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-product-realise"></i>
							<h2>
								<span class="odometer" data-count="4586">00</span> <span class="traget">M</span>
							</h2>
							<p>Tons of Goods</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter Area -->

		<!-- Start Brand Area -->
		<div class="brand-area pt-70 pb-70">
			<div class="container">
				<div class="row">
					<div class="brand-wrap owl-carousel owl-theme">
						<div class="brand-item">
							<a href="about.html">
								<img src="{{ asset('frontend/assets/img/brand/1.png')}}" alt="Image">
							</a>
						</div>
						<div class="brand-item">
							<a href="about.html">
								<img src="{{ asset('frontend/assets/img/brand/2.png')}}" alt="Image">
							</a>
						</div>
						<div class="brand-item">
							<a href="about.html">
								<img src="{{ asset('frontend/assets/img/brand/3.png')}}" alt="Image">
							</a>
						</div>
						<div class="brand-item">
							<a href="about.html">
								<img src="{{ asset('frontend/assets/img/brand/4.png')}}" alt="Image">
							</a>
						</div>
						<div class="brand-item">
							<a href="about.html">
								<img src="{{ asset('frontend/assets/img/brand/5.png')}}" alt="Image">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Brand Area -->

		<!-- Start Fun Facts Area -->
        <section class="fun-facts-area pb-100">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-6">
                       <div class="facts-img"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-bar-wrapper">
                            <div class="fun-facts-content">
                                <span>Fun Facts</span>
                                <h2>Providing A Range Of High Services & Solutions Worldwide</h2>
                            </div>
                            <div class="skill-bar" data-percentage="95%">
                                <h4 class="progress-title-holder">
                                    <span class="progress-title">Warehousing</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>
                            <div class="skill-bar" data-percentage="90%">
                                <h4 class="progress-title-holder clearfix">
                                    <span class="progress-title">Supply Chain</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>

                            <div class="skill-bar" data-percentage="80%">
                                <h4 class="progress-title-holder clearfix">
                                    <span class="progress-title">Road Freight</span>
                                    <span class="progress-number-wrapper">
                                        <span class="progress-number-mark">
                                            <span class="percent"></span>
                                            <span class="down-arrow"></span>
                                        </span>
                                    </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
			</div>
			<div class="lines">
				<div class="line-two"></div>
				<div class="line-two"></div>
				<div class="line-two"></div>
			</div>
        </section>
        <!-- End Fun Facts Area -->

		<!-- Start Subscribe Area -->
		{{-- <hr> --}}
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
