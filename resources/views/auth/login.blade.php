{{-- <!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS --> 
    @include('includes.css')
    
    <!-- Title -->
    <title>{{ config('app.name') }} - Login</title>
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
                        <h2>Log In</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ul>
                            <li>
                                <a href="{{url('/')}}">
                                    Home 
                                </a>
                            </li>
                            <li>Log In</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Sign Up Area -->
    <section class="sign-up-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-action">
                        <div class="form-heading text-center">
                            <h3 class="form-title">Login to your account!</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">    
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 form-condition">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1" name="remember">
                                        <label for="chb1">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    @if (Route::has('password.request'))
                                        <a class="forget" href="{{ route('password.request') }}">Forgot my password?</a>
                                    @endif
                                </div>

                                <div class="col-12">
                                    <button class="default-btn btn-two" type="submit">
                                        {{ __('Log in') }}
                                    </button>
                                </div>

                                <div class="col-12">
                                    <p class="account-desc">
                                        Not a member?
                                        <a href="{{ route('register') }}">Register</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sign Up Area -->

    <!-- Start Footer Top Area -->
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
</html> --}}





<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
     </form>
</x-guest-layout> 
