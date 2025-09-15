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
                <div id="loaders" class="loader">
                    <div class="book">
                        <div class="inner">
                            <img src="{{url('assets/images/logo/screenshot2025293845728.png')}}" alt="{{$setting->title}}" class="w-100"/>
                        </div>
                    </div>
                </div>
                @yield('content')
            </main>
            @include('layouts.footer')
        </div>
    </body>
    @include('layouts.script')
    <script>
        var baseurl = "{{url('/')}}";
        $('#loaders').show().delay(500).fadeOut ('slow');
    </script>
    @yield('customscript')
</html>
