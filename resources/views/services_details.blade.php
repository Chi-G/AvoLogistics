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
							<h2>Service Detail</h2>
						</div>
						<div class="col-lg-6 col-sm-6">
							<ul>
								<li>
									<a href="{{ url('/') }}">
										Home
									</a>
								</li>
								<li>Service Details</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

        <section class="service-details-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="service-sidebar-area">
                            <div class="service-list service-card">
                                <h3 class="service-details-title">Our Services</h3>
                                <ul>
                                    <li>
                                        Reliable Road Freight
                                        <i class='bx bx-check'></i>
                                    </li>
                                    <li>
                                        Comprehensive Supply Chain Management
                                        <i class='bx bx-check'></i>
                                    </li>
                                    <li>
                                        State-of-the-Art Warehousing
                                        <i class='bx bx-check'></i>
                                    </li>
                                    <li>
                                        Efficient Distribution and Fulfillment
                                        <i class='bx bx-check'></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="service-faq service-card">
                                <h3 class="service-details-title">FAQ</h3>
                                <div class="faq-area">
                                    <div class="questions-bg-area">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="faq-accordion">
                                                    <ul class="accordion">
                                                        <li class="accordion-item">
                                                            <a class="accordion-title active" href="javascript:void(0)">
                                                                <span>1</span>
                                                                How do you ensure the safety of goods during road freight?
                                                            </a>
                                                            <p class="accordion-content show">At Avo Logistics, we prioritize the safety of your goods by using a modern fleet equipped with GPS tracking, ensuring real-time monitoring and security. Our experienced drivers are trained to handle all types of cargo with the utmost care, ensuring your products arrive in perfect condition.</p>
                                                        </li>
                                                        <li class="accordion-item">
                                                            <a class="accordion-title" href="javascript:void(0)">
                                                                <span>2</span>
                                                                What makes your supply chain management services stand out?
                                                            </a>
                                                            <p class="accordion-content">Our supply chain management services are comprehensive, covering everything from procurement to distribution. We use advanced technology and a network of trusted partners to ensure that your supply chain is efficient, cost-effective, and responsive to your business needs.</p>
                                                        </li>
                                                        <li class="accordion-item">
                                                            <a class="accordion-title" href="javascript:void(0)">
                                                                <span>3</span>
                                                                Do you offer temperature-controlled warehousing?
                                                            </a>
                                                            <p class="accordion-content">Yes, Avo Logistics offers temperature-controlled warehousing facilities. We ensure that sensitive products, such as pharmaceuticals and perishables, are stored under optimal conditions to maintain their quality throughout the storage period.</p>
                                                        </li>
                                                        <li class="accordion-item">
                                                            <a class="accordion-title" href="javascript:void(0)">
                                                                <span>4</span>
                                                                How quickly can you distribute goods from your warehouses?
                                                            </a>
                                                            <p class="accordion-content">Our strategic network of warehouses and partnerships with leading carriers allow us to distribute goods quickly and efficiently. Depending on your needs, we can offer same-day dispatch and next-day delivery to most locations, ensuring your products reach their destination without delay.</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

					</div>
                        <div class="col-lg-8">
                            <div class="service-details-wrap">
                                <div class="service-img">
                                    <img src="{{ asset('frontend/assets/img/service-details/service-details-img.jpg') }}" alt="Image">
                                </div>
                                <h2>{{ $service->service_title2 }}</h2>
                                <br>

                                <p>{{ $service->service_desc2 }}</p>

                                <h5>{{ $service->service_title3 }}</h5>
                                <p>{{ $service->service_desc3 }}</p>

                                <h5>{{ $service->service_title4 }}</h5>
                                <p class="mb-30">{{ $service->service_desc4 }}.</p>

                            </div>
                        </div>
				</div>
			</div>
		</section>

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
