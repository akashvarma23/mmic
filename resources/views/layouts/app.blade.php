<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="{{ asset('favicon.ico') }} ">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    @yield('tag')

    <title>{{ config('app.name', '') }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" > -->
    @yield('css')
    <link href="{{ asset('css/dev.css') }}" rel="stylesheet" >
    
    @yield('js-head')
</head>
<body>
    <div id="app">
        

        @includeIf('nav-top')

        @yield('content')

        @includeIf('footer')

    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.form.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    @yield('js-body')
    <script src="{{ asset('js/dev.js') }}" type="text/javascript"></script>
</body>
</html>
