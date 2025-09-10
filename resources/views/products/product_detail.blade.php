@extends('layouts.app')

@php
    $title = "AGROMECH ENGINEERS | Leading Web and Mobile App Development in Coimbatore";
    $meta_title = $product_detail->meta_title;
    $meta_description = $product_detail->meta_description;
@endphp

@section('customstyle')
    <link href="{{asset('assets/css/machinery/product.css')}}" rel="stylesheet">
@endsection
@section('content')
    <main>
        <section id="product_detail">
            <div class="banner py-4">
                <div class="mx-3 mx-lg-5 px-3 px-lg-5">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="{{url('/')}}" class="text-dark b-size text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/products')}}" class="text-dark b-size text-decoration-none">Products</a></li>
                            <li class="breadcrumb-item active b-size text-dark" aria-current="page">{{$product_detail->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="main mx-3 mx-lg-5 pb-3 px-3 px-lg-5">
                <div class="row">
                    <div class="col-4 sys-view">
                        <img src="{{$contentUrl.$product_detail->image}}" alt="{{$product_detail->title}}" class="w-100 h-100"/>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                        <h3 class="fw-bold mb-3">{{$product_detail->title}}</h3>
                        <div class="my-3 mbl-view">
                            <img src="{{$contentUrl.$product_detail->image}}" alt="{{$product_detail->title}}" class="w-75 h-100"/>
                        </div>
                        <div class="">{!! $product_detail->description !!}</div>
                    </div>
                </div>
                
                <div class="py-4">
                    <h4 class="mb-3 fw-bold">Specifications</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center align-middle">
                            <thead class="">
                                <tr>
                                    <th><div class="table_values">Type</div></th>
                                    @foreach($columns as $col)
                                        <th><div class="table_values">{{ $col }}</div></th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rows as $rowName => $rowValues)
                                    <tr>
                                        <td class="fw-bold"><div class="table_values">{{ $rowName }}</div></td>
                                        @foreach($columns as $col)
                                            <td><div class="table_values">{{ $rowValues[$col] ?? '-' }}</div></td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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