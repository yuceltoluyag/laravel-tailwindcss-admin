<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    @stack('css')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="bg-gray-100">
@include('layouts.backend.partials.navbar')
<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    @include('layouts.backend.partials.sidebar')
    <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">
            @yield('content')
        </div>
        <!-- end content -->

</div>

<!-- end wrapper -->

@include('layouts.backend.partials.footer')
@stack('js')
</body>
</html>
