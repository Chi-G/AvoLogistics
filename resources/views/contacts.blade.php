<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Min CSS -->
    @include('includes.css')
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>AVO Logistics - Contacts</title>
</head>
<body>
    @include('includes.header')
    @include('includes.sidebar')

    <div class="page-title-area item-bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <h2>Contact</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="address-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-address">
                        <i class='bx bx-phone-call'></i>
                        <h3>Contact</h3>
                        <span>Talk to support</span>
                        <a href="tel:+2348188765625">+234 818-876-5625</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-address">
                        <i class='bx bx-location-plus'></i>
                        <h3>Location</h3>
                        <span>Find where we are</span>
                        <p>Amina Wing, Plot 3, Block 9 Ishaya Crescent Wole Soyinka Avenue Gwarinpa District, Abuja, FCT</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-address">
                        <i class='bx bx-time'></i>
                        <h3>Meet Us</h3>
                        <span>Available Hours to meet</span>
                        <p>8:00 AM – 8:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="contact-map-area">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.4841455022342!2d7.420579775066873!3d9.110667190953974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e75593d203e8b%3A0xedb8acbfb2aa4b3b!2sPlot%203%2C%209%20Ishaya%20Shekari%20Crescent%2C%20Gwarinpa%2C%20900108%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1721045298691!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-wrap contact-pages mb-0">
                        <div class="contact-form">
                            <div class="section-title">
                                <span class="pumpkin-color">Information</span>
                                <h2>Drop us a message for any query</h2>
                            </div>

                            @if(session('success'))
                                <script>
                                    swal({
                                        title: "Success!",
                                        text: "{{ session('success') }}",
                                        icon: "success",
                                        button: "OK",
                                    });
                                </script>
                            @endif

                            <form method="post" id="contactForm" action="{{ route('contacts.send') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name"  class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email"  class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone"  required data-error="Please enter your phone number" class="form-control" placeholder="Your Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="subject"  class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control"  cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    @include('includes.footer')

    <div class="go-top">
        <i class='bx bx-chevrons-up bx-fade-up'></i>
        <i class='bx bx-chevrons-up bx-fade-up'></i>
    </div>

    @include('includes.script')

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(session('success'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            }
            toastr.success("{{ session('success') }}", 'Success!', {timeout:12000});
        @endif
    
        @if(session('error'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            }
            toastr.error("{{ session('error') }}", 'Error!', {timeout:12000});
        @endif
    
        @if(session('warning'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            }
            toastr.warning("{{ session('warning') }}", 'Warning!', {timeout:12000});
        @endif
    
        @if(session('info'))
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            }
            toastr.info("{{ session('info') }}", 'Info!', {timeout:12000});
        @endif
    </script>

    <script>
        (function ($) {
            "use strict"; 
            $("#contactForm").on("submit", function (event) {
                event.preventDefault();
                var $form = $(this);
                var isValid = $form[0].checkValidity();
                if (isValid) {
                    $.ajax({
                        type: "POST",
                        url: $form.attr('action'),
                        data: $form.serialize(),
                        success: function (response) {
                            toastr.success("Message Submitted!", 'Success!');
                            $form[0].reset();
                        },
                        error: function (xhr) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function (key, value) {
                                toastr.error(value[0], 'Error!');
                            });
                        }
                    });
                } else {
                    toastr.error("Please fill in the form properly", 'Error!');
                }
            });
        }(jQuery));
    </script>
</body>
</html>
