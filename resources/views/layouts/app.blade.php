<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{Vite::asset('resources/js/owl.carousel.min.js')}}"></script>
    <!-- Scripts -->
    @vite([
    'resources/css/owl.carousel.min.css',
    'resources/js/vendor/modernizr-3.5.0.min.js',
    'resources/sass/app.scss',
    'resources/js/app.js',
    'resources/css/bootstrap.min.css',
    'resources/css/magnific-popup.css',
    'resources/css/font-awesome.min.css',
    'resources/css/themify-icons.css',
    'resources/css/nice-select.css',
    'resources/css/flaticon.css',
    'resources/css/animate.css',
    'resources/css/slicknav.css',
    'resources/css/style.css',
    ])
    @livewireStyles
</head>
<body>
    <div id="app">
        @include('nav')

        <main class="py-4">
            @yield('content')
        </main>
        @include('footer')
    </div>
    <script src="{{Vite::asset('resources/js/popper.min.js')}}"></script>
    <script src="{{Vite::asset('resources/js/wow.min.js')}}"></script>
    <script src="{{Vite::asset('resources/js/jquery.waypoints.js')}}"></script>

    @vite([
    'resources/js/isotope.pkgd.min.js',
    'resources/js/ajax-form.js',
    'resources/js/jquery.counterup.min.js',
    'resources/js/imagesloaded.pkgd.min.js',
    'resources/js/scrollIt.js',
    'resources/js/jquery.scrollUp.min.js',
    'resources/js/nice-select.min.js',
    'resources/js/jquery.slicknav.min.js',
    'resources/js/jquery.magnific-popup.min.js',
    'resources/js/plugins.js',
    'resources/js/contact.js',
    'resources/js/jquery.ajaxchimp.min.js',
    'resources/js/jquery.form.js',
    'resources/js/jquery.validate.min.js',
    'resources/js/mail-script.js',
    'resources/js/main.js'
    ])
    <script src="{{Vite::asset('resources/js/main.js')}}"></script>
    @livewireScripts
</body>
</html>
