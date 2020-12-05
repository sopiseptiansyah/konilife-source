@extends('layouts.main')

@section('title', 'Store, Temukan Merchant Terdekat DiKotamu')

@section('meta')
    <!-- Description -->
    <meta name="description" content="Temukan Merchant Terdekat DiKotamu">
    <meta name="keywords" content="Obat, Pencegahan, Solusi Alam, Konilife, Kesehatan, Healthy">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:title" content="Konilife - Store, Temukan Merchant Terdekat DiKotamu">
    <meta property="og:description" content="Temukan Merchant Terdekat DiKotamu">
    <meta property="og:image" content="{{asset('meta/website-og.jpg')}}">
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Solusi Alam, Solusi Konilife" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{url('/')}}">
    <meta property="twitter:title" content="Konilife - Store, Temukan Merchant Terdekat DiKotamu">
    <meta property="twitter:description" content="Temukan Merchant Terdekat DiKotamu">
    <meta property="twitter:image" content="{{asset('meta/website-og.jpg')}}">
@endsection

@section('content')
    <div id="store">
    </div>
@endsection

@section('scripts')
<script src="{{mix('js/store.js')}}"></script>
@endsection
