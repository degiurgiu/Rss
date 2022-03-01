<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rss Parse') }}</title>
    <!-- Scripts -->


    <!-- Fonts -->


    <!-- Styles -->
    <link href="{{ asset('css/app.css?ver=' . config('version.css')) }}" rel="stylesheet">

</head>
<body>
<div class="container-fluid mobile-padding " >
    @yield('content')
</div>

<script src="{{ asset('js/app.js?ver=' . config('version.js')) }}" defer></script>
</body>

</html>
