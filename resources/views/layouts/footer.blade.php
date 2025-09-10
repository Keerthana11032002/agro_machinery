<style>
    .foot {
        background: #414242!important;
    }
</style>
<a id="scroll-top" href="#" target="_blank"><img src="{{asset('assets/images/icons8-whatsapp-48.png')}}" alt="Scroll to Top"/></a>
<footer>
    <div class="foot pt-3 pt-lg-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="mx-3 mx-lg-5">
                <div class="row px-0 px-lg-3">
                    <div class="col-12 col-md-5 col-lg-6 col-xl-6 col-xxl-6 reputation">
                        <div class="foot_abt">
                            <img src="{{$contentUrl.$setting->logo}}" class="foot_logo pb-3" alt="Scroll to Top"/>
                            <p class="my-3 fs-6">We prioritize your trust by ensuring that all your information is kept safe and secure through advanced encryption and privacy protection. Our platform is design.</p>
                            <div>Follow Us On</div>
                            <div class="d-flex gap-2 my-3" id="share">
                                <a target="_blank" class="facebook" href="https://www.facebook.com/Skyraan-Technologies-101287766001025"><img src="{{asset('assets/images/social_media/facebok_24049856.png')}}" alt="AGROMECH ENGINEERS Facebook"/></a>
                                <a target="_blank" class="instagram" href="https://www.linkedin.com/company/82362935/admin/"><img src="{{asset('assets/images/social_media/instagram_8234576.png')}}" alt="AGROMECH ENGINEERS Instagram"/></a>
                                <a target="_blank" class="twitter" href="https://twitter.com/skyraantech"><img src="{{asset('assets/images/social_media/twitter_92372287.png')}}" alt="AGROMECH ENGINEERS Twitter"/></a>
                                <a target="_blank" class="youtube" href="https://www.instagram.com/skyraantechnologies?igsh=MWljN3owMmV6Y3ZoMA=="><img src="{{asset('assets/images/social_media/youtube_35321645.png')}}" alt="AGROMECH ENGINEERS YouTube channel"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2 col-xl-2 col-xxl-2 support_gf">
                        <ul>
                            <h5 class="mb-3">Quick Links</h5>
                            <div class="sys-view">
                                <li class="p-1 lh-lg fw-light"><a href="{{url('/')}}">Home</a></li>
                                <li class="p-1 lh-lg fw-light"><a href="{{url('/about-us')}}">About us</a></li>
                                <li class="p-1 lh-lg fw-light"><a href="{{url('/products')}}">Products</a></li>
                                <li class="p-1 lh-lg fw-light"><a href="{{url('/spares')}}">Spares</a></li>
                                <li class="p-1 lh-lg fw-light"><a href="{{url('/gallery')}}">Gallery</a></li>
                                <li class="p-1 lh-lg fw-light"><a href="{{url('/videos')}}">Videos</a></li>
                                <li class="p-1 lh-lg fw-light"><a href="{{url('/contact-us')}}">Contact</a></li>
                            </div>
                            <div class="mbl-view">
                                <div class="row">
                                    <div class="col-6">
                                        <li class="p-1 lh-lg fw-light"><a href="{{url('/')}}">Home</a></li>
                                        <li class="p-1 lh-lg fw-light"><a href="{{url('/about-us')}}">About us</a></li>
                                        <li class="p-1 lh-lg fw-light"><a href="{{url('/products')}}">Products</a></li>
                                        <li class="p-1 lh-lg fw-light"><a href="{{url('/spares')}}">Spares</a></li>
                                    </div>
                                    <div class="col-6">
                                        <li class="p-1 lh-lg fw-light"><a href="{{url('/gallery')}}">Gallery</a></li>
                                        <li class="p-1 lh-lg fw-light"><a href="{{url('/videos')}}">Videos</a></li>
                                        <li class="p-1 lh-lg fw-light"><a href="{{url('/contact-us')}}">Contact</a></li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ps-3 ps-lg-5">
                        <h5>Contact Us</h5>
                        <div class="d-flex mail my-4">
                            <img src="{{asset('assets/images/mail_932485.png')}}" alt="Contact Us" class="me-3 pt-1"/>
                            <div><div class="fw-bold">Email</div><a href="mailto:{{$setting->mail}}" class=" fw-light">{{$setting->mail}}</a></div>
                        </div>
                        <div class="d-flex phone my-4">
                            <img src="{{asset('assets/images/phone_28364298.png')}}" alt="Contact Us" class="me-3 pt-1"/>
                            <div><div class="fw-bold">Phone</div><a href="" class=" fw-light">{{$setting->number}}</a></div>
                        </div>
                        <div class="d-flex address fs-6">
                            <img src="{{asset('assets/images/location_2075835.png')}}" alt="address" class="me-3 pt-1"/>
                            <div class="cont"><div class="fw-bold">Location</div><div class=" fw-light">{{$setting->location}}</div></div>
                        </div>
                    </div>
                </div>  
                <hr>
                <div class="col-md d-md-flex d-lg-flex justify-content-between pb-3 col-sm text-center">
                    <div class="copy">
                        <div class="d-flex gap-2" style="font-size: 14px;"><svg width="20" height="20" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="34" height="34" rx="17" fill="white"/>
                            <path d="M10.774 17.218C10.774 15.994 11.05 14.896 11.602 13.924C12.154 12.94 12.904 12.172 13.852 11.62C14.812 11.068 15.874 10.792 17.038 10.792C18.406 10.792 19.6 11.122 20.62 11.782C21.64 12.442 22.384 13.378 22.852 14.59H20.89C20.542 13.834 20.038 13.252 19.378 12.844C18.73 12.436 17.95 12.232 17.038 12.232C16.162 12.232 15.376 12.436 14.68 12.844C13.984 13.252 13.438 13.834 13.042 14.59C12.646 15.334 12.448 16.21 12.448 17.218C12.448 18.214 12.646 19.09 13.042 19.846C13.438 20.59 13.984 21.166 14.68 21.574C15.376 21.982 16.162 22.186 17.038 22.186C17.95 22.186 18.73 21.988 19.378 21.592C20.038 21.184 20.542 20.602 20.89 19.846H22.852C22.384 21.046 21.64 21.976 20.62 22.636C19.6 23.284 18.406 23.608 17.038 23.608C15.874 23.608 14.812 23.338 13.852 22.798C12.904 22.246 12.154 21.484 11.602 20.512C11.05 19.54 10.774 18.442 10.774 17.218Z" fill="#007A5E"/>
                            </svg>
                            Jai Agro</div>
                    </div>
                    <div class="term" style="font-size: 14px;">
                        <a href="{{url('/privacy-policy')}}" target="_blank" class="me-3">Privacy Policy</a> <a href="{{url('/terms')}}" target="_blank">Terms And Condition</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>