<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/svg/safari-pinned-tab.svg" color="#5bbad5">

    <!-- meta keys -->
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Web title -->
    <title>@yield('title', 'frozengraphics.be - IT Consultancy')</title>

    <!-- Fonts -->
    <!--<link rel="stylesheet" type="text.css" href="https://fonts.googleapis.com/css?family=Nunito:200,600"/>-->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"/>
</head>
<body>
    <!-- App -->
    <div id="app" class="flex-center position-ref full-height">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script charset="utf-8" src="{{ mix('js/manifest.js') }}" ></script>
    <script charset="utf-8" src="{{ mix('js/vendor.js') }}"></script>
    <script charset="utf-8" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
