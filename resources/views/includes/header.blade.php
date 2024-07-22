<header class="header-area">
    <!-- Start Top Header Area -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header-left-content">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('frontend/assets/img/logo/logo2.png')}}" class="main-logo" alt="Logo">
                            <img src="{{ asset('frontend/assets/img/logo/logo2.png')}}" class="white-logo" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header-right-content">
                        <ul>
                            <li>
                                <a href="tel:+502-464-679">
                                    <i class='bx bxs-phone-call'></i>
                                    <span>Contact support</span>
                                    234 818-876-5625
                                </a>
                            </li>
                            <li>
                                <a href="mailto:support@avologistics.com">
                                    <i class='bx bx-envelope'></i>
                                    <span>Contact support</span>
                                    <span>support@avologistics</span>
                                </a>
                            </li>
                            <li class="pl-0">
                                <ul class="flag-wrap">
                                    <li class="flag-item-top">
                                        <a href="javascript:;" class="flag-bar">
                                            <img src="{{ asset('frontend/assets/img/flag/Nigeria.jpg')}}" alt="Image">
                                            <span>NGN</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    <!-- Start Prevoz Navbar Area -->
    <div class="prevoz-nav-style">
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{url('/')}}" class="logo">
                    <img src="{{ asset('frontend/assets/img/logo/logo2.png')}}" alt="Logo">
                </a>
            </div>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="{{ asset('frontend/assets/img/logo/logo2.png')}}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link active">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('aboutus') }}" class="nav-link dropdown-toggle">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('teams') }}" class="nav-link dropdown-toggle">
                                        Team
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('services') }}" class="nav-link dropdown-toggle">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blogs') }}" class="nav-link dropdown-toggle">
                                        News
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contacts') }}" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <!-- Start Other Option -->
                            <div class="others-option">
                                <button type="button" class="sidebar-menu" data-bs-toggle="modal" data-bs-target="#myModal2">
                                    <i class="flaticon-menu"></i>
                                </button>
                            </div>
                            <!-- End Other Option -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Prevoz Navbar Area -->
</header>