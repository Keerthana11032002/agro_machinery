<div class="sys-view tab-view-no">
    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-0 px-5" id="nav-nbv">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{url('/')}}" style="width: 12em;"><img src="{{$contentUrl.$setting->logo}}" alt="{{$setting->title}}" class="navbar-logo ps-2"/><h5 class="agro_txt_clr mb-0">{{$setting->title}}</h5></a>
            <button class="navbar-toggler" id="toggleButton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse hidden" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item @if(Route::currentRouteName() == 'home') agro_bg_clr @endif">
                    <a class="nav-link text-decoration-none py-1 mx-2 text-dark" id="home" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'about' ) agro_bg_clr @endif">
                    <a class="nav-link text-decoration-none py-1 mx-2 text-dark" id="about" aria-current="page" href="{{url('/about-us')}}">About Us</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'product' ) agro_bg_clr @endif">
                    <a class="nav-link text-decoration-none py-1 mx-2 text-dark" id="product" aria-current="page" href="{{url('/products')}}">Products</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'spare' ) agro_bg_clr @endif">
                    <a class="nav-link text-decoration-none py-1 mx-2 text-dark" id="spare" aria-current="page" href="{{url('/spares')}}">Spares</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'gallery' ) agro_bg_clr @endif">
                    <a class="nav-link text-decoration-none py-1 mx-2 text-dark" id="gallery" aria-current="page" href="{{url('/gallery')}}">Gallery</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'video' ) agro_bg_clr @endif">
                    <a class="nav-link text-decoration-none py-1 mx-2 text-dark" id="video" aria-current="page" href="{{url('/videos')}}">Videos</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'contact' ) agro_bg_clr @endif">
                    <a class="nav-link text-decoration-none py-1 mx-2 text-dark" id="contact" aria-current="page" href="{{url('/contact-us')}}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="mbl-view tab-view">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid d-flex px-2">
            <a class="navbar-brand d-flex align-items-center" href="{{url('/')}}"><img src="{{url('assets/images/logo/53e0228d2974f464887e16225903a69bdf5b51c0.png')}}" alt="AGROMECH ENGINEERS" class="navbar-logo ps-2"/><h5 class="agro_txt_clr mb-0">AGROMECH ENGINEERS</h5></a>
            <button class="navbar-toggler border-0 px-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a href="{{url('/')}}" class="d-flex text-decoration-none align-items-center"><img src="{{url('assets/images/logo/53e0228d2974f464887e16225903a69bdf5b51c0.png')}}" alt="AGROMECH ENGINEERS" class="navbar-logo ps-2"/><h5 class="agro_txt_clr mb-0">AGROMECH ENGINEERS</h5></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="padding: 0.45em 0.65em!important;"></button>
                </div>
                <div class="offcanvas-body ps-4">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item @if(Route::currentRouteName() == 'home') agro_bg_clr @endif">
                            <a class="nav-link fw-bold pt-3 ps-3 pb-2" id="home" aria-current="page" href="{{url('/')}}" styel="font-size: 18px!important;padding-top: 0.7rem!important;padding-bottom: 0.8rem!important;">Home</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'about') agro_bg_clr @endif">
                            <a class="nav-link fw-bold pt-3 ps-3 pb-2" id="about" href="{{url('/about-us')}}" styel="font-size: 18px!important;padding-top: 0.7rem!important;padding-bottom: 0.8rem!important;">About Us</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'product') agro_bg_clr @endif">
                            <a class="nav-link fw-bold pt-3 ps-3 pb-2" id="product" href="{{url('/products')}}" styel="font-size: 18px!important;padding-top: 0.7rem!important;padding-bottom: 0.8rem!important;">Products</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'spare' ) agro_bg_clr @endif">
                            <a class="nav-link fw-bold pt-3 ps-3 pb-2" id="spare" href="{{url('/spares')}}" styel="font-size: 18px!important;padding-top: 0.7rem!important;padding-bottom: 0.8rem!important;">Spares</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'gallery' ) agro_bg_clr @endif">
                            <a class="nav-link fw-bold pt-3 ps-3 pb-2" id="gallery" href="{{url('/gallery')}}" styel="font-size: 18px!important;padding-top: 0.7rem!important;padding-bottom: 0.8rem!important;">Gallery</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'video' ) agro_bg_clr @endif">
                            <a class="nav-link fw-bold pt-3 ps-3 pb-2" id="video" href="{{url('/videos')}}" styel="font-size: 18px!important;padding-top: 0.7rem!important;padding-bottom: 0.8rem!important;">Videos</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'contact' ) agro_bg_clr @endif">
                            <a class="nav-link fw-bold pt-3 ps-3 pb-2" id="contact" href="{{url('/contact')}}" styel="font-size: 18px!important;padding-top: 0.7rem!important;padding-bottom: 0.8rem!important;">Contact</a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a class="nav-link" aria-current="page" href="mailto:JaiAgriagro.@gmail.com"><img src="{{asset('assets/images/mail_932485.png')}}" class="me-2" style="width: 26px;filter: brightness(0) saturate(100%) invert(70%) sepia(31%) saturate(0%) hue-rotate(239deg) brightness(89%) contrast(90%);"/>JaiAgriagro.@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>