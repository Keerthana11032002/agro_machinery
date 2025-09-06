@extends('layouts.app')

@php
    $title = "Jai Agro Machinery | Leading Web and Mobile App Development in Coimbatore";
    $meta_title = "Jai Agro Machinery provides best IT solutions for businesses";
    $meta_description = "Skyraan is an IT company located in Coimbatore that provides services such as Web development, mobile app development, digital marketing, and branding";
@endphp

@section('customstyle')
    <link href="{{asset('assets/css/machinery/spares.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/machinery/gallery.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .banner {
            width: 100%;
            background: 
                url('{{ asset('assets/images/banner/banner_24049947.png') }}') left center / 50% 100% no-repeat,
                linear-gradient(to right, #3AB05B 50%, #3AB05B 50%);
            background-blend-mode: color-burn;
        }
        @media (max-width: 1024px) {
            .banner {
                background: 
                    url('{{ asset('assets/images/banner/banner_24049947.png') }}') left center / 80% 100% no-repeat,
                    linear-gradient(to right, #3AB05B 50%, #3AB05B 50%);
            }
        }
        @media (max-width: 600px) {
            .banner {
                background: 
                    url('{{ asset('assets/images/banner/banner_24049947.png') }}') left center / 100% 100% no-repeat,
                    linear-gradient(to right, #3AB05B 50%, #3AB05B 50%);
            }
        }
        
        #exampleModal .modal-content {
            border:none!important;
            background:none!important;
            position: relative;
        }
        #exampleModal .modal-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            /* width: 100%; */
            height: 100%;
            /* background-size: cover; */
            filter: blur(1px);
            background-repeat: round!important;
            background-size: 100% 100%!important;
            width:100%;
        }
    </style>
@endsection
@section('content')
    <main>
        <section id="spares">
            <div class="banner py-4">
                <div class="container">
                    <div class="bnr_wdt">
                        <h3 class="fw-bold text-white mb-3" data-aos="fade-right" data-aos-duration="1000">Images</h3>
                        <p class="text-white lh-lg mb-0" data-aos="fade-right" data-aos-duration="1000">Our wide range of products—from tractors and tillers to harvesters and precision equipment—are designed with modern technology while keeping farmers’ needs at the core.</p>
                    </div>
                </div>
            </div>
            <div class="main mx-3 mx-lg-5 p-3 p-lg-5">
                <div class="row gy-4">
                    @foreach($galleries as $glry)
                        <div class="col-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="card rounded-0 border-0 p-3 h-100 gallery_modal_img" data-aos="fade-up" data-aos-duration="1000" data-id="{{$glry->id}}" role="button">
                                <img src="{{$contentUrl.$glry->image}}" alt="{{$glry->title}}" class="mb-3 w-100 h-100">
                                <span class="text-center">{{$glry->title}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="text-end" id="close_button">
                            <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"><svg width="16" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 1L11 11M11 11L1 21M11 11L21 21M11 11L1 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </button>
                        </div>
                        <div class="" id="previewgallery">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('customscript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   
    <script>
        var baseurl = "{{url('/')}}";
        AOS.init({
            once: true
        });
    </script>
    <script src="{{asset('assets/js/machinery/gallery.js')}}"></script>
@endsection