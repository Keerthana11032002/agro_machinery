@extends('layouts.app')

@php
    $title = "Jai Agro Machinery | Leading Web and Mobile App Development in Coimbatore";
    $meta_title = "Jai Agro Machinery provides best IT solutions for businesses";
    $meta_description = "Skyraan is an IT company located in Coimbatore that provides services such as Web development, mobile app development, digital marketing, and branding";
@endphp

@section('customstyle')
    <link href="{{asset('assets/css/machinery/about_us.css')}}" rel="stylesheet">
    <style>
        .banner {
            position: relative;
            width: 100%;
            height: 400px; /* adjust as needed */
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("{{ url('assets/images/banner/about_458236459827.png') }}") center center / cover no-repeat;
            filter: blur(15px); /* blur effect */
            transform: scale(1.1); /* avoid edge gaps after blur */
            z-index: 1;
        }
        .banner img {
            position: relative;
            z-index: 2;
            max-height: 100%;
            max-width: 80%; /* adjust how wide the main image should be */
            object-fit: contain;
            border-radius: 6px; /* optional for rounded look */
        }
    </style>
@endsection
@section('content')
    <main>
        <section id="about">
            <div class="container">
                <div class="banner mb-4">
                    <img src="{{url('assets/images/banner/about_458236459827.png')}}" alt="Agro Machinery Founder Image" class="">
                </div>
                <h2 class="mb-4 fw-bold">Jai Agro Mechinary</h2>
                <p class="lh-lg pb-3">“AGROMECH ENGINEERS” is a ‘Proprietorship Concern’, We introduced ourselves as a manufacturers of 
                modern rice mill machineries, Grain cleaning equipment, Food processing equipment’s and agro based 
                machineries.</p>

                <p class="lh-lg pb-3">Our unit was started in the year 1982 as a regular manufactures of grain processing equipment with  our own design. </p>

                <p class="lh-lg pb-3">Our Machineries are tested by agricultural university, Tamilnadu as per I.S.I Standard. Ministry of 
                food processing Dept. New Delhi approved our Rice Mill Machineries. </p>

                <p class="lh-lg pb-3">Our Rice Mill Machineries are approved by ‘Ministry of Food Processing, Government of India’. The 
                Company is approved by T.I.I.C, KFC, KSFC, DPM and Other Financial Institution. Company has close 
                associate with 
                </p>
                <ul class="ps-5 fw-bold">
                    <li class="pb-2">Tamilnadu Agricultural University, Coimbatore. </li>
                    <li class="pb-2">TNAU/Madurai </li>
                    <li class="pb-2">Paddy processing Research Centre, Tanjavoor. </li>
                    <li class="pb-2">Associate Director of Research, Pattambi. </li>
                    <li class="pb-2">AFPRO, Vizianagaram. </li>
                    <li class="pb-2">C.S.IR/New Delhi </li>
                    <li class="pb-2">CFTRI/Mysore and Other Research Institute. </li>
                </ul>
                <p class="lh-lg pb-3">We have completed 100 Modern Rice Mills in Kerala State under the Government of India’s subsidy 
                scheme. </p>

                <p class="lh-lg pb-3">Our Ragi Cleaning Machines are very familiar in karanataka. We have supplied more than 500 units, Mainly Bangalore Rural, Bangalore [South], Kolar, Mandiya, Tumkur, Chitradurga & Hassan Districts.</p> 

                <p class="lh-lg pb-3">We have supplied Ragi Cleaning machine to Karnataka from 1991 (more than 20 years). Our customers 
                are from Hoskte, Anekkal, Bangalore, Nelamangala, Devanahalli, anakapura, Magadi, Kolar, Sirnivasapur, 
                K.G.F, Sidlagotta, Bangapet, Chickbellapur, Malur, Mulbagal, Chintamani, Tumkur, C.N. Halli, Hassan, Doddabellapur Chitradurga.</p> 

                <p class="lh-lg pb-3">Our millet cleaner is suitable for all type of millets and it is available at TN.AU. Coimbatore.
                MYRADA, Gobi. We are associate with all millet development projects.</p>

                <p class="lh-lg pb-3">We also export the cleaning machines to Sri Lanka, Nigeria & Nepal.</p>

                <h3 class="mb-4 fw-bold">The Present range of activities include the following:</h3>
                <ul class="ps-3 ps-lg-5">
                    <ol class="pb-2">1. Design & Development of new technological applications. </ol>
                    <ol class="pb-2">2. Food processing equipment’s fabrication, erection, commissioning and trial run. </ol>
                    <ol class="pb-2">3. Consultation of project and process know – how. </ol>
                    <ol class="pb-2">4. Modernisation of rice mill plants – par Boiling, Drying & Milling operations. </ol>
                </ul>
                <p class="lh-lg pb-3">‘AGROMECH’ has its own research & development department whose function is to adopt the model of 
                the machineries according to the requirements of the customer.</p>
            </div>
        </section>
        <section id="mission_vision">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card rounded-4 p-3 mission-crd" data-aos="fade-right">
                            <div class="d-flex align-items-center gap-2">
                                <div class="card p-2 rounded-3">
                                    <img src="{{url('assets/images/mission_24049870.png')}}" alt="Agro Machinery Founder Image" class="">
                                </div>
                                <h5 class="fw-bold">Our Mission</h5>
                            </div>
                            <hr>
                            <p class="lh-lg">To revolutionize farming by providing high-quality machinery that enhances efficiency, supports sustainable practices, and improves the livelihoods of farmers worldwide.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card rounded-4 p-3 vision-crd" data-aos="fade-left">
                            <div class="d-flex align-items-center gap-2">
                                <div class="card p-2 rounded-3">
                                    <img src="{{url('assets/images/vision_24049868.png')}}" alt="Agro Machinery Founder Image" class="">
                                </div>
                                <h5 class="fw-bold">Our Vision</h5>
                            </div>
                            <hr>
                            <p class="lh-lg">To revolutionize farming by providing high-quality machinery that enhances efficiency, supports sustainable practices, and improves the livelihoods of farmers worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="founder">
            <div class="container py-3 py-lg-5 mt-3 mt-lg-5">
                <div class="row">
                    <div class="col-5 sys-view">
                        <img src="{{url('assets/images/about/founder_24049872.png')}}" data-aos="fade-right" alt="Agro Machinery Founder Image" class="w-100">
                    </div>
                    <div class="col-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                        <h4 class="mb-4 fw-bold" data-aos="fade-left">Founder Message</h4>
                        <img src="{{url('assets/images/about/founder_24049872.png')}}" alt="Agro Machinery Founder Image" class="mb-3 mbl-view w-75">
                        <p class="lh-lg pb-3" data-aos="fade-left">At [Your Company Name], we are committed to empowering farmers with reliable, innovative, and efficient agricultural machinery that makes farming smarter, easier, and more productive. With years of experience in the agri-tech industry, we understand the challenges farmers face and work tirelessly to provide solutions that save time, reduce labor, and increase yields.</p>
                        <p class="lh-lg pb-3" data-aos="fade-left">Our wide range of products—from tractors and tillers to harvesters and precision equipment—are designed with modern technology while keeping farmers’ needs at the core. We focus on durability, affordability, and sustainability to ensure that every machine delivers long-term value in the field.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="manufacturing">
            <div class="container my-3 my-lg-5">
                <h3 class="mb-4 fw-bold text-center">Manufacturing Places</h3>
                <div class="row gy-3">
                    <div class="col-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4"><img src="{{url('assets/images/about/Rectangle 20.png')}}" data-aos="fade-right" data-aos-duration="1000" alt="Agro Machinery Founder Image" class="w-100"></div>
                    <div class="col-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4"><img src="{{url('assets/images/about/Rectangle 21.png')}}" data-aos="fade-up" data-aos-duration="1000" alt="Agro Machinery Founder Image" class="w-100"></div>
                    <div class="col-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4"><img src="{{url('assets/images/about/Rectangle 22.png')}}" data-aos="fade-left" data-aos-duration="1000" alt="Agro Machinery Founder Image" class="w-100"></div>
                </div>
            </div>
        </section>
        <section id="future">
            <div class="futr_wdt py-3 py-lg-5">
            <h3 class="text-white text-center fw-bold mb-4">Together, Let’s Grow the Future of Farming</h3>
            <p class="text-white text-center mb-4 lh-lg">With cutting-edge technology and decades of expertise, we design agricultural machinery that delivers superior performance, fuel efficiency, and long-lasting</p>
            <div class="d-flex justify-content-center gap-3">
                    <a href="{{url('/products')}}" data-aos="fade-right" data-aos-duration="1000" class="text-decoration-none py-2 px-3 rounded-2 agro_bg_clr text-white"><span class="me-3">Visit All Products</span><svg width="14" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <a href="{{url('/contact-us')}}" data-aos="fade-left" data-aos-duration="1000" class="text-decoration-none py-2 px-3 rounded-2 mech_bg_clr text-white"><span class="me-3">Contact Us</span><svg width="14" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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