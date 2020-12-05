@extends('layouts.main')

@section('title', 'Solusi Alam, Solusi Konilife')

@section('styles')
<!-- LayerSlider stylesheet -->
<link rel="stylesheet" href="{{asset('css/layerslider.css')}}" type="text/css">
<link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
@endsection

@section('content')
<section class="section section__banner">
    <!-- Slider HTML markup -->
    <div id="homeslider" class="primary-banner" style="width:1280px;height:700px;margin:0 auto;">
        <!-- Slide 1-->
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/layer-left.png')}}" alt="bayam" class="ls-layer" style="top:100px; left:-100px;"
                data-ls="offsetxin:left; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
            <img src="{{asset('images/focus-right.png')}}" class="ls-layer" style="top: 50%; left:103%; height: 80%"
                data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:right; easingout:easeInQuad; fadeout:true; rotateout:60;"
                alt="Salad">
            <img src="{{asset('images/focus.png')}}" class="ls-layer" style="top: 150px; left:115px; width: 480px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;"
                alt="livergard">
            <img src="{{asset('images/focus-font.png')}}" style="top:120px; left:670px; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;"
                alt="livergard title"
            >
            <p style="font-size:16px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:180px; left:670px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Membantu Menangani Kemampuan<br/> Kognitif Pada Usia Lanjut 
            </p>
            <p class="ls-layer"
                style="top: 250px; left: 670px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.6); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal; height: auto;"
                data-ls="offsetxin:-240px; durationin:1200; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <i class="material-icons"
                    style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.3); font-size: 18px">fiber_manual_record</i>
                    Suplemen makanan herbal yang bermanfaat memelihara dan meningkatkan daya ingat.
            </p>
            <p class="ls-layer"
                style="top: 340px; left: 670px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.6); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal;height: auto;"
                data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <i class="material-icons"
                    style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.3); font-size: 18px">fiber_manual_record</i>
                    Mengandung bahan-bahan alami yang terbukti efektif untuk mengatasi degenerasi fungsi sel saraf.
            </p>

            <p style="font-size:18px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:450px; left:670px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1200; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Tersedia di:
            </p>

            <div class="button__social-group ls-l" style="display:flex !important; top: 500px; left: 670px;">
                <a class="button__social" href="https://www.konimexstore.com/produk/detail/kode/KONILIFE+FOCUS" target="_blank">
                    <img class="button__social-img" src={{asset('images/konimex.png')}} alt="Konimex" />
                </a>
                <a class="button__social" href="https://shopee.co.id/Konilife-Focus-Food-Supplement-Botol-30-Meningkatkan-Daya-Ingat-Halal-i.63334771.1189192489" target="_blank">
                    <img class="button__social-img" src={{asset('images/shopee.png')}} alt="shopee" />
                </a>
                <a class="button__social" href="https://www.tokopedia.com/konimexofficial/konilife-focus-food-supplement-botol-30-meningkatkan-daya-ingat-halal" target="_blank">
                    <img class="button__social-img" src={{asset('images/tokopedia.png')}} alt="tokopedia" />
                </a>
            </div>

            {{-- <a href="https://www.konimexstore.com/produk/detail/kode/KONILIFE+FOCUS" target="_blank" style="top: 380px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 490px; left: 720px;" src={{asset('images/konimex.png')}} alt="Konimex" />
            </a>

            <a href="https://shopee.co.id/Konilife-Focus-Food-Supplement-Botol-30-Meningkatkan-Daya-Ingat-Halal-i.63334771.1189192489" target="_blank" style="top: 380px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 490px; left: 860px;" src={{asset('images/shopee.png')}} alt="Shopee" />
            </a>
            <a href="https://www.tokopedia.com/konimexofficial/konilife-focus-food-supplement-botol-30-meningkatkan-daya-ingat-halal" target="_blank" style="top: 380px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 490px; left: 1000px;" src={{asset('images/tokopedia.png')}}
                    alt="Tokopedia" />
            </a> --}}
            <div style="border: 2px solid #46865A;; z-index: 1002;top:90%; left:50%; width:25px; border-radius:30px; height:42px;"
                class="ls-l"
                data-ls="offsetyin:50; delayin:500; offsetyout:-50; durationout:400; parallaxlevel:0; position:fixed;">
            </div>
            <div style=" z-index: 1001; margin-top: -20px;top:91%; left:50%; border-radius:15px; background:#46865A;; width:6px; height:10px;"
                class="ls-l"
                data-ls="offsetyin:50; delayin:500; offsetyout:-50; durationout:400; loop:true; loopoffsety:10; loopduration:600; loopstartat:transitioninstart + 0; loopeasing:easeInOutSine; looptransformorigin:50% 50% 0px; loopcount:-1; loopyoyo:true; parallaxlevel:0; position:fixed;">
            </div>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div>
    </div>


    {{-- <div id="homeslider-mobile" class="primary-banner" style="width:480px;height:800px;margin:0 auto;">
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/focus-font.png')}}" style="top:40px; left:15px; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="width: 100%; font-size:24px; line-height:27px; color:rgba(0, 0, 0, 0.85); top:100px; left:15px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Membantu Menangani Kemampuan<br/> Kognitif Pada Usia Lanjut 
            </p>
            <p class="ls-layer"
                style="top: 180px; left: 15px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.6); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal; height: auto;"
                data-ls="offsetxin:-240px; durationin:1200; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <i class="material-icons"
                    style="position: absolute; left: 0; top: 2px; color: rgba(0, 0, 0, 0.6); font-size: 18px">fiber_manual_record</i>
                    Suplemen makanan herbal yang bermanfaat memelihara dan meningkatkan daya ingat.
            </p>
            <p class="ls-layer"
                style="top: 280px; left: 15px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.6); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal;height: auto;"
                data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <i class="material-icons"
                    style="position: absolute; left: 0; top: 2px; color: rgba(0, 0, 0, 0.6); font-size: 18px">fiber_manual_record</i>
                    Mengandung bahan-bahan alami yang terbukti efektif untuk mengatasi degenerasi fungsi sel saraf.
            </p>
            <img src="{{asset('images/focus.png')}}" class="ls-layer" style="top: 390px; left:50%; width: 360px"
                data-ls="offsetxin:bottom; durationin:800; delayin:1200; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;">

            <p style="font-size:20px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:640px; left:50%; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1200; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Tersedia di:
            </p>
            <a href="https://www.konimexstore.com/produk/detail/kode/KONILIFE+FOCUS" target="_blank" style="top: 330px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 680px; left: 15px; width: 30%" src={{asset('images/konimex.png')}} alt="Konimex" />
            </a>

            <a href="https://shopee.co.id/Konilife-Focus-Food-Supplement-Botol-30-Meningkatkan-Daya-Ingat-Halal-i.63334771.1189192489" target="_blank" style="top: 330px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 680px; left: 50%; width: 30%" src={{asset('images/shopee.png')}} alt="Shopee" />
            </a>
            <a href="https://www.tokopedia.com/konimexofficial/konilife-focus-food-supplement-botol-30-meningkatkan-daya-ingat-halal" target="_blank" style="top: 330px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 680px; left: 320px; width: 30%" src={{asset('images/tokopedia.png')}}
                    alt="Tokopedia" />
            </a>
        </div>
    </div> --}}

    <div class="product-hero mobile">
        <div class="container">
            <img src="{{asset('images/focus-font.png')}}" />
            <p>Membantu Menangani Kemampuan Kognitif Pada Usia Lanjut </p>
            <ul class="product-hero__list">
                <li>
                    Suplemen makanan herbal yang bermanfaat memelihara dan meningkatkan daya ingat.
                </li>
                <li>
                    Mengandung bahan-bahan alami yang terbukti efektif untuk mengatasi degenerasi fungsi sel saraf.
                </li>
            </ul>
            <img class="product-hero__img" src="{{asset('images/focus.png')}}" 
                alt="focus"
            >
            <div class="product-hero__social">
                <h4 class="product-hero__social-title">Tersedia di:</h4>
                <div class="product-hero__social-group">
                    <a href="https://www.konimexstore.com/produk/detail/kode/KONILIFE+FOCUS" target="_blank" rel="noopener noreferrer">
                        <img src={{asset('images/konimex.png')}} alt="Konimex" />
                    </a>
                    <a href="https://shopee.co.id/Konilife-Focus-Food-Supplement-Botol-30-Meningkatkan-Daya-Ingat-Halal-i.63334771.1189192489" target="_blank" rel="noopener noreferrer">
                        <img src={{asset('images/shopee.png')}} alt="shopee" />
                    </a>
                    <a href="https://www.tokopedia.com/konimexofficial/konilife-focus-food-supplement-botol-30-meningkatkan-daya-ingat-halal" target="_blank" rel="noopener noreferrer">
                        <img src={{asset('images/tokopedia.png')}} alt="tokopedia" />
                    </a>
                </div>
            </div>
        </div>
    </div>


