<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="('meta_description', 'avologistics is a leading logistics company specializing in the transportation and delivery of goods.')">
		<meta name="keywords" content="('meta_keywords', 'logistics, goods transportation, avologistics, delivery services')">
		<meta name="og:title" content="avologistics - Leading Logistics Company">
		<meta name="og:description" content="avologistics specializes in the transportation and delivery of goods, providing top-notch logistics services.">
		<meta name="og:type" content="website">
		<meta name="author" content="('meta_author', 'Chijindu Nwokeohuru')">
		<meta name="developer" content="Chijindu Nwokeohuru">
		<meta name="developer-email" content="chijindu.nwokeohuru@gmail.com">

        <!-- Bootstrap Min CSS -->
        @include('includes.css')

        <!--  CUSTOM MODAL FILE  -->
        <link href="{{asset('backend/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />

        <!-- Title -->
        <title>AVO Logistics - Easing the burden</title>
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

		<!-- Start Slider Area -->
		<section class="prevoz-slider-area">
			<div class="prevoz-slider owl-carousel owl-theme">
				@foreach($sliders as $slider)
				<div class="prevoz-slider-item" style="background-image: url('{{ $slider->image ? asset('storage/' . $slider->image) : asset('backend/assets/img/default.jpg') }}');">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="prevoz-slider-text overflow-hidden">
									<h1>{{ $slider->title }}</h1>
									<p>{{ $slider->description }}</p>
									<div class="slider-btn">
										<a class="default-btn active" href="{{ route('services') }}">
											Our Services
										</a>
										<a class="default-btn white" href="#tabs_item">
											Request A Quote
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</section>
		<!-- End Slider Area -->

		<!-- Start Track Area -->
		<section class="track-area mt-minus-70 pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="tab quote-list-tab">
							<ul class="tabs">
								<li>
									<a href="javascript:;">
										<i class="flaticon-truck"></i>
										Request A Quote
									</a>
								</li>
								<li>
									<a href="javascript:;">
										Track & Trace
										<i class="flaticon-quote"></i>
									</a>
								</li>
							</ul>
							<div class="tab_content">
								<div class="tabs_item">
                                    <form id="request-quote-form" action="{{ route('quote.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <!-- Personal Details -->
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h3>Personal Details</h3>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-control" placeholder="Your Email*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <input type="text" name="phone" class="form-control" placeholder="Your Phone*" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Shipment Details -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h3>Shipment Details</h3>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="form-group">
                                                            <select name="vehicle_type" class="form-control" required>
                                                                <option value="Default">Type of Vehicle</option>
                                                                <option value="big_truck">Big Truck</option>
                                                                <option value="mini_truck">Mini Truck</option>
                                                                <option value="bus">Bus</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <input type="time" name="departure_time" class="form-control" placeholder="Departure Time" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Type of Goods -->
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="form-group">
                                                            <select name="type_of_goods" class="form-control"required>
                                                                <option value="Default">Type of Goods</option>
                                                                <option value="small">Small</option>
                                                                <option value="medium">Medium</option>
                                                                <option value="large">Large</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="weight_of_shipment" class="form-control" placeholder="Weight of Shipment (KG)"required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="date" name="date_of_shipment" class="form-control" placeholder="Date of Shipment"required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Route Type -->
                                                <div class="row mb-30">
                                                    <h3>Select Route Type</h3>
                                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                                        <label class="single-check" for="easternRoute">
                                                            Eastern Route
                                                            <input type="radio" id="easternRoute" name="route_type" value="eastern" onclick="toggleRouteSelect('eastern')" required>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                                        <label class="single-check" for="northernRoute">
                                                            Northern Route
                                                            <input type="radio" id="northernRoute" name="route_type" value="northern" onclick="toggleRouteSelect('northern')" required>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6" id="easternSelect" style="display:none;">
                                                        <div class="form-group">
                                                            <select id="easternRouteSelect" class="form-control" onchange="updateStaterouteValue('eastern')">
                                                                <option value="">Eastern Route</option>
                                                                <option value="Aba_to_Porthacourt">Aba to Porthacourt</option>
                                                                <option value="Aba_to_Calabar">Aba to Calabar</option>
                                                                <option value="Aba_to_Uyo">Aba to Uyo</option>
                                                                <option value="Aba_to_Imo">Aba to Imo</option>
                                                                <option value="Aba_to_Enugu">Aba to Enugu</option>
                                                                <option value="Aba_to_Awka">Aba to Awka</option>
                                                                <option value="Aba_to_Delta">Aba to Delta</option>
                                                                <option value="Aba_to_Ebonyi">Aba to Ebonyi</option>
                                                                <option value="Aba_to_Kogi">Aba to Kogi</option>
                                                                <option value="Aba_to_Abuja">Aba to Abuja</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6" id="northernSelect" style="display:none;">
                                                        <div class="form-group">
                                                            <select id="northernRouteSelect" class="form-control" onchange="updateStaterouteValue('northern')">
                                                                <option value="">Northern Route</option>
                                                                <option value="Abuja_to_Kaduna">Abuja to Kaduna</option>
                                                                <option value="Abuja_to_Kano">Abuja to Kano</option>
                                                                <option value="Abuja_to_Jigawa">Abuja to Jigawa</option>
                                                                <option value="Abuja_to_Gombe">Abuja to Gombe</option>
                                                                <option value="Abuja_to_Bauchi">Abuja to Bauchi</option>
                                                                <option value="Abuja_to_Jos">Abuja to Jos</option>
                                                                <option value="Abuja_to_Nasarawa">Abuja to Nasarawa</option>
                                                                <option value="Abuja_to_Benue">Abuja to Benue</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Hidden Field to Hold the Selected State Route -->
                                                <input type="hidden" name="stateroute" id="staterouteInput">

                                                <!-- Delivery Type -->
                                                <div class="row mb-30">
                                                    <h3>Select Delivery Type</h3>
                                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                                        <label class="single-check">
                                                            Express Delivery
                                                            <input type="radio" value="Express Delivery" name="delivery_type"required>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                                        <label class="single-check">
                                                            Road Freight
                                                            <input type="radio" value="Road Freight" name="delivery_type"required>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit" class="default-btn">Request Quote</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="track-img"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Modal for Request Quote -->
                                <div class="modal fade" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Quote Request Response</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-text"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs_item">
                                    <form action="{{ route('track.store') }}" id="trackForm" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h3>Shipment Type</h3>
                                                        <div class="form-group">
                                                            <select name="shipment_type" class="form-control" required>
                                                                <option value="">Select Shipment/Property type</option>
                                                                <option value="1">Express Delivery</option>
                                                                <option value="2">Road Freight</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-30">
                                                        <h3>Tracking Number</h3>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <textarea name="tracking_numbers" class="form-control" placeholder="Kindly input your tracking numbers." required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                                        <label class="single-check">
                                                            Express Delivery
                                                            <input type="radio" value="Express Delivery" checked="checked" name="delivery_type" required>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                                        <label class="single-check">
                                                            Road Freight
                                                            <input type="radio" value="Road Freight" name="delivery_type" required>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit" class="default-btn">Track & Trace</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="track-img"></div>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Modal for Tracking Quotes -->
                                    <div class="modal fade" id="trackModal" tabindex="-1" role="dialog" aria-labelledby="trackModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="trackModalLabel">Tracking Information</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="track-modal-text"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Track Area -->

		<!-- Start About Area -->
		<section class="about-area pb-100">
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
							<a class="default-btn" href="#">
								Learn More
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- End About Area -->

		<!-- Start What We Offer Area -->
		<section class="what-offer-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>What We Offer</span>
					<h2>Comprehensive Logistics and Transport Solutions</h2>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-server"></i>
							<h3>Warehousing</h3>
							<p>Our state-of-the-art warehousing solutions ensure your goods are stored securely and efficiently.</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-air-freight"></i>
							<h3>Air Freight</h3>
							<p>Fast and reliable air freight services to meet your urgent transport needs.</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-plastic-bottle"></i>
							<h3>Ocean Freight</h3>
							<p>Comprehensive ocean freight solutions for international shipping and logistics.</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-street"></i>
							<h3>Road Freight</h3>
							<p>Efficient road freight services for domestic and cross-border transportation.</p>
							<a class="circle-read-more" href="service-details.html">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End What We Offer Area -->

		<!-- Start Why Choose Us Area -->
		<section class="choose-us-area pb-100">
			<div class="container">
				<div class="section-title">
					<span>Why Choose Us</span>
					<h2>Leading the Logistics Industry</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 pr-0">
						<div class="choose-img choose-img-one">
						</div>
					</div>
					<div class="col-lg-8 pl-0">
						<div class="choose-tab-wrap">
							<h2>Why Our Company is the Best</h2>
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
											Our Values
										</a>
									</li>
								</ul>
								<div class="tab_content">
									<div class="tabs_item">
										<p>Our mission is to provide reliable and efficient logistics solutions that exceed customer expectations. We strive to innovate and improve our services to ensure the highest level of satisfaction.</p>

										<p>We are committed to delivering value through our comprehensive range of services, including warehousing, air freight, ocean freight, and road freight, tailored to meet the unique needs of each client.</p>
										<a class="default-btn" href="#">
											Learn About
										</a>
									</div>

									<div class="tabs_item">
										<p>Our vision is to be the leading logistics company, known for our excellence in service, operational efficiency, and innovative solutions. We aim to create a seamless and integrated logistics experience for our customers worldwide.</p>

										<p>We envision a future where logistics is simplified, and businesses can rely on us for all their transportation needs, allowing them to focus on their core activities and growth.</p>
										<a class="default-btn" href="#">
											Learn About
										</a>
									</div>

									<div class="tabs_item">
										<p>Our core values guide us in every aspect of our business. We prioritize customer satisfaction, operational integrity, and continuous improvement. Our team is dedicated to providing exceptional service and building long-lasting relationships with our clients.</p>

										<p>We value transparency, accountability, and teamwork. These principles ensure that we deliver on our promises and maintain the trust and loyalty of our customers.</p>
										<a class="default-btn" href="#">
											Learn About
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Why Choose Us Area -->

		<!-- Start Counter Area -->
		<section class="counter-area fun-blue-bg pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-box"></i>
							<h2>
								<span class="odometer" data-count="5000">00</span> <span class="traget">+</span>
							</h2>
							<p>Delivered Packages</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-planet-earth"></i>
							<h2>
								<span class="odometer" data-count="120">00</span> <span class="traget">+</span>
							</h2>
							<p>Countries Covered</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-support"></i>
							<h2>
								<span class="odometer" data-count="800">00</span> <span class="traget">+</span>
							</h2>
							<p>Satisfied Clients</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-product-realise"></i>
							<h2>
								<span class="odometer" data-count="3500">00</span> <span class="traget">+</span>
							</h2>
							<p>Tons of Goods</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter Area -->

		<!-- start Service Area -->
		<section class="service-area pt-100 pb-100">
			<div class="container">
				<div class="section-title">
					<span>We Offer Services</span>
					<h2>Prime logistics services for world’s logistic companies.</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="icon flaticon-server"></i>
								<h3>Warehousing</h3>
								<p>Our warehousing solutions ensure your goods are stored securely with the highest standards of safety and efficiency.</p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="service-details.html">
									<h3>Warehousing</h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="icon flaticon-air-freight"></i>
								<h3>Air Freight</h3>
								<p>We offer reliable and efficient air freight services to ensure your cargo reaches its destination on time.</p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="service-details.html">
									<h3>Air Freight</h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 offset-md-3 offset-sm-3 offset-lg-0">
						<div class="single-service">
							<div class="service-content-wrap">
								<i class="icon flaticon-plastic-bottle"></i>
								<h3>Ocean Freight</h3>
								<p>Our ocean freight services are designed to handle all your shipping needs with utmost precision and care.</p>
							</div>
							<div class="service-heading">
								<a class="circle-read-more" href="service-details.html">
									<h3>Ocean Freight</h3>
									<i class="flaticon-right-1"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Service Area -->

		<!-- Start Testimonials Area -->
		<section class="testimonials-area fun-blue-bg ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Client’s Testimonials</span>
					<h2>What they say about us</h2>
				</div>
				<div class="row">
					<div class="testimonials-top-wrap owl-carousel owl-theme">
						<div class="testimonials-wrap">
							<img src="{{ asset('frontend/assets/img/testimonials/1.jpg')}}" alt="Image">
							<div class="testimonials-content">
								<p>Avo Logistics provided us with an exceptional service that streamlined our supply chain processes. Their professionalism and attention to detail ensured our goods were delivered on time, every time.</p>
								<h3>Juhon Dew</h3>
								<ul>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
								</ul>
							</div>
						</div>
						<div class="testimonials-wrap">
							<img src="{{ asset('frontend/assets/img/testimonials/2.jpg')}}" alt="Image">
							<div class="testimonials-content">
								<p>The efficiency and reliability of Avo Logistics' air freight services have significantly boosted our business operations. Their team goes above and beyond to meet our logistics needs.</p>
								<h3>Moris Noman</h3>
								<ul>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star-half'></i>
									</li>
								</ul>
							</div>
						</div>
						<div class="testimonials-wrap">
							<img src="{{ asset('frontend/assets/img/testimonials/3.jpg')}}" alt="Image">
							<div class="testimonials-content">
								<p>Our experience with Avo Logistics has been nothing short of excellent. Their comprehensive warehousing solutions have provided us with the flexibility and security we need to grow our business.</p>
								<h3>Jon Smit</h3>
								<ul>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star-half'></i>
									</li>
									<li>
										<i class='bx bxs-star-half'></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials Area -->

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

		<!-- Start Blog Area -->
		<section class="blog-area pb-70">
			<div class="container">
				<div class="section-title">
					<span>News & Blog</span>
					<h2>Get every single update here.</h2>
					<p>Stay informed with the latest insights and updates from Avo Logistics. Explore our expert opinions, industry trends, and company news to stay ahead in the logistics and supply chain sector.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/1.png')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: Jon Smith</a>
									</li>
									<li>Delivery</li>
									<li>jan 30, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Exporters Achieve Cost Savings Throughout the sale
									</a>
								</h3>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/2.png')}}" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="news-details.html">By: Amith klev</a>
									</li>
									<li>Engineering</li>
									<li>Feb 5, 2024</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Deliveright Logistics Expands Service to West
									</a>
								</h3>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="{{ asset('frontend/assets/img/blog/3.png')}}" alt="Image">
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
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start Regional offices  Area -->
		<section class="office-map-area ptb-100">
			<div class="container">
				<div class="location-wrap">
					<div class="map-location">
						<h3><i class="flaticon-planet-earth"></i> Regional Offices</h3>
						<ul>
							<li class="color">Nigeria</li>
							<li>Plot 3, 9 Ishaya Shekari Crescent, Gwarinpa, 900108, Federal Capital Territory</li>
							<li>+ (234)  818-876-5625</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End Regional offices Area -->

		<!-- Start Footer Top Area -->
		@include('includes.footer')
		<!-- End Footer Top Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- End Go Top Area -->


        <!-- Jquery Min JS -->
        @include('includes.script')

        <!-- JS handling easter and northern switch select -->
        <script>
            function toggleRouteSelect(routeType) {
                document.getElementById('easternSelect').style.display = (routeType === 'eastern') ? 'block' : 'none';
                document.getElementById('northernSelect').style.display = (routeType === 'northern') ? 'block' : 'none';

                // Clear the stateroute value when switching between route types
                document.getElementById('staterouteInput').value = '';
            }

            function updateStaterouteValue(routeType) {
                let selectedValue = '';
                if (routeType === 'eastern') {
                    selectedValue = document.getElementById('easternRouteSelect').value;
                } else if (routeType === 'northern') {
                    selectedValue = document.getElementById('northernRouteSelect').value;
                }
                document.getElementById('staterouteInput').value = selectedValue;
            }
        </script>

        <!-- JS handling request-store form submission and modal -->
        <script>
           document.addEventListener('DOMContentLoaded', function () {
                const requestQuoteForm = document.getElementById('request-quote-form');
                requestQuoteForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    const formData = new FormData(this);

                    fetch('{{ route("quote.store") }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        const modalText = document.querySelector('.modal-text');
                        if (data.success) {
                            const requestData = data.data;

                            modalText.innerHTML = `
                                <p>Thank you for requesting a quote. We will get back to you shortly.</p>
                                <p><strong>Name:</strong> ${requestData.name}</p>
                                <p><strong>Email:</strong> ${requestData.email}</p>
                                <p><strong>Phone:</strong> ${requestData.phone}</p>
                                <p><strong>Vehicle Type:</strong> ${requestData.vehicle_type}</p>
                                <p><strong>Departure Time:</strong> ${requestData.departure_time}</p>
                                <p><strong>Type of Goods:</strong> ${requestData.type_of_goods}</p>
                                <p><strong>Weight of Shipment:</strong> ${requestData.weight_of_shipment} kg</p>
                                <p><strong>Delivery Type:</strong> ${requestData.delivery_type}</p>
                                <p><strong>Date of Shipment:</strong> ${requestData.date_of_shipment}</p>
                                <p><strong>Route Type:</strong> ${requestData.route_type}</p>
                                <p><strong>State Route:</strong> ${requestData.stateroute}</p>
                                <p><strong>Total Cost:</strong> $${requestData.total_cost}</p>
                                <p><strong>Tracking Number:</strong> ${requestData.tracking_number}</p>
                            `;
                        } else {
                            let errorMessage = 'There was an error submitting your request. Please try again.';
                            if (data.errors) {
                                errorMessage = Object.values(data.errors).map(errorArray => errorArray.join(', ')).join('<br>');
                            }
                            modalText.innerHTML = errorMessage;
                        }

                        $('#standardModal').modal('show');
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        document.querySelector('.modal-text').innerText = 'There was an error submitting your request. Please try again.';
                        $('#standardModal').modal('show');
                    });
                });
            });
        </script>

        <!-- JS handling track-store form submission and modal -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Handle track-store form submission
                const trackForm = document.getElementById('trackForm');
                if (trackForm) {
                    trackForm.addEventListener('submit', function (e) {
                        e.preventDefault();

                        const formData = new FormData(this);

                        fetch('{{ route("track.store") }}', {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            const modalText = document.querySelector('.track-modal-text');
                            if (data.success) {
                                modalText.innerHTML = `
                                    <p>Tracking Number: ${data.tracking_number}</p>
                                    <p>Name: ${data.name}</p>
                                    <p>Date of Shipment: ${data.date_of_shipment}</p>
                                `;
                            } else {
                                modalText.innerHTML = `<p>${data.message}</p>`;
                            }

                            $('#trackModal').modal('show');
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            document.querySelector('.track-modal-text').innerText = 'There was an error checking your tracking information. Please try again.';
                            $('#trackModal').modal('show');
                        });
                    });
                }
            });
        </script>
    </body>
</html>
