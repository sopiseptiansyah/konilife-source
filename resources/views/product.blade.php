@extends('layouts.main')

@section('title', 'Solusi Alam, Solusi Konilife')

@section('styles')
<!-- LayerSlider stylesheet -->
<link rel="stylesheet" href="{{asset('css/layerslider.css')}}" type="text/css">
@endsection

@section('content')
<section class="section section__banner">
    <!-- Slider HTML markup -->
    <div id="homeslider" class="primary-banner" style="width:1280px;height:700px;margin:0 auto;">
        <!-- Slide 1-->
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/padi.png')}}" class="ls-layer" style="top:0; left:-100px;"
                data-ls="offsetxin:left; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
            <img src="{{asset('images/red-rice.png')}}" class="ls-layer" style="top: 50%; left:103%; height: 80%"
                data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:right; easingout:easeInQuad; fadeout:true; rotateout:60;">
            <img src="{{asset('images/redaxin.png')}}" class="ls-layer" style="top: 150px; left:200px; width: 480px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;">
            <img src="{{asset('images/redaxin-font.png')}}" style="top:120px; left:720px; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="font-size:20px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:180px; left:720px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Menurunkan Kadar Lemak Dalam <br /> Darah (Kolesterol dan Trigliserida)
            </p>
            <p class="ls-layer"
                style="top: 260px; left: 720px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal; height: auto;"
                data-ls="offsetxin:-240px; durationin:1200; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <i class="material-icons"
                    style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
                Suplemen makanan herbal yang bermanfaat untuk menurunkan lemak darah dan memperbaiki rasio LDL dan HDL
                dalam darah.
            </p>
            <p class="ls-layer"
                style="top: 380px; left: 720px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal;height: auto;"
                data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <i class="material-icons"
                    style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
                Mengandung Red Yeast Rice atau Beras Merah yang terstandarisasi
            </p>

            <p style="font-size:20px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:450px; left:720px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1200; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Tersedia di:
            </p>
            <a href="#" style="top: 380px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 490px; left: 720px;" src={{asset('images/konimex.png')}} alt="Konimex" />
            </a>

            <a href="#" style="top: 380px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 490px; left: 860px;" src={{asset('images/shopee.png')}} alt="Shopee" />
            </a>
            <a href="#" style="top: 380px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 490px; left: 1000px;" src={{asset('images/tokopedia.png')}}
                    alt="Tokopedia" />
            </a>
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


    <div id="homeslider-mobile" class="primary-banner" style="width:480px;height:800px;margin:0 auto;">
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/redaxin-font.png')}}" style="top:40px; left:15px; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;"
            >
            <p style="width: 100%; font-size:24px; line-height:27px; color:rgba(0, 0, 0, 0.85); top:100px; left:15px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Menurunkan Kadar Lemak Dalam <br /> Darah (Kolesterol dan Trigliserida)
            </p>
            <p class="ls-layer"
                style="top: 180px; left: 15px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal; height: auto;"
                data-ls="offsetxin:-240px; durationin:1200; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <i class="material-icons"
                    style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
                Suplemen makanan herbal yang bermanfaat untuk menurunkan lemak darah dan memperbaiki rasio LDL dan HDL
                dalam darah.
            </p>
            <p class="ls-layer"
                style="top: 300px; left: 15px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal;height: auto;"
                data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <i class="material-icons"
                    style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
                Mengandung Red Yeast Rice atau Beras Merah yang terstandarisasi
            </p>
            <img src="{{asset('images/redaxin.png')}}" 
                class="ls-layer" 
                style="top: 400px; left:50%; width: 360px"
                data-ls="offsetxin:bottom; durationin:800; delayin:1200; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;"
            >

            <p style="font-size:20px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:680px; left:50%; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1200; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Tersedia di:
            </p>
            <a href="#" style="top: 380px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 720px; left: 15px;" src={{asset('images/konimex.png')}} alt="Konimex" />
            </a>

            <a href="#" style="top: 380px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 720px; left: 50%" src={{asset('images/shopee.png')}} alt="Shopee" />
            </a>
            <a href="#" style="top: 380px; left: 720px;" class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                <img class="ls-l" style="top: 720px; left: 335px" src={{asset('images/tokopedia.png')}}
                    alt="Tokopedia" />
            </a>
        </div>
    </div>


</section>


