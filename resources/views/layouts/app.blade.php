<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Voting System') }}</title>

    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}" defer></script>  --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('landing/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Pixel CSS -->
    <link type="text/css" href="{{ ('landing/assets/css/neumorphism.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ ('landing/assets/css/toastr.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ ('landing/assets/css/vue-select.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vex/vex.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/vex/vex-theme-plain.css') }}" />
</head>
<body>
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>



    <!-- Core -->
    <script src="{{ asset('landing/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/headroom.js/dist/headroom.min.js') }}"></script>
    
    <!-- Vendor JS -->
    <script src="{{ asset('landing/assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/nouislider/distribute/nouislider.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('landing/assets/vendor/prismjs/prism.js') }}"></script>
    
    <script async defer src="{{ asset('https://buttons.github.io/buttons.js') }}"></script>
    
    <!-- Neumorphism JS -->
    <script src="{{ asset('landing/assets/js/neumorphism.js') }}"></script>
    <script src="{{ asset('landing/assets/js/toastr.js') }}"></script>
    <script src="{{ asset('landing/assets/js/vue.js') }}"></script>
    <script src="{{ asset('landing/assets/js/axios.js') }}"></script>
    <script src="{{ asset('landing/assets/js/moment.js') }}"></script>
    <script src="{{ asset('landing/assets/js/vue-moment.js') }}"></script>
    <script src="{{ asset('landing/assets/js/vue-pagination.js') }}"></script>
    <script src="{{ asset('landing/assets/js/vue-select.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vex/vex.combined.min.js') }}"></script>
    <script>
        const base_url = "{{ url('/') }}";
        vex.defaultOptions.className = 'vex-theme-plain'
        axios.defaults.baseURL = base_url;
        axios.defaults.headers.common['X-CSRF-TOKEN'] = "{{ csrf_token() }}";
        axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
      </script>

    @yield('scripts')
</body>
</html>
