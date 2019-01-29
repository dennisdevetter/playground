<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'frozengraphics.be')</title>

    <!-- Fonts -->
    <!--<link rel="stylesheet" type="text.css" href="https://fonts.googleapis.com/css?family=Nunito:200,600"/>-->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"/>
</head>
<body>
    <div id="app" class="flex-center position-ref full-height">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script charset="utf-8" src="{{ mix('js/manifest.js') }}" ></script>
    <script charset="utf-8" src="{{ mix('js/vendor.js') }}"></script>
    <script charset="utf-8" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
