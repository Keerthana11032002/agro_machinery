@extends('layouts.app')

@php
    $title = "AGROMECH ENGINEERS | Leading Web and Mobile App Development in Coimbatore";
    $meta_title = "AGROMECH ENGINEERS provides best IT solutions for businesses";
    $meta_description = "Skyraan is an IT company located in Coimbatore that provides services such as Web development, mobile app development, digital marketing, and branding";
@endphp

@section('customstyle')
    <link href="{{asset('assets/css/machinery/spares.css')}}" rel="stylesheet">
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
        <section id="spares">
            <div class="banner py-4">
                <div class="container">
                    <div class="bnr_wdt">
                        <h3 class="fw-bold text-white mb-3" data-aos="fade-right" data-aos-duration="1000">Spares</h3>
                        <p class="text-white lh-lg mb-0" data-aos="fade-right" data-aos-duration="1000">Our wide range of products—from tractors and tillers to harvesters and precision equipment—are designed with modern technology while keeping farmers’ needs at the core.</p>
                    </div>
                </div>
            </div>
            <div class="main mx-3 mx-lg-5 p-3 p-lg-5">
                <div class="row gy-4">
                    @foreach($spares as $index => $spare)
                        <div class="col-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="card border-0 p-3 justify-content-between h-100" data-aos="fade-up" data-aos-duration="1000">
                                <div class="card bg-light border-0 px-2 py-1 z-1">SR.NO. {{$index + 1}}</div>
                                <div class="position-relative">
                                <img src="{{$contentUrl.$spare->image}}" alt="{{$spare->title}}" class=" my-3 w-100">
                                </div>
                                <span class="text-center">{{$spare->title}}</span>
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