@extends('layouts.app')

@php
    $title = "Jai Agro Machinery | Leading Web and Mobile App Development in Coimbatore";
    $meta_title = "Jai Agro Machinery provides best IT solutions for businesses";
    $meta_description = "Skyraan is an IT company located in Coimbatore that provides services such as Web development, mobile app development, digital marketing, and branding";
@endphp

@section('customstyle')
    <link href="{{asset('assets/css/machinery/product.css')}}" rel="stylesheet">
    <style>
        .banner {
            width: 100%;
            background: 
                url('{{ asset('assets/images/banner/banner_24049947.png') }}') left center / 50% 100% no-repeat,
                linear-gradient(to right, #3AB05B 50%, #3AB05B 50%);
            background-blend-mode: color-burn;
        }
    </style>
@endsection
@section('content')
    <main>
        <section id="products">
            <div class="banner py-4">
                <div class="container">
                    <div class="bnr_wdt">
                        <h3 class="fw-bold text-white mb-3" data-aos="fade-right" data-aos-duration="1000">Our Products</h3>
                        <p class="text-white lh-lg mb-0" data-aos="fade-right" data-aos-duration="1000">Our wide range of products—from tractors and tillers to harvesters and precision equipment—are designed with modern technology while keeping farmers’ needs at the core.</p>
                    </div>
                </div>
            </div>
            <div class="main mx-3 mx-lg-5 py-3 px-3 px-lg-5">
                <div class="row gy-2">
                    @foreach($products as $prdt)
                        <div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 py-2">
                            <div class="card justify-content-between border-0 p-2 h-100" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{$contentUrl.$prdt->image}}" alt="{{$prdt->title}}" class="w-100">
                                <div class="py-2 fw-bold py-md-3 product_title"><span data-aos="fade-right">{{$prdt->title}}</span></div>
                                <div>
                                    <div class="pb-2"><small data-aos="fade-right">Overall Dimension ( L*W*H ) </small></div>
                                    <div class="pb-2 fw-bold"><small data-aos="fade-right">{{$prdt->dimension}}</small></div>
                                    <div class="pb-2"><small data-aos="fade-right">Weight</small></div>
                                    <div class="pb-3"><small data-aos="fade-right">{{$prdt->weight}}</small></div>
                                    <a href="{!! url('/products/' . strtolower(str_replace(' ', '-', strip_tags($prdt->title)))) !!}" class="agro_bg_clr text-white text-decoration-none py-1 px-2 rounded-1 d-flex justify-content-center gap-2 align-items-center"><div>View More Details </div><svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.11685 5.05609L1.90935 0.848591C1.7376 0.677861 1.50527 0.582031 1.2631 0.582031C1.02093 0.582031 0.7886 0.677861 0.616852 0.848591C0.530934 0.933807 0.462739 1.03519 0.416201 1.1469C0.369663 1.2586 0.345703 1.37841 0.345703 1.49942C0.345703 1.62044 0.369663 1.74025 0.416201 1.85195C0.462739 1.96366 0.530934 2.06504 0.616852 2.15026L4.83352 6.34859C4.91944 6.43381 4.98763 6.53519 5.03417 6.6469C5.08071 6.7586 5.10467 6.87841 5.10467 6.99942C5.10467 7.12044 5.08071 7.24025 5.03417 7.35195C4.98763 7.46366 4.91944 7.56504 4.83352 7.65026L0.616852 11.8486C0.44424 12.02 0.346785 12.2529 0.345925 12.4962C0.345066 12.7394 0.440873 12.9731 0.612269 13.1457C0.783665 13.3183 1.01661 13.4157 1.25986 13.4166C1.50311 13.4175 1.73674 13.3217 1.90935 13.1503L6.11685 8.94276C6.63184 8.42713 6.9211 7.72818 6.9211 6.99942C6.9211 6.27067 6.63184 5.57172 6.11685 5.05609Z" fill="white"/>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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