</section>


<section class="section section__product">
    {{-- <img class="floating-component floating-component__padi" src="{{asset('images/layer-left.png')}}" style="transform: scale(-1); top: -10%" /> --}}
    <img class="floating-element floating-element-1 floating-element__focus-1" src="{{asset('images/layer-left.png')}}" />
    <img class="floating-element floating-element-2 floating-element__focus-2" src="{{asset('images/layer-left.png')}}" />
    <img class="floating-element floating-element-3 floating-element__focus-3" src="{{asset('images/layer-left.png')}}" />
    <div class="container">
        <div class="composition composition-full-height">
            <div class="row row-introduction mb-5">
                <div class="col-md-6 col-middle">
                    <div>
                        <h1 class="composition__heading">
                            Huperzia serrate (e.q Huperzine A) 30 mcg
                        </h1>
                        <p class="composition__description">
                            Huperzin adalah formula yang paling efektif untuk menghambat kerja enzim Acetylcholinesterase sehingga produksi Acetylcholine untuk menghantarkan pesan/ rangsangan ke otak makin banyak. Sehingga kemampuan memori meningkat.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="composition__image" src="{{asset('images/huperzia.png')}}" />
                </div>
            </div>
            <div class="row row-introduction mb-5">
                <div class="col-md-6 col-middle">
                    <div>
                        <h2 class="composition__heading">
                            Cucuma Xanthorriza extract (ekstrak temulawak) 40 mg
                        </h2>
                        <p class="composition__description">
                            Berfungsi sebagai anti radang, antioksidan yang baik untuk melindungi susunan saraf. Magnesium oxide 300 mg
                            Merupakan mineral yang berperan dalam memelihara proses metabolisme dalam otak.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="composition__image" src="{{asset('images/cucuma.png')}}" />
                </div>
            </div>
        </div>
        <div class="how-to-use how-to-use__no-space">
            {{-- <img class="floating-component floating-component__padi-3" src="{{asset('images/layer-left.png')}}" style="z-index: 2;top: unset;bottom: -30%;left: -10%;" />
            <img class="floating-component floating-component__padi-3" src="{{asset('images/layer-left.png')}}" style="z-index: 2;top: unset;bottom: -50%;left: unset; right: -27%; transform: scaleX(-1); width: 400px;" /> --}}
        <div class="row position-relative " style="z-index: 3">
            <div class="col-md-4 mb-4">
                <div class="card-how-to-use h-100">
                    <h2 class="card-how-to-use__title">
                        Aturan Pakai
                    </h2>
                    <div class="card-how-to-use__dosis">
                        <h3>
                            Isi:
                        </h3>
                        <span>
                            30 Kapsul
                        </span>
                    </div>
                    <div class="card-how-to-use__dosis">
                        <h3>
                            Dosis Penggunaan :
                        </h3>
                        <span>
                            1 kapsul Perhari
                        </span>
                    </div>

                    <div class="card-how-to-use__dosis">
                        <h3>
                            Pencegahan :
                        </h3>
                        <span>
                            1x2 kapsul perhari
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-how-to-use mb-4">
                    <h2 class="card-how-to-use__title text-center">
                        Ilustrasi Cara Kerja
                    </h2>
                    <video
                        class="video-product video-js vjs-theme-fantasy vjs-big-play-centered"
                        controls
                        preload="auto"
                        width="640"
                        height="300"
                        poster="{{asset('videos/focus-video-thumb.png')}}"
                        data-setup="{}"
                    >
                        <source src="{{asset('videos/focus-result.mp4')}}" type="video/mp4" />
                        <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                        >
                        </p>
                    </video>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="section section__product">
    <div class="container">
        <h2 class="heading text-center mb-5">
            Solusi Alami, <span class="text-primary">Solusi Konilife</span>
        </h2>
        <div class="badge-carousel">
            <div>
                <div class="card-badge">
                    <div>
                        <div class="card-badge__image">
                            <img src="{{asset('images/logo-mui.png')}}" alt="Logo MUI" />
                        </div>
                        <div class="card-badge__title">
                            <h3>
                                Bersertifikasi <br /> Halal Oleh MUI
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card-badge">
                    <div>
                        <div class="card-badge__image">
                            <img src="{{asset('images/berbahan-dasar-herbal-icon.png')}}" alt="Berbahan Dasar" />
                        </div>
                        <div class="card-badge__title">
                            <h3>
                                Berbahan<br /> Dasar Herbal
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card-badge">
                    <div>
                        <div class="card-badge__image">
                            <img src="{{asset('images/formula-terbaik-icon.png')}}" alt="Formula Terbaik" />
                        </div>
                        <div class="card-badge__title">
                            <h3>
                                Formula Terbaik
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card-badge">
                    <div>
                        <div class="card-badge__image">
                            <img src="{{asset('images/kebutuhan-orang-asia-icon.png')}}" alt="Formula Terbaik" />
                        </div>
                        <div class="card-badge__title">
                            <h3>
                                Formula Sesuai
                                Kebutuhan Orang
                                Asia
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section__product">
    {{-- <img class="floating-component floating-component__padi-3" src="{{asset('images/focus-right-bottom.png')}}" style="z-index: 2;top: unset;bottom: 20%;left: unset;right: -5%;width: 180px;" />
    <img class="floating-component floating-component__padi-3" src="{{asset('images/focus-left-bottom.png')}}" style="z-index: 2;top: unset;bottom: -35%;left: -9%;width: 280px;" /> --}}
    <img class="floating-element floating-element-4 floating-element__focus-4" src="{{asset('images/focus-floating-4.png')}}" />
    <div class="container">
        <div class="introduction">
            <div class="introduction__flex">
                <div class="introduction__flex-left">
                    <div class="introduction__flex-wrapper">
                        <img class="introduction__flex-left-img" src="{{asset('images/focus.png')}}" alt="focus" />
                        <img src="{{asset('images/focus-font.png')}}" alt="">
                        <p>
                            membantu menangani <br> kemampuan kognitif <br> pada usia lanjut 
                        </p>
                    </div>
                </div>
                <div class="introduction__flex-right">
                    <h3 class="heading heading__small">
                        Tersedia di:
                    </h3>
                    <div class="store">
                        <a href="https://www.konimexstore.com/produk/detail/kode/KONILIFE+FOCUS" target="_blank" class="btn btn-store">
                            <img src={{asset('images/konimex.png')}} alt="Konimex" />
                        </a>
                        <a href="https://www.tokopedia.com/konimexofficial/konilife-focus-food-supplement-botol-30-meningkatkan-daya-ingat-halal" target="_blank" class="btn btn-store">
                            <img src={{asset('images/tokopedia.png')}} alt="Tokopedia" />
                        </a>
                        <a href="https://shopee.co.id/Konilife-Focus-Food-Supplement-Botol-30-Meningkatkan-Daya-Ingat-Halal-i.63334771.1189192489" target="_blank" class="btn btn-store">
                            <img src={{asset('images/shopee.png')}} alt="Shopee" />
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-8 p-relative">
                    <img class="introduction__image" src="{{asset('images/focus.png')}}" alt="focus" />
                    <div class="introduction-card">
                        <div class="introduction-card__wrapper">
                            <img src="{{asset('images/focus-font.png')}}" alt="focus">
                            <p>
                                Membantu<br/> Menangani Kemampuan<br/> Kognitif Pada Usia Lanjut 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="heading heading__small">
                        Tersedia di:
                    </h3>
                    <div class="store">
                        <a href="https://www.konimexstore.com/produk/detail/kode/KONILIFE+FOCUS" target="_blank" class="btn btn-store">
                            <img src={{asset('images/konimex.png')}} alt="Konimex" />
                        </a>
                        <a href="https://www.tokopedia.com/konimexofficial/konilife-focus-food-supplement-botol-30-meningkatkan-daya-ingat-halal" target="_blank" class="btn btn-store">
                            <img src={{asset('images/tokopedia.png')}} alt="Tokopedia" />
                        </a>
                        <a href="https://shopee.co.id/Konilife-Focus-Food-Supplement-Botol-30-Meningkatkan-Daya-Ingat-Halal-i.63334771.1189192489" target="_blank" class="btn btn-store">
                            <img src={{asset('images/shopee.png')}} alt="Shopee" />
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<section class="section section__produk">
    <div class="section__produk__content">
        <div class="container">
            <h1 class="heading text-center">
                Produk Lainnya
            </h1>
            <div class="product-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1}'>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/redaxin.png')}}" alt="Redaxin">
                        </div>
                        <div class="product-item__description">
                            <p>
                                Membantu Mengurangi Lemak Darah
                            </p>
                            <a href="{{url('product/redaxin')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item ">
                        <div class="product-item__image">
                            <img src="{{asset('images/livergard.png')}}" alt="Livergard">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #CB4D70">
                                Memelihara Kesehatan Hati
                            </p>
                            <a href="{{url('product/livergard')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/vision.png')}}" alt="Vision">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #0B7DC1">
                                Membantu Memelihara Kesehatan Mata
                            </p>
                            <a href="{{url('product/vision')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/focus.png')}}" alt="Focus">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #0B7DC1;">
                                Membantu Menangani Kemampuan Kognitif Pada Usia Lanjut 
                            </p>
                            <a href="{{url('product/focus')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/co-q10.png')}}" alt="CO Q10">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #038B97;">
                                Memelihara Kesehatan
                            </p>
                            <a href="{{url('product/co-q10')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/prosmeto.png')}}" alt="Prosmeto">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #805722;">
                                Memelihara Kesehatan Prostat
                            </p>
                            <a href="{{url('product/prosmeto')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/ostegard.png')}}" alt="Ostegard">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #792C89;">
                                Membantu Memelihara Kesehatan Persendian
                            </p>
                            <a href="{{url('product/ostegard')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/glucotrim.png')}}" alt="Glucotrin">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #AA862E;">
                                Memberi Manfaat Bagi Penderita Diabetes
                            </p>
                            <a href="{{url('product/glucotrim')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/imunea.png')}}" alt="Imunea">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #CC792A;">
                                Memelihara Daya Tahan Tubuh
                            </p>
                            <a href="{{url('product/imunea')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/oxi.png')}}" alt="Oxi">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #AD208D;">
                                Memelihara Kesehatan Tubuh
                            </p>
                            <a href="{{url('product/oxi')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/chlorofit.png')}}" alt="Chlorofit">
                        </div>
                        <div class="product-item__description">
                            <p style="color:  #407D53;">
                                Membantu Memelihara Kesehatan
                            </p>
                            <a href="{{url('product/chlorofit')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/bone.png')}}" alt="Bone">
                        </div>
                        <div class="product-item__description">
                            <p style="color:  #407D53;">
                                Membantu Memelihara Kesehatan Tulang
                            </p>
                            <a href="{{url('product/bone')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/o369.png')}}" alt="O369">
                        </div>
                        <div class="product-item__description">
                            <p style="color:  #AA862E">
                                Membantu Memelihara Kesehatan Tubuh
                            </p>
                            <a href="{{url('product/o369')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/urafit.png')}}" alt="Urafit">
                        </div>
                        <div class="product-item__description">
                            <p style="color:  #407D53;">
                                Membantu Meredakan Pegal Linu dan Nyeri Sendi
                            </p>
                            <a href="{{url('product/urafit')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/omega3.png')}}" alt="Omega 3">
                        </div>
                        <div class="product-item__description">
                            <p style="color:  #CC792A;">
                                Membantu Memelihara Kesehatan Tubuh
                            </p>
                            <a href="{{url('product/omega3')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/normovas.png')}}" alt="Normovas">
                        </div>
                        <div class="product-item__description">
                            <p style="color:  #EE4770; font-size: 14px">
                                Secara Tradisional Membantu Meringankan Tekanan Darah Tinggi yang Ringan
                            </p>
                            <a href="{{url('product/normovas')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img src="{{asset('images/digestcare.png')}}" alt="Digestcare">
                        </div>
                        <div class="product-item__description">
                            <p style="color:  #AFCD22; font-size: 14px">
                                Membantu Memelihara Kesehatan Pencernaan dan Melancarkan Buang Air Besar
                            </p>
                            <a href="{{url('product/digestcare')}}" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('scripts')
<script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
<link href="https://unpkg.com/@videojs/themes@1/dist/fantasy/index.css" rel="stylesheet">
@endsection
