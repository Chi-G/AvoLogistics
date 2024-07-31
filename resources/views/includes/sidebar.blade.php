<div class="sidebar-modal">  
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                    </button>
                    <h2 class="modal-title" id="myModalLabel2">
                        <a href="index.html">
                            <img src="{{ asset('frontend/assets/img/logo/logo2.png')}}" alt="Logo">
                        </a>
                    </h2>
                </div>
                <div class="modal-body">
                    <div class="sidebar-modal-widget">
                        <h3 class="title">About Us</h3>
                        <p> AVO Logistics is a business name of AVO Health Limited (AVO). 
                            It is a Nigerian-based logistics and fleet management services provider. 
                            Our drive is to enable the sustainable transformation and maintenance of a 
                            continuously improving quality of life for the resident population of Nigeria.
                        </p>
                    </div>
                    {{-- <div class="sidebar-modal-widget">
                        <h3 class="title">Admin Links</h3> --}}

                        {{-- @if (Route::has('login'))
                            <ul> --}}
                                {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"> --}}
                                    {{-- @auth
                                        @if(auth()->user()->is_admin)
                                            <li>
                                                <a href="{{ route('admin.dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                            </li>
                                            @else
                                                <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
                                            @endif
                                        @else
                                            <li>
                                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                            </li>
                                    @endauth --}}
                                {{-- </div> --}}
                            {{-- </ul>
                        @endif								
                    </div> --}}
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Contact Info</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="bx bx-location-plus"></i>
                                Address
                                <span>Amina Wing, Plot 3, Block 9 Ishaya Crescent Wole Soyinka Avenue Gwarinpa District, Abuja, FCT</span>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                Email
                                <a href="mailto:support@avologistics.com"><span>
                                    support@avologistics
                                    </span>
                                </a>
                            </li>
                            <li>
                                <i class="bx bxs-phone-call"></i>
                                Phone
                                <a href="tel:+234 818-876-5625">+234 818-876-5625</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Connect With Us</h3>
                        <ul class="social-list">
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>