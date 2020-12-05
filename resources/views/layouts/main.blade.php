<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(View::hasSection('meta'))
        @yield('meta')
    @else
        <!-- Description -->
        <meta name="description" content="Solusi Alam, Solusi Konilife. Temukan Produk Kesehatan Berbahan Dasar Herbal, Dengan Formulat Terbaik, dan Sesuai Kebutuhan Tubuh Anda">
        <meta name="keywords" content="Obat, Pencegahan, Solusi Alam, Konilife, Kesehatan, Healthy">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{url('/')}}">
        <meta property="og:title" content="Konilife - Solusi Alam, Solusi Konilife">
        <meta property="og:description" content="Solusi Alam, Solusi Konilife. Temukan Produk Kesehatan Berbahan Dasar Herbal, Dengan Formulat Terbaik, dan Sesuai Kebutuhan Tubuh Anda">
        <meta property="og:image" content="{{asset('meta/website-og.jpg')}}">
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:image:alt" content="Solusi Alam, Solusi Konilife" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{url('/')}}">
        <meta property="twitter:title" content="Konilife - Solusi Alam, Solusi Konilife">
        <meta property="twitter:description" content="Solusi Alam, Solusi Konilife. Temukan Produk Kesehatan Berbahan Dasar Herbal, Dengan Formulat Terbaik, dan Sesuai Kebutuhan Tubuh Anda">
        <meta property="twitter:image" content="{{asset('meta/website-og.jpg')}}">
    @endif
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('favicon/favicon.png')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shame.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @yield('styles')
</head>
<body>
    @include('layouts.partials.navbar')
    <main class="main">
        @yield('content')
    </main>
    @if(View::hasSection('footer'))
        @yield('footer')
    @else
        @include('layouts.partials.footer')
    @endif
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @yield('scripts')
</body>
</html>
