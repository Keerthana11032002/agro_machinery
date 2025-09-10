@extends('layouts.app')

@php
    $title = "AGROMECH ENGINEERS | Leading Web and Mobile App Development in Coimbatore";
    $meta_title = "AGROMECH ENGINEERS provides best IT solutions for businesses";
    $meta_description = "Skyraan is an IT company located in Coimbatore that provides services such as Web development, mobile app development, digital marketing, and branding";
@endphp

@section('customstyle')
    <link href="{{asset('assets/css/machinery/home.css')}}" rel="stylesheet">
    <style>
        .banner {
            background: url('{{asset('assets/images/banner/home_banner_93245278.png')}}');
            background-repeat: round;
            height: 95vh;
            place-content: center;
            justify-items: center;
        }
        .choose_us_bg {
            background: url('{{asset('assets/images/home/LandingPage_3485723458.png')}}') no-repeat;
        }
        .spares_bg {
            background-blend-mode: hard-light;
            background: linear-gradient(to bottom, #3AB05B, #3AB05B, #3AB05B, #3AB05B, #3AB05B) no-repeat, url('{{asset('assets/images/home/753045_04 1 1.png')}}');
            background-repeat: round;
        }
        .service_bg {
            background: url('{{asset('assets/images/home/Tractor Coloring Pages.png')}}');
            background-size: 50% 90%;
            background-repeat: no-repeat;
        }
    </style>
@endsection
@section('content')
    <main>
        <div class="container-fluid pt-5 px-0">
            <div class="banner">
                <div class="header">
                    <h1 class="title text-white text-center fw-bold pb-3">
                    <span>Engineering</span>
                    <span>Excellence</span>
                    <span>for</span>
                    <span>Modern</span>
                    <span class="agri_nm">Agriculture</span>
                    </h1>

                    <p class="lh-lg fw-light text-white text-center pb-3"><span data-aos="fade-left" data-aos-duration="3000">With cutting-edge technology and decades of expertise, we design agricultural machinery that delivers superior performance, fuel efficiency, and long-lasting reliability</span> — <span data-aos="fade-right" data-aos-duration="3000">helping farmers worldwide achieve more with less effort.”</span></p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{url('/products')}}" data-aos="fade-right" data-aos-duration="1500" class="text-decoration-none py-2 px-3 rounded-2 agro_bg_clr text-white">Explore Our Machines</a>
                        <a href="{{url('/contact-us')}}" data-aos="fade-left" data-aos-duration="1500" class="text-decoration-none py-2 px-3 rounded-2 mech_bg_clr text-white">Request a Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <section id="products">
            <div class="card border-0 prdt_bg grn_clr">
                <div class="z-1 mx-4 mx-lg-5 px-0 px-lg-5">
                    <h2 class="text-center my-3 my-lg-4 fw-bold">Our Products</h2>
                    <div class="row">
                        @foreach($products as $prdt)
                            <div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 py-2">
                                <a class="text-decoration-none text-dark" href="{!! url('/products/' . strtolower(str_replace(' ', '-', strip_tags($prdt->title)))) !!}">
                                    <div class="card justify-content-between border-0 p-2 h-100">
                                        <img src="{{$contentUrl.$prdt->image}}" alt="{{$prdt->title}}" class="w-100">
                                        <div class="d-flex flex-column h-100 justify-content-between">
                                            <div class="py-2 fw-bold py-md-3 product_title"><span data-aos="fade-right">{{$prdt->title}}</span></div>
                                            <div>
                                                @if($prdt->dimension)
                                                    <div class="pb-2"><small data-aos="fade-right">Overall Dimension ( L*W*H ) </small></div>
                                                    <div class="pb-2 fw-bold"><small data-aos="fade-right">{{$prdt->dimension}}</small></div>
                                                @endif
                                                @if($prdt->weight)
                                                    <div class="pb-2"><small data-aos="fade-right">Weight</small></div>
                                                    <div class="pb-3"><small data-aos="fade-right">{{$prdt->weight}}</small></div>
                                                @endif
                                                <a href="{!! url('/products/' . strtolower(str_replace(' ', '-', strip_tags($prdt->title)))) !!}" class="agro_bg_clr text-white text-decoration-none py-1 px-2 rounded-1 d-flex justify-content-center gap-2 align-items-center"><div>View More Details </div><svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.11685 5.05609L1.90935 0.848591C1.7376 0.677861 1.50527 0.582031 1.2631 0.582031C1.02093 0.582031 0.7886 0.677861 0.616852 0.848591C0.530934 0.933807 0.462739 1.03519 0.416201 1.1469C0.369663 1.2586 0.345703 1.37841 0.345703 1.49942C0.345703 1.62044 0.369663 1.74025 0.416201 1.85195C0.462739 1.96366 0.530934 2.06504 0.616852 2.15026L4.83352 6.34859C4.91944 6.43381 4.98763 6.53519 5.03417 6.6469C5.08071 6.7586 5.10467 6.87841 5.10467 6.99942C5.10467 7.12044 5.08071 7.24025 5.03417 7.35195C4.98763 7.46366 4.91944 7.56504 4.83352 7.65026L0.616852 11.8486C0.44424 12.02 0.346785 12.2529 0.345925 12.4962C0.345066 12.7394 0.440873 12.9731 0.612269 13.1457C0.783665 13.3183 1.01661 13.4157 1.25986 13.4166C1.50311 13.4175 1.73674 13.3217 1.90935 13.1503L6.11685 8.94276C6.63184 8.42713 6.9211 7.72818 6.9211 6.99942C6.9211 6.27067 6.63184 5.57172 6.11685 5.05609Z" fill="white"/>
                                                </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center my-3 my-md-5">
                    <a href="{{url('/products')}}" class="text-decoration-none py-2 px-3 rounded-2 agro_bg_clr text-white" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000"><span class="me-3">Visit All Products</span><svg width="14" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_144_75)">
                    <path d="M16.2494 0H8.74944C8.05944 0 7.49944 0.559167 7.49944 1.25C7.49944 1.94083 8.05944 2.5 8.74944 2.5H15.7319L0.365273 17.8658C-0.12306 18.3533 -0.12306 19.1458 0.365273 19.6333C0.60944 19.8775 0.92944 19.9992 1.24944 19.9992C1.56944 19.9992 1.88944 19.8775 2.13361 19.6333L17.4994 4.2675V11.25C17.4994 11.9408 18.0594 12.5 18.7494 12.5C19.4394 12.5 19.9994 11.9408 19.9994 11.25V3.75C19.9994 1.6825 18.3169 0 16.2494 0Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_144_75">
                    <rect width="20" height="20" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    </button></a>
                </div>
            </div>
        </section>
        <section id="why_choose_us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-5 p-0 sys-view tab-view-no">
                        <img src="{{url('assets/images/home/golden-combine-harvesters-work-wheat-fields-cutting-generated.png')}}" data-aos="fade-right" class="pb-3 w-100" alt="why choose us"/>
                    </div>
                    <div class="col-12 col-lg-7 p-0">
                        <div class="choose_us_bg px-4 px-sm-5 px-md-5 px-lg-5 px-xl-5 px-xxl-5">
                            <div class="card border-0 rounded-0 p-3 me-0 me-lg-5" data-aos="fade-left">
                                <h3 class="text-white lh-lg">Why Choose Us ?</h3>
                                <img src="{{url('assets/images/home/golden-combine-harvesters-work-wheat-fields-cutting-generated.png')}}" class="mbl-view tab-view pb-3 w-75" alt="why choose us"/>
                                <p class="text-white lh-lg fw-light">We prioritize your trust by ensuring that all your information is kept safe and secure through advanced encryption and privacy protection. Our platform is designed with security at its core, so you can browse, post, and manage your business confidently.</p>
                                <h5 class="mech_text_clr lh-lg">Our Benefits</h5>
                                <div class="d-flex gap-2">
                                    <div class="pt-1"><svg width="21" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.0303 0C11.2319 0 9.5437 0.338541 7.96581 1.01562C6.38792 1.70963 5.00938 2.64486 3.83021 3.82129C2.65103 4.99772 1.71363 6.37305 1.018 7.94727C0.339332 9.52148 0 11.2057 0 13C0 14.7943 0.339332 16.4785 1.018 18.0527C1.71363 19.627 2.65103 21.0023 3.83021 22.1787C5.00938 23.3551 6.38792 24.2904 7.96581 24.9844C9.5437 25.6615 11.2319 26 13.0303 26C14.8288 26 16.517 25.6615 18.0949 24.9844C19.6728 24.2904 21.0513 23.3551 22.2305 22.1787C23.4096 21.0023 24.3471 19.627 25.0427 18.0527C25.7213 16.4785 26.0607 14.7943 26.0607 13C26.0607 11.2057 25.7213 9.52148 25.0427 7.94727C24.3471 6.37305 23.4096 4.99772 22.2305 3.82129C21.0513 2.64486 19.6728 1.70963 18.0949 1.01562C16.517 0.338541 14.8288 0 13.0303 0ZM19.6219 10.2324L12.5722 17.291C12.4704 17.3926 12.3517 17.4688 12.2159 17.5195C12.0802 17.5703 11.9445 17.5957 11.8087 17.5957C11.673 17.5957 11.5373 17.5703 11.4015 17.5195C11.2658 17.4688 11.147 17.3926 11.0452 17.291L7.50771 13.7617C7.30412 13.5586 7.20232 13.3047 7.20232 13C7.20232 12.6953 7.30412 12.4414 7.50771 12.2383C7.72828 12.0182 7.98702 11.9082 8.28394 11.9082C8.58085 11.9082 8.83111 12.0182 9.03471 12.2383L11.8087 14.9805L18.0949 8.70898C18.3154 8.50586 18.5742 8.4043 18.8711 8.4043C19.168 8.4043 19.4183 8.50586 19.6219 8.70898C19.8424 8.92904 19.9527 9.18717 19.9527 9.4834C19.9527 9.77962 19.8424 10.0293 19.6219 10.2324Z" fill="#3AB05B"/>
                                    </svg></div>
                                    <div class="text-white lh-lg pb-1">Good Service 
                                    <div class="pb-3"><small class="text-white lh-lg fw-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small></div></div>
                                </div>
                                <div class="d-flex gap-2">
                                    <div class="pt-1"><svg width="21" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.0303 0C11.2319 0 9.5437 0.338541 7.96581 1.01562C6.38792 1.70963 5.00938 2.64486 3.83021 3.82129C2.65103 4.99772 1.71363 6.37305 1.018 7.94727C0.339332 9.52148 0 11.2057 0 13C0 14.7943 0.339332 16.4785 1.018 18.0527C1.71363 19.627 2.65103 21.0023 3.83021 22.1787C5.00938 23.3551 6.38792 24.2904 7.96581 24.9844C9.5437 25.6615 11.2319 26 13.0303 26C14.8288 26 16.517 25.6615 18.0949 24.9844C19.6728 24.2904 21.0513 23.3551 22.2305 22.1787C23.4096 21.0023 24.3471 19.627 25.0427 18.0527C25.7213 16.4785 26.0607 14.7943 26.0607 13C26.0607 11.2057 25.7213 9.52148 25.0427 7.94727C24.3471 6.37305 23.4096 4.99772 22.2305 3.82129C21.0513 2.64486 19.6728 1.70963 18.0949 1.01562C16.517 0.338541 14.8288 0 13.0303 0ZM19.6219 10.2324L12.5722 17.291C12.4704 17.3926 12.3517 17.4688 12.2159 17.5195C12.0802 17.5703 11.9445 17.5957 11.8087 17.5957C11.673 17.5957 11.5373 17.5703 11.4015 17.5195C11.2658 17.4688 11.147 17.3926 11.0452 17.291L7.50771 13.7617C7.30412 13.5586 7.20232 13.3047 7.20232 13C7.20232 12.6953 7.30412 12.4414 7.50771 12.2383C7.72828 12.0182 7.98702 11.9082 8.28394 11.9082C8.58085 11.9082 8.83111 12.0182 9.03471 12.2383L11.8087 14.9805L18.0949 8.70898C18.3154 8.50586 18.5742 8.4043 18.8711 8.4043C19.168 8.4043 19.4183 8.50586 19.6219 8.70898C19.8424 8.92904 19.9527 9.18717 19.9527 9.4834C19.9527 9.77962 19.8424 10.0293 19.6219 10.2324Z" fill="#3AB05B"/>
                                    </svg></div>
                                    <div class="text-white lh-lg pb-1">Professional Experts 
                                    <div class="pb-3"><small class="text-white lh-lg fw-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small></div></div>
                                </div>
                                <div class="d-flex gap-2">
                                    <div class="pt-1"><svg width="21" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.0303 0C11.2319 0 9.5437 0.338541 7.96581 1.01562C6.38792 1.70963 5.00938 2.64486 3.83021 3.82129C2.65103 4.99772 1.71363 6.37305 1.018 7.94727C0.339332 9.52148 0 11.2057 0 13C0 14.7943 0.339332 16.4785 1.018 18.0527C1.71363 19.627 2.65103 21.0023 3.83021 22.1787C5.00938 23.3551 6.38792 24.2904 7.96581 24.9844C9.5437 25.6615 11.2319 26 13.0303 26C14.8288 26 16.517 25.6615 18.0949 24.9844C19.6728 24.2904 21.0513 23.3551 22.2305 22.1787C23.4096 21.0023 24.3471 19.627 25.0427 18.0527C25.7213 16.4785 26.0607 14.7943 26.0607 13C26.0607 11.2057 25.7213 9.52148 25.0427 7.94727C24.3471 6.37305 23.4096 4.99772 22.2305 3.82129C21.0513 2.64486 19.6728 1.70963 18.0949 1.01562C16.517 0.338541 14.8288 0 13.0303 0ZM19.6219 10.2324L12.5722 17.291C12.4704 17.3926 12.3517 17.4688 12.2159 17.5195C12.0802 17.5703 11.9445 17.5957 11.8087 17.5957C11.673 17.5957 11.5373 17.5703 11.4015 17.5195C11.2658 17.4688 11.147 17.3926 11.0452 17.291L7.50771 13.7617C7.30412 13.5586 7.20232 13.3047 7.20232 13C7.20232 12.6953 7.30412 12.4414 7.50771 12.2383C7.72828 12.0182 7.98702 11.9082 8.28394 11.9082C8.58085 11.9082 8.83111 12.0182 9.03471 12.2383L11.8087 14.9805L18.0949 8.70898C18.3154 8.50586 18.5742 8.4043 18.8711 8.4043C19.168 8.4043 19.4183 8.50586 19.6219 8.70898C19.8424 8.92904 19.9527 9.18717 19.9527 9.4834C19.9527 9.77962 19.8424 10.0293 19.6219 10.2324Z" fill="#3AB05B"/>
                                    </svg></div>
                                    <div class="text-white lh-lg pb-1">Good Service 
                                    <div class="pb-3"><small class="text-white lh-lg fw-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallery">
            <div class="container-fluid">
                <div class="glr_wdth m-3 m-lg-5">
                    <h2 class="text-center mb-4 fw-bold">Explore Our Gallery</h2>
                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('assets/images/home/Frame 3382307.png')}}" data-aos="fade-down-right" data-aos-duration="1500" class="gallery_img w-100 pb-3" alt="AGROMECH ENGINEERS Gallery Image"/>
                        </div>
                        <div class="col-8">
                            <img src="{{url('assets/images/home/image_28346523.png')}}" data-aos="fade-down-left" data-aos-duration="1500" class="gallery_img w-100 pb-3" alt="AGROMECH ENGINEERS Gallery Image"/>
                        </div>
                        <div class="col-4">
                            <img src="{{url('assets/images/home/Frame 3382309.png')}}" data-aos="fade-up-right" data-aos-duration="1500" class="gallery_img w-100 pb-3" alt="AGROMECH ENGINEERS Gallery Image"/>
                        </div>
                        <div class="col-4">
                            <img src="{{url('assets/images/home/Frame 3382310.png')}}" data-aos="fade-up" data-aos-duration="1500" class="gallery_img w-100 pb-3" alt="AGROMECH ENGINEERS Gallery Image"/>
                        </div>
                        <div class="col-4">
                            <a href="{{url('/gallery')}}">
                                <img src="{{url('assets/images/home/Frame 3382311.png')}}" data-aos="fade-up-left" data-aos-duration="1500" class="gallery_img w-100 pb-3" alt="AGROMECH ENGINEERS Gallery Image"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="spares">
            <div class="spares_bg p-3 p-lg-5">
                <div class="container-fluid">
                    <div class="glr_wdth">
                        <h2 class="text-center mb-4 fw-bold text-white" data-aos="zoom-in-down">Genuine Spares for Every Agri Machine</h2>
                        <p class="lh-lg text-white text-center">we provide a wide range of genuine agricultural machinery spare parts to ensure your equipment keeps working at peak performance. Our spares are design.</p>
                        <div class="text-center mt-4">
                            <a href="{{url('/spares')}}" data-aos="fade-up" class="text-decoration-none py-2 px-3 rounded-2 mech_bg_clr text-white"><span class="me-3">Discover Our Spares</span><svg width="14" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_144_117)">
                            <path d="M16.2494 0H8.74944C8.05944 0 7.49944 0.559167 7.49944 1.25C7.49944 1.94083 8.05944 2.5 8.74944 2.5H15.7319L0.365273 17.8658C-0.12306 18.3533 -0.12306 19.1458 0.365273 19.6333C0.60944 19.8775 0.92944 19.9992 1.24944 19.9992C1.56944 19.9992 1.88944 19.8775 2.13361 19.6333L17.4994 4.2675V11.25C17.4994 11.9408 18.0594 12.5 18.7494 12.5C19.4394 12.5 19.9994 11.9408 19.9994 11.25V3.75C19.9994 1.6825 18.3169 0 16.2494 0Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_144_117">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="service_bg p-3 p-lg-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-5 col-lg-5 col-xl-5 col-xl-5 pe-4">
                            <h2 class="fw-bold lh-lg" data-aos="fade-left">Our Services</h2>
                            <img src="{{url('assets/images/home/young-farmer-taking-care-his-business 1.png')}}" data-aos="fade-left" class="service_img pb-3 mbl-view w-75" alt="AGROMECH ENGINEERS Services Image"/>
                            <p class="lh-lg pb-3" data-aos="fade-left">We prioritize your trust by ensuring that all your information is kept safe and secure through advanced encryption and privacy protection. Our platform is designed with security at its core, so you can browse, post, and manage your business confidently. </p>
                            <li class="pb-3" data-aos="fade-left">We prioritize your trust by ensuring that all your information is kept</li>
                            <li class="pb-3" data-aos="fade-left">We prioritize your trust by ensuring that all your information is kept</li>
                        </div>
                        <div class="col-6 sys-view">
                            <img src="{{url('assets/images/home/young-farmer-taking-care-his-business 1.png')}}" data-aos="fade-right" class="service_img w-100" alt="AGROMECH ENGINEERS Services Image"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="help">
            <div class="grn_clr p-3 p-lg-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-7 col-xl-7">
                            <h3 class="agro_txt_clr fw-bold" data-aos="fade-right">Need Help?</h3>
                            <p class="lh-lg" data-aos="fade-right">Speak with a human to filling out a form? call corporate office and we will connect you with a team member help. </p>
                        </div>
                        <div class="col-12 col-md-3 col-lg-3 col-xl-3 col-xl-3">
                            <a href="{{url('/contact-us')}}" data-aos="fade-left" class="text-decoration-none py-2 px-3 rounded-2 mech_bg_clr text-white">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('customscript')
    <script>
        var baseurl = "{{url('/')}}";
        AOS.init({
            once: true
        });
    </script>
@endsection