<section class="section section__product">
    <img class="floating-component floating-component__padi" src="{{asset('images/padi-2.png')}}" />
    <div class="container">
        <div class="composition">
            <div class="row row-introduction">
                <div class="col-md-5">
                    <h1 class="composition__heading">
                        Red Yeast Rice<br />(Angkak) 600 mg
                    </h1>
                    <p class="composition__description">
                        Berkahsiat membantu menurunkan kadar lemak dalam darah (kolesterol, trigiselda) dan memperbaiki
                        rasio LDL dan HDL. Hasil uji klinis menunjukan bahwa red yeast 600 mg efektif menurunkan
                        kolesterol dalam darah.
                    </p>
                </div>
                <div class="col-md-7">
                    <img class="composition__image" src="{{asset('images/red-yeast.png')}}" />
                </div>
            </div>
        </div>
        <div class="how-to-use">
            <img class="floating-component floating-component__padi-3" src="{{asset('images/padi-3.png')}}" />
            <div class="row">
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
                                2x2 kapsul perhari
                                Waktu Pemakaian minimal 2 bulan
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
                        <img class="card-how-to-use__image" src="{{asset('images/hasil-uji-klinis.png')}}"
                            alt="Hasil Uji Klinis" />
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card-how-to-use">
                                <div class="card-how-to-use__progress">
                                    <h3>
                                        Bulan 1
                                    </h3>
                                    <div class="list-month">
                                        <div class="dots">
                                        </div>
                                        <h4>
                                            HDL (Kolestrol Baik): Naik 13%
                                        </h4>
                                        <i class="material-icons">
                                            arrow_upward
                                        </i>
                                    </div>
                                    <div class="list-month list-month__down">
                                        <div class="dots">
                                        </div>
                                        <h4>
                                            LDL (Kolestrol Jahat): Turun 25%
                                        </h4>
                                        <i class="material-icons">
                                            arrow_downward
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-how-to-use">
                                <div class="card-how-to-use__progress">
                                    <h3>
                                        Bulan 2
                                    </h3>
                                    <div class="list-month">
                                        <div class="dots">
                                        </div>
                                        <h4>
                                            HDL (Kolestrol Baik): Naik 10%
                                        </h4>
                                        <i class="material-icons">
                                            arrow_upward
                                        </i>
                                    </div>
                                    <div class="list-month list-month__down">
                                        <div class="dots">
                                        </div>
                                        <h4>
                                            LDL (Kolestrol Jahat): Turun 25%
                                        </h4>
                                        <i class="material-icons">
                                            arrow_downward
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <div class="container">
        <div class="introduction">
            <div class="row">
                <div class="col-md-8 p-relative">
                    <img class="introduction__image" src="{{asset('images/redaxin.png')}}" alt="Redaxin" />
                    <div class="introduction-card">
                        <div class="introduction-card__wrapper">
                        <img src="{{asset('images/redaxin-font.png')}}" alt="">
                        <p>
                            Untuk Kesehatan <br /> Jantung Anda
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="heading heading__small">
                        Tersedia di:
                    </h3>
                    <div class="store">

                        <a class="btn btn-store">
                            <img src={{asset('images/konimex.png')}} alt="Konimex" />
                        </a>
                        <a class="btn btn-store">
                            <img src={{asset('images/tokopedia.png')}} alt="Tokopedia" />
                        </a>
                        <a class="btn btn-store">
                            <img src={{asset('images/shopee.png')}} alt="Shopee" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section__product">
    <div class="section__produk__content">
        <div class="container">
            <h1 class="heading">
                Produk Terkait
            </h1>
            <div class="product-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1}'>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img data-lazy="{{asset('images/redaxin.png')}}" alt="Redaxin">
                        </div>
                        <div class="product-item__description">
                            <p>
                                Menurunkan Kadar Lemak Dalam Darah (Kolesterol dan Trigliserida)
                            </p>
                            <a href="#" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img data-lazy="{{asset('images/livergard.png')}}" alt="Livergard">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #CB4D70">
                                Memelihara Kesehatan Hati Dan Fungsi Detoksifikasi Tubuh
                            </p>
                            <a href="#" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img data-lazy="{{asset('images/vision.png')}}" alt="Vision">
                        </div>
                        <div class="product-item__description">
                            <p style="color: #0B7DC1">
                                Memelihara Kesehatan Fungsi Mata
                            </p>
                            <a href="#" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img data-lazy="{{asset('images/focus.png')}}" alt="Focus">
                        </div>
                        <div class="product-item__description">
                            <p>
                                Membantu Menangani Penurunan Daya Ingat
                            </p>
                            <a href="#" class="btn btn-konilife">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-item">
                        <div class="product-item__image">
                            <img data-lazy="{{asset('images/co-q10.png')}}" alt="CO Q10">
                        </div>
                        <div class="product-item__description">
                            <p>
                                Mendukung Kinerja Jantung dan Organ Penting Lainnya
                            </p>
                            <a href="#" class="btn btn-konilife">
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

@endsection
