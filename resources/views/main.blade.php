<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    @vite([
    'resources/css/app.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/magnific-popup.css',
    'resources/css/font-awesome.min.css',
    'resources/css/themify-icons.css',
    'resources/css/nice-select.css',
    'resources/css/flaticon.css',
    'resources/css/animate.css',
    'resources/css/slicknav.css',
    'resources/css/style.css',
     'resources/js/app.js'
     ])
    @livewireStyles
</head>
<body>

@include('nav')

<div class="container">

    @yield('content')
    @yield('js')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@livewireScripts
</body>
</html>
