<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        @include('layouts.style')
        @yield('customstyle')
    </head>
    <body>
        <div id="app">
            @include('layouts.navbar')
            <main>
                <!-- <div id="loaders" class="loader">
                    <div class="book">
                        <div class="inner">
                            <img src="{{url('assets/images/logo/53e0228d2974f464887e16225903a69bdf5b51c0.png')}}" alt="Jai Agro Machinery" class="w-100"/>
                        </div>
                    </div>
                </div> -->
                @yield('content')
            </main>
            @include('layouts.footer')
        </div>
    </body>
    @include('layouts.script')
    <script>
        var baseurl = "{{url('/')}}";
        $('#loaders').show().delay(500).fadeOut ('slow');

        $(function(){
            var offset = 200;
            var duration = 200;
            $(window).scroll(function() {
                if ($(this).scrollTop() > offset) {
                    $('#scroll-top').fadeIn(duration);
                } else {
                    $('#scroll-top').fadeOut(duration);
                }
            });
        });
    </script>
    @yield('customscript')
</html>
