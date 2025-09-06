@extends('layouts.app')

@php
    $title = "Jai Agro Machinery | Leading Web and Mobile App Development in Coimbatore";
    $meta_title = "Jai Agro Machinery provides best IT solutions for businesses";
    $meta_description = "Skyraan is an IT company located in Coimbatore that provides services such as Web development, mobile app development, digital marketing, and branding";
@endphp

@section('customstyle')
    <link href="{{asset('assets/css/machinery/video.css')}}" rel="stylesheet">
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
        <section id="videos">
            <div class="banner py-4">
                <div class="container">
                    <div class="bnr_wdt">
                        <h3 class="fw-bold text-white mb-3" data-aos="fade-right" data-aos-duration="1000">Videos</h3>
                        <p class="text-white lh-lg mb-0" data-aos="fade-right" data-aos-duration="1000">Our wide range of products—from tractors and tillers to harvesters and precision equipment—are designed with modern technology while keeping farmers’ needs at the core.</p>
                    </div>
                </div>
            </div>
            <div class="main mx-3 mx-lg-5 py-4 px-3 px-lg-5">
                <div class="row gy-4">
                    @foreach($videos as $video)
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            @if($video->video_type == '1')
                                <div class="card vd_crd border-0 rounded-0 video_modal_img" data-aos="fade-up" data-aos-duration="1000" data-id="{{$video->id}}" role="button" style="background: url('{{ $contentUrl.$video->thumb_image }}') left center / 100% 100% no-repeat,linear-gradient(to bottom, #b8b8b8ff, #b8b8b8ff, #b8b8b8ff, #000000ba);background-blend-mode: multiply;">
                                    <video class="my-3 w-100 d-none" controls>
                                        <source src="{{ $contentUrl.$video->video }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card rounded-circle bg-dark bg-opacity-50 p-2">
                                        <svg width="22" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.683 12.5883C30.4835 13.014 31.1531 13.6494 31.62 14.4266C32.0869 15.2037 32.3336 16.0933 32.3336 16.9999C32.3336 17.9066 32.0869 18.7961 31.62 19.5733C31.1531 20.3505 30.4835 20.9859 29.683 21.4116L8.32964 33.0233C4.8913 34.8933 0.667969 32.4599 0.667969 28.6133V5.38828C0.667969 1.53828 4.8913 -0.893391 8.32964 0.974943L29.683 12.5883Z" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            @else
                                <a href="{{ $video->video }}" target="_blank" rel="noopener noreferrer">
                                    <div class="card vd_crd border-0 rounded-0" data-aos="fade-up" data-aos-duration="1000" data-id="{{$video->id}}" role="button" style="background: url('{{ $contentUrl.$video->thumb_image }}') left center / 100% 100% no-repeat,linear-gradient(to bottom, #b8b8b8ff, #b8b8b8ff, #b8b8b8ff, #000000ba);background-blend-mode: multiply;">
                                        <div class="card rounded-circle bg-dark bg-opacity-50 p-2">
                                            <svg width="22" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.683 12.5883C30.4835 13.014 31.1531 13.6494 31.62 14.4266C32.0869 15.2037 32.3336 16.0933 32.3336 16.9999C32.3336 17.9066 32.0869 18.7961 31.62 19.5733C31.1531 20.3505 30.4835 20.9859 29.683 21.4116L8.32964 33.0233C4.8913 34.8933 0.667969 32.4599 0.667969 28.6133V5.38828C0.667969 1.53828 4.8913 -0.893391 8.32964 0.974943L29.683 12.5883Z" fill="white"/>
                                            </svg>
                                        </div>
                                    </div> 
                                </a>
                            @endif
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
    <script>
        var baseurl = "{{url('/')}}";
        AOS.init({
            once: true
        });
    </script>
    <script src="{{asset('assets/js/machinery/video.js')}}"></script>
@endsection