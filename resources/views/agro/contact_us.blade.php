@extends('layouts.app')

@php
    $title = "Jai Agro Machinery | Leading Web and Mobile App Development in Coimbatore";
    $meta_title = "Jai Agro Machinery provides best IT solutions for businesses";
    $meta_description = "Skyraan is an IT company located in Coimbatore that provides services such as Web development, mobile app development, digital marketing, and branding";
@endphp

@section('customstyle')
    <link href="{{asset('assets/css/machinery/contact.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <style>
        .banner {
            width: 100%;
            background: 
                url('{{ asset('assets/images/banner/banner_24049947.png') }}') left center / 50% 100% no-repeat,
                linear-gradient(to right, #3AB05B 50%, #3AB05B 50%);
            background-blend-mode: color-burn;
            height: 400px;
        }
    </style>
@endsection
@section('content')
    <main>
        <section id="contact_us">
            <div class="banner py-4">
                <div class="container">
                    <div class="bnr_wdt">
                        <h3 class="fw-bold text-white mb-3" data-aos="fade-right" data-aos-duration="1000">Contact Us</h3>
                        <p class="text-white lh-lg mb-0" data-aos="fade-right" data-aos-duration="1000">Our wide range of products—from tractors and tillers to harvesters and precision equipment—are designed with modern technology while keeping farmers’ needs at the core.</p>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="container">
                    <div class="main_crd card border-0 p-3 plg-5" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row gy-3">
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                <div class="card grn_clr rounded-0 p-3">
                                    <h5 class="agro_txt_clr mb-3">Get in Touch</h5>
                                    <span class="lh-lg mb-3">Destoner Machine is used to clean the Paddy, Rice, Wheat, Ragi, Maize.</span>
                                    <div class="card agro_bg_clr rounded-circle p-2 border-0">
                                        <img src="{{url('assets/images/phone_28364298.png')}}" class="w-50" alt="" />
                                    </div>
                                    <b class="lh-lg">Phone</b>
                                    <span class="lh-lg mb-3">+91 12345 12345</span>
                                    <div class="card agro_bg_clr rounded-circle p-2 border-0">
                                        <img src="{{url('assets/images/mail_932485.png')}}" class="w-50" alt="" />
                                    </div>
                                    <b class="lh-lg">Email Id</b>
                                    <span class="lh-lg mb-3">JaiAgro2313@gmail.Com</span>
                                    <div class="card agro_bg_clr rounded-circle p-2 border-0">
                                        <img src="{{url('assets/images/location_2075835.png')}}" class="w-50" alt="" />
                                    </div>
                                    <b class="lh-lg">Location</b>
                                    <span class="lh-lg mb-3">Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016 </span>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                <form class="contact-form">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="contact_name" class="form-label">Name</label>
                                        <input type="text" class="form-control rounded-0 focus-ring focus-ring-light" name="name" id="contact_name" placeholder="Enter your Name">
                                        <div class="w-100 position-absolute mb-3"><small class="text-danger contact-name-error err_msg"></small></div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="contact_email" class="form-label">Email ID</label>
                                        <input type="text" class="form-control rounded-0 focus-ring focus-ring-light" name="email" id="contact_email" placeholder="Enter your Email ID">
                                        <div class="w-100 position-absolute mb-3"><small class="text-danger contact-mail-error err_msg"></small></div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="contact_number" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control rounded-0 focus-ring focus-ring-light" name="phone" id="contact_number" placeholder="Enter your Phone Number">
                                        <div class="w-100 position-absolute mb-3"><small class="text-danger contact-number-error err_msg"></small></div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="contact_message" class="form-label">Description</label>
                                        <textarea class="form-control rounded-0 focus-ring focus-ring-light" name="message" id="contact_message" placeholder="Enter your Description" rows="5"></textarea>
                                        <div class="w-100 position-absolute mb-3"><small class="text-danger contact-message-error err_msg"></small></div>
                                    </div>
                                    <button type="submit" class="mech_bg_clr border-0 text-white rounded-2 p-2" id="type-sbt">Submit Request</button>
                                    <button type="button" class="mech_bg_clr border-0 text-white rounded-2 p-2" id="type-btn" style="display: none;">Submit Request</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 my-lg-5">
                        <div class="mapouter my-5">
                        <div class="gmap_canvas">
                            <iframe 
                            class="gmap_iframe" 
                            frameborder="0" 
                            scrolling="no" 
                            marginheight="0" 
                            marginwidth="0" 
                            src="https://maps.google.com/maps?width=1000&amp;height=400&amp;hl=en&amp;q=Akshya%20Nagar%201st%20Block%201st%20Cross%2C%20Rammurthy%20Nagar%2C%20Bangalore-560016&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                        </div>
                        <style>
                            .mapouter{position:relative;text-align:right;width:100%;height:400px;}
                            .gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}
                            .gmap_iframe {width:100%!important;height:400px!important;}
                        </style>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('customscript')
    <script async defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDHO9uwpYA-dE57UXC4DWkp52eKDamZBEw&callback=initMap" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var baseurl = "{{url('/')}}";
        AOS.init({
            once: true
        });
    </script>
    <script>
        function initMap() {
            var location = { lat: 13.0097, lng: 77.6673 }; // Example coordinates for Rammurthy Nagar

            var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location
            });

            var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: "Akshya Nagar 1st Block, Rammurthy Nagar"
            });
        }
    </script>
    <script src="{{asset('assets/js/machinery/contact.js')}}"></script>
@endsection