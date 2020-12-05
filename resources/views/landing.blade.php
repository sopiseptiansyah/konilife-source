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
            <img src="{{asset('images/imunea-left.png')}}" class="ls-layer" style="top:110px; left:-100px;"
                data-ls="offsetxin:left; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
            <img src="{{asset('images/imunea-right.png')}}" class="ls-layer" style="top: 50%; left:103%; height: 80%"
                data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:right; easingout:easeInQuad; fadeout:true; rotateout:60;">
            <img src="{{asset('images/imunea.png')}}" class="ls-layer" style="top: 150px; left:200px; width: 480px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;">
            <img src="{{asset('images/imunea-font.png')}}" style="top:190px; left:720px; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="font-size:20px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:240px; left:720px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Memelihara Daya Tahan Tubuh <span class="invisible"> - Imunea</span>
            </p>
            <a href="{{url('product/imunea')}}" class="ls-l"
                style="top:300px; left:720px; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div>

        <!-- Slide 2-->
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/oxi-left.png')}}" alt="Sylibum" class="ls-layer" style="top:43%; left:-100px;"
                data-ls="offsetxin:left; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
            <img src="{{asset('images/oxi-right.png')}}" class="ls-layer" style="top: 50%; left:90%; height: 80%"
                data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:right; easingout:easeInQuad; fadeout:true; rotateout:60;"
                alt="kunyit">
            <img src="{{asset('images/oxi.png')}}" class="ls-layer" style="top: 150px; left:200px; width: 480px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;"
                alt="oxi">
            <img src="{{asset('images/oxi-font.png')}}" style="top:230px; left:720px; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="font-size:20px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:280px; left:720px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Memelihara Kesehatan Tubuh <span class="invisible"> - Oxi</span>
            </p>
            <a href="{{url('product/oxi')}}" class="ls-l"
                style="top:330px; left:720px; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div>

        <!-- Slide 3-->
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/chlorofit-component.png')}}" alt="chlorofit-component" class="ls-layer" style="top:43%; left:-100px;"
                data-ls="offsetxin:left; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
            <img src="{{asset('images/footer-image.png')}}" class="ls-layer" style="top: 50%; left:103%; height: 80%"
                data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:right; easingout:easeInQuad; fadeout:true; rotateout:60;"
                alt="salad">
            <img src="{{asset('images/chlorofit.png')}}" class="ls-layer" style="top: 150px; left:200px; width: 480px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;"
                alt="livergard">
            <img src="{{asset('images/chlorofit-font.png')}}" style="top:200px; left:720px; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="font-size:20px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:250px; left:720px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Membantu Memelihara Kesehatan <span class="invisible"> - Chlorofit</span>
            </p>
            <a href="{{url('product/chlorofit')}}" class="ls-l"
                style="top:310px; left:720px; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div>

        <!-- Slide 4-->
        {{-- <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/layer-left.png')}}" alt="focus" class="ls-layer" style="top:0; left:-100px;"
                data-ls="offsetxin:left; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
            <img src="{{asset('images/focus-right.png')}}" class="ls-layer" style="top: 50%; left:103%; height: 80%"
                data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:right; easingout:easeInQuad; fadeout:true; rotateout:60;"
                alt="salad">
            <img src="{{asset('images/focus.png')}}" class="ls-layer" style="top: 150px; left:200px; width: 480px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;"
                alt="livergard">
            <img src="{{asset('images/focus-font.png')}}" style="top:200px; left:720px; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="font-size:20px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:260px; left:720px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Membantu Menangani Kemampuan<br/> Kognitif Pada Usia Lanjut 
            </p>
            <a href="{{url('product/focus')}}" class="ls-l"
                style="top:340px; left:720px; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div> --}}

        <!-- Slide 5-->
        {{-- <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/co-q10-component.png')}}" class="ls-layer" style="top: 40%; left:101%; height: 50%"
                data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; rotatein:-60; offsetxout:right; easingout:easeInQuad; fadeout:true; rotateout:60;"
                alt="CO q10">
            <img src="{{asset('images/co-q10.png')}}" class="ls-layer" style="top: 150px; left:200px; width: 480px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;"
                alt="livergard">
            <img src="{{asset('images/co-q10-font.png')}}" style="top:200px; left:720px; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="font-size:20px; line-height:24px; color:rgba(0, 0, 0, 0.85); top:260px; left:720px; font-weight:600;"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                
                Memelihara Kesehatan
                            
            </p>
            <a href="{{url('product/co-q10')}}" class="ls-l"
                style="top:340px; left:720px; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div> --}}
    </div>


    {{-- not appear until scroll --}}
    {{-- <div id="homeslider-mobile" class="primary-banner" style="width:480px;height:640px;margin:0 auto;">
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/imunea.png')}}" class="ls-layer" style="top: 80px; left:50%; width: 360px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;">
            <img src="{{asset('images/imunea-font.png')}}" style="top:360px; left:50%; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="width: 100%; font-size:24px; line-height:27px; color:rgba(0, 0, 0, 0.85); top:420px; left:0; font-weight:600; text-align: center"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Memelihara Daya Tahan Tubuh <br>  Terhadap Penyakit
            </p>
            <a href="{{url('product/imunea')}}" class="ls-l"
                style="top:520px; left:50%; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div>
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/livergard.png')}}" class="ls-layer" style="top: 80px; left:50%; width: 360px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;">
            <img src="{{asset('images/livergard-font.png')}}" style="top:360px; left:50%; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="width: 100%; font-size:24px; line-height:27px; color:rgba(0, 0, 0, 0.85); top:420px; left:0; font-weight:600; text-align: center"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Memelihara Kesehatan Hati
            </p>
            <a href="{{url('product/livergard')}}" class="ls-l"
                style="top:520px; left:50%; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div>
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/vision.png')}}" class="ls-layer" style="top: 80px; left:50%; width: 360px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;">
            <img src="{{asset('images/vision-font.png')}}" style="top:360px; left:50%; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="width: 100%; font-size:24px; line-height:27px; color:rgba(0, 0, 0, 0.85); top:420px; left:0; font-weight:600; text-align: center"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Membantu Memelihara <br /> Kesehatan Mata
            </p>
            <a href="{{url('product/vision')}}" class="ls-l"
                style="top:520px; left:50%; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div>
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/focus.png')}}" class="ls-layer" style="top: 80px; left:50%; width: 360px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;">
            <img src="{{asset('images/focus-font.png')}}" style="top:360px; left:50%; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="width: 100%; font-size:24px; line-height:27px; color:rgba(0, 0, 0, 0.85); top:420px; left:0; font-weight:600; text-align: center"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Membantu Menangani<br /> Kemampuan Kognitif<br/> Pada Usia Lanjut 
            </p>
            <a href="{{url('product/focus')}}" class="ls-l"
                style="top:520px; left:50%; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div>
        <div class="ls-slide" data-ls="duration:6000; transition2d:73; kenburnsscale:1.2;">
            <img src="{{asset('images/co-q10.png')}}" class="ls-layer" style="top: 80px; left:50%; width: 360px"
                data-ls="offsetxin:bottom; durationin:800; easingin:easeOutQuad; fadein:true; offsetxout:left; easingout:easeInQuad; fadeout:true;">
            <img src="{{asset('images/co-q10-font.png')}}" style="top:360px; left:50%; font-weight:600;"
                class="ls-layer"
                data-ls="offsetxin:-100%; durationin:1000; delayin:400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <p style="width: 100%; font-size:24px; line-height:27px; color:rgba(0, 0, 0, 0.85); top:420px; left:0; font-weight:600; text-align: center"
                class="ls-l"
                data-ls="offsetxin:-100%; durationin:1000; delayin:600; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
                Memelihara Kesehatan
            </p>
            <a href="{{url('product/co-q10')}}" class="ls-l"
                style="top:520px; left:50%; padding: 15px 25px; color: #fff; background: #F2994A;box-shadow: 7px 16px 32px rgba(67, 137, 89, 0.16);border-radius: 5px;text-decoration: none;font-weight: 600;font-size: 16px;"
                data-ls="offsetxin:-100%; durationin:1000; delayin:800; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0; hover:true; hoverdurationin:300; hoverbgcolor: #d2843f">
                Lihat Selengkapnya
            </a>
            <!-- Slide thumbnail image of the first slide -->
            <img src="{{asset('images/slider-dots.png')}}" class="ls-tn" alt="Slide dots">
        </div>
    </div> --}}


    <div class="banner-slider-mobile">
        <div>
            <img src="{{asset('images/imunea.png')}}" class="banner-slider-mobile__image">
            <img class="banner-slider-mobile__title" src="{{asset('images/imunea-font.png')}}" alt="imunea">
            <p class="banner-slider-mobile__desc">
                Memelihara Daya Tahan Tubuh
            </p>
            <div class="banner-slider-mobile__button">
                <a href="{{url('product/imunea')}}" class="btn-konilife">
                    Lihat Selengkapnya
                </a>
            </div>
            <div class="banner-slider-mobile__space">space</div>
        </div>
        <div>
            <img src="{{asset('images/oxi.png')}}" class="banner-slider-mobile__image">
            <img class="banner-slider-mobile__title" src="{{asset('images/oxi-font.png')}}" alt="oxi">
            <p class="banner-slider-mobile__desc">
                Memelihara Kesehatan Tubuh
            </p>
            <div class="banner-slider-mobile__button">
                <a href="{{url('product/oxi')}}" class="btn-konilife">
                    Lihat Selengkapnya
                </a>
            </div>
            <div class="banner-slider-mobile__space">space</div>
        </div>
        <div>
            <img src="{{asset('images/chlorofit.png')}}" class="banner-slider-mobile__image">
            <img class="banner-slider-mobile__title" src="{{asset('images/chlorofit-font.png')}}" alt="chlorofit">
            <p class="banner-slider-mobile__desc">
                Membantu Memelihara Kesehatan
            </p>
            <div class="banner-slider-mobile__button">
                <a href="{{url('product/chlorofit')}}" class="btn-konilife">
                    Lihat Selengkapnya
                </a>
            </div>
            <div class="banner-slider-mobile__space">space</div>
        </div>
    </div>
    <div class="preloader__banner-mobile">
    </div>

</section>
<section class="section section__produk">
    <img class="floating-component floating-component__flower" src="{{asset('images/flower.png')}}" />
    <div class="section__produk__content">
        <div class="container">
            <h1 class="general__title">
                Produk Konilife
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

<div class="section section__introduce" style="width:1280px;height:700px;margin:0 auto;margin-bottom: 0px;">
    <!-- Slide 1-->
    <div class="ls-slide" data-ls="kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
        <img width="300" height="590" src="{{asset('images/berbahan-dasar-herbal.png')}}" class="ls-l"
            alt="Image Berbahan Dasar Herbal"
            style="top:80px; left:0; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:100%;"
            data-ls="showinfo:1; durationin:300; delayin:300; loop:true; loopoffsetx:-5sw; loopduration:2000; loopstartat:transitioninstart - 300; loopeasing:easeOutQuint; loopcount:1; position:fixed;">
        <img src="{{asset('images/layer-left.png')}}" class="ls-layer" style="top:0px; left:-60px; width: 240px"
            data-ls="offsetxin:left; durationin:600; easingin:easeOutQuad; fadein:false; delayin:400; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
        <img src="{{asset('images/layer-right.png')}}" class="ls-layer"
            style="top:180px; left:1150px; width: 240px; z-index: 999 "
            data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; delayin:2600; rotatein:60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
        <div style="background: #fdf6dc; background: -moz-linear-gradient(top, #fdf6dc 0%, #fdf6dc 100%); background: -webkit-linear-gradient(top, #fdf6dc 0%,#fdf6dc 100%); background: linear-gradient(to bottom, #fdf6dc 0%,#fdf6dc 100%); ;left:620px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:100%; width:100%; top:0px; font-size:14px;"
            class="ls-l"
            data-ls="showinfo:1; offsetxin:left; easingin:easeOutQuint; fadein:false; scalexin:0; loop:true; loopduration:1200; loopstartat:transitioninstart + 400; loopeasing:easeOutExpo; loopscalex:0.6; looptransformorigin:0% 50% 0; loopcount:1; position:fixed;">
        </div>
        <img class="ls-layer" src="{{asset('images/berbahan-dasar-herbal-icon.png')}}" alt="Berbahan dasar herbal"
            style="width: 60px; left: 700px; top: 200px; z-index: 999 "
            data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint; clipin:0 25% 75% 100%; offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;" />
        <h2 class="ls-l" style="top: 280px; left: 700px; z-index: 999; font-weight: 600"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            Berbahan Dasar Herbal
        </h2>
        <p class="ls-layer"
            style="top: 340px; left: 700px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal; height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1700; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Memanfaatkan bahan-bahan baku alami yang sudah dikenal dan terbuti berkhasiat untuk kesehatan
        </p>
        <p class="ls-layer"
            style="top: 440px; left: 700px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal;height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1900; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Food Suplement yang aman, minim efek samping bisa dikonsumsi dengan obat dokter atau dengan varian Konilife
            Lainnya
        </p>
    </div>
</div>

<div class="section section__introduce__mobile" style="width:480px;height:900px;margin:0 auto;margin-bottom: 0px;">
    <!-- Slide 1-->
    <div class="ls-slide" data-ls="kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
        <img src="{{asset('images/berbahan-dasar-herbal.png')}}" class="ls-l" alt="Image Berbahan Dasar Herbal"
            style="top:80px; left:0; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:420px;"
            data-ls="showinfo:1; durationin:300; delayin:300; loop:true; loopoffsetx:-5sw; loopduration:2000; loopstartat:transitioninstart - 300; loopeasing:easeOutQuint; loopcount:1; position:fixed;">
        <img src="{{asset('images/layer-left.png')}}" class="ls-layer" style="top:0px; left:-60px; width: 180px"
            data-ls="offsetxin:left; durationin:600; easingin:easeOutQuad; fadein:false; delayin:400; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
        <img src="{{asset('images/layer-right.png')}}" class="ls-layer"
            style="top:400px; left:360px; width: 180px; z-index: 999 "
            data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; delayin:2600; rotatein:60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
        <img class="ls-layer" src="{{asset('images/berbahan-dasar-herbal-icon.png')}}" alt="Berbahan dasar herbal"
            style="width: 60px; left: 15px; top: 540px; z-index: 999 "
            data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint; clipin:0 25% 75% 100%; offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;" />
        <h2 class="ls-l" style="top: 620px; left: 15px; z-index: 999; font-weight: 600"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            Berbahan Dasar Herbal
        </h2>
        <p class="ls-layer"
            style="top: 680px; left: 15px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 18px; width: 380px; white-space: normal; height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1700; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Memanfaatkan bahan-bahan baku alami yang sudah dikenal dan terbuti berkhasiat untuk kesehatan
        </p>
        <p class="ls-layer"
            style="top: 765px; left: 15px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 18px; width: 320px; white-space: normal;height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1900; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Food Suplement yang aman, minim efek samping bisa dikonsumsi dengan obat dokter atau dengan varian Konilife
            Lainnya
        </p>
    </div>
</div>


<div class="section section__introduce" style="width:1280px;height:600px;margin:0 auto;margin-bottom: 0px;">
    <!-- Slide 1-->
    <div class="ls-slide" data-ls="kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
        <img width="300" height="590" src="{{asset('images/formula-terbaik.png')}}" class="ls-l"
            alt="Image Berbahan Dasar Herbal"
            style="top:0; left: 80%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:100%;"
            data-ls="showinfo:1; durationin:300; delayin:300; loop:true; loopoffsetx:-5sw; loopduration:2000; loopstartat:transitioninstart - 300; loopeasing:easeOutQuint; loopcount:1; position:fixed;">
        <div style="background: #fdf6dc; background: -moz-linear-gradient(top, #fdf6dc 0%, #fdf6dc 100%); background: -webkit-linear-gradient(top, #fdf6dc 0%,#fdf6dc 100%); background: linear-gradient(to bottom, #fdf6dc 0%,#fdf6dc 100%); ;left:8px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:100%; width:80%; top:0px; font-size:14px;"
            class="ls-l"
            data-ls="showinfo:1; offsetxin:right; easingin:easeOutQuint; fadein:false; scalexin:0; loop:true; loopduration:1200; loopstartat:transitioninstart + 400; loopeasing:easeOutExpo; loopscalex:0.6; looptransformorigin:0% 50% 0; loopcount:1; position:fixed;">
        </div>

        <img class="ls-layer" src="{{asset('images/formula-terbaik-icon.png')}}" alt="Formula Terbaik"
            style="width: 60px; left: 100px; top: 120px; z-index: 999 "
            data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint; clipin:0 25% 75% 100%; offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;" />
        <h2 class="ls-l" style="top: 200px; left: 100px; z-index: 999; font-weight: 600"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            Formula Terbaik
        </h2>
        <p class="ls-layer"
            style="top: 260px; left: 100px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal; height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1700; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Dirancang dan diformulasi melalui penelitian dan uji labolatorium secara khusus dan seksama
        </p>
        <p class="ls-layer"
            style="top: 360px; left: 100px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal;height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1900; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Pengolahan menggunakan mesin-mesin modern dan diproses dengan kualitas yang memebuhi standar current Good
            Manufacturing Process (cGMP).
        </p>
    </div>
</div>


<div class="section section__introduce__mobile" style="width:480px;height:900px;margin:0 auto;margin-bottom: 0px;">
    <!-- Slide 1-->
    <div class="ls-slide" data-ls="kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
        <img src="{{asset('images/formula-terbaik.png')}}" class="ls-l" alt="Image Berbahan Dasar Herbal"
            style="top:30px; left:0; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:420px;"
            data-ls="showinfo:1; durationin:300; delayin:300; loop:true; loopoffsetx:-5sw; loopduration:2000; loopstartat:transitioninstart - 300; loopeasing:easeOutQuint; loopcount:1; position:fixed;">
        <img src="{{asset('images/flower-purple.png')}}" class="ls-layer"
            style="top:350px; left:320px; width: 240px; z-index: 999 "
            data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; delayin:2600; rotatein:60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">
        <img class="ls-layer" src="{{asset('images/formula-terbaik-icon.png')}}" alt="Berbahan dasar herbal"
            style="width: 60px; left: 15px; top: 490px; z-index: 999 "
            data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint; clipin:0 25% 75% 100%; offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;" />
        <h2 class="ls-l" style="top: 570px; left: 15px; z-index: 999; font-weight: 600"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            Formula Terbaik
        </h2>
        <p class="ls-layer"
            style="top: 630px; left: 15px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 18px; width: 380px; white-space: normal; height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1700; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Dirancang dan diformulasi melalui penelitian dan uji labolatorium secara khusus dan seksama
        </p>
        <p class="ls-layer"
            style="top: 720px; left: 15px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 18px; width: 320px; white-space: normal;height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1900; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Pengolahan menggunakan mesin-mesin modern dan diproses dengan kualitas yang memebuhi standar current Good
            Manufacturing Process (cGMP).
        </p>
    </div>
</div>

<div class="section section__introduce" style="width:1280px;height:600px;margin:0 auto;margin-bottom: 0px;">
    <!-- Slide 1-->
    <div class="ls-slide" data-ls="kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
        <img width="320" height="590" src="{{asset('images/kebutuhan-orang-asia.png')}}" class="ls-l"
            alt="Image Berbahan Dasar Herbal"
            style="top:0px; left:-70px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:100%;"
            data-ls="showinfo:1; durationin:300; delayin:300; loop:true; loopoffsetx:-5sw; loopduration:2000; loopstartat:transitioninstart - 300; loopeasing:easeOutQuint; loopcount:1; position:fixed;">

        <div style="background: #fdf6dc; background: -moz-linear-gradient(top, #fdf6dc 0%, #fdf6dc 100%); background: -webkit-linear-gradient(top, #fdf6dc 0%,#fdf6dc 100%); background: linear-gradient(to bottom, #fdf6dc 0%,#fdf6dc 100%); ;left:622px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:100%; width:100%; top:0px; font-size:14px;"
            class="ls-l"
            data-ls="showinfo:1; offsetxin:left; easingin:easeOutQuint; fadein:false; scalexin:0; loop:true; loopduration:1200; loopstartat:transitioninstart + 400; loopeasing:easeOutExpo; loopscalex:0.6; looptransformorigin:0% 50% 0; loopcount:1; position:fixed;">
        </div>


        <img src="{{asset('images/flower-purple.png')}}" class="ls-layer"
            style="top:-100px; left:520px; width: 240px; z-index: 999 "
            data-ls="offsetxin:left; durationin:1200; easingin:easeOutQuad; fadein:false; delayin:0; rotatein:60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">

        <img src="{{asset('images/mengkudu.png')}}" class="ls-layer"
            style="top:520px; left:10px; width: 280px; z-index: 999 "
            data-ls="offsetxin:left; durationin:1200; easingin:easeOutQuad; fadein:false; delayin:2000; rotatein:60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">

        <img src="{{asset('images/kunyit.png')}}" class="ls-layer"
            style="top:540px; left:1000px; width: 240px; z-index: 999 "
            data-ls="offsetxin:right; durationin:1200; easingin:easeOutQuad; fadein:false; delayin:2500; rotatein:-60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">

        <img class="ls-layer" src="{{asset('images/kebutuhan-orang-asia-icon.png')}}" alt="Kebutuhan Orang Asia"
            style="width: 60px; left: 700px; top: 120px; z-index: 999 "
            data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint; clipin:0 25% 75% 100%; offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;" />

        <h2 class="ls-l" style="top: 200px; left: 700px; z-index: 999; font-weight: 600"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            Formula Sesuai Kebutuhan <br /> Orang Asia
        </h2>
        <p class="ls-layer"
            style="top: 300px; left: 700px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal; height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1700; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Dosis yang ideal dan tepat
        </p>
        <p class="ls-layer"
            style="top: 350px; left: 700px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 16px; width: 320px; white-space: normal;height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1900; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Bisa dikonsumsi untuk pencegahan maupun terapi pendamping
        </p>
    </div>
</div>


<div class="section section__introduce__mobile" style="width:480px;height:960px;margin:0 auto;margin-bottom: 0px;">
    <!-- Slide 1-->
    <div class="ls-slide" data-ls="kenburnsscale:1.2; parallaxevent:scroll; parallaxdurationmove:500;">
        <img src="{{asset('images/kebutuhan-orang-asia.png')}}" class="ls-l" alt="Image Berbahan Dasar Herbal"
            style="top:30px; left:0; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:420px;"
            data-ls="showinfo:1; durationin:300; delayin:300; loop:true; loopoffsetx:-5sw; loopduration:2000; loopstartat:transitioninstart - 300; loopeasing:easeOutQuint; loopcount:1; position:fixed;">
        <img src="{{asset('images/leaf.png')}}" class="ls-layer"
            style="top:385px; left: -40px; width: 100px; z-index: 999 "
            data-ls="offsetxin:left; durationin:600; easingin:easeOutQuad; fadein:false; delayin:2600; rotatein:60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">

        <img src="{{asset('images/mengkudu.png')}}" class="ls-layer"
            style="top:840px; left:280px; width: 240px; z-index: 999 "
            data-ls="offsetxin:right; durationin:600; easingin:easeOutQuad; fadein:false; delayin:2600; rotatein:60; offsetxout:left; easingout:easeInQuad; fadeout:false; rotateout:-60;">

        <img class="ls-layer" src="{{asset('images/kebutuhan-orang-asia-icon.png')}}" alt="Berbahan dasar herbal"
            style="width: 60px; left: 15px; top: 490px; z-index: 999 "
            data-ls="offsetxin:-240px; durationin:1200; delayin:1000; easingin:easeOutQuint; clipin:0 25% 75% 100%; offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;" />
        <h2 class="ls-l" style="top: 570px; left: 15px; z-index: 999; font-weight: 600"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1400; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            Formula Sesuai <br /> Kebutuhan Orang Asia
        </h2>
        <p class="ls-layer"
            style="top: 670px; left: 15px; padding-left: 25px; line-height: 24px;color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 18px; width: 380px; white-space: normal; height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1700; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Dosis yang ideal dan tepat
        </p>
        <p class="ls-layer"
            style="top: 720px; left: 15px; padding-left: 25px; line-height: 24px; color: rgba(0, 0, 0, 0.85); z-index: 999; font-weight: normal; font-size: 18px; width: 320px; white-space: normal;height: auto;"
            data-ls="offsetxin:-240px; durationin:1200; delayin:1900; easingin:easeOutQuint;  offsetxout:-100%; durationout:500; clipout:0 0 0 100%; parallaxlevel:0;">
            <i class="material-icons ls-dots-content"
                style="position: absolute; left: 0; top: 4px; color: rgba(0, 0, 0, 0.85); font-size: 18px">fiber_manual_record</i>
            Bisa dikonsumsi untuk pencegahan maupun terapi pendamping
        </p>
    </div>
</div>


<section class="section section__article">
    <div class="container">
        <h2 class="general__title">
            Artikel
        </h2>
        <div class="row">
            @php
                $i = 0;    
            @endphp
            @forelse ($posts as $artikel)
                @php
                    $i++;    
                @endphp
                    <div class="@if ($i === 1)col-lg-8 @else col-lg-4 @endif col-md-6">
                        <div class="article-single @if ($i === 1) article-single__side @endif">
                            <div class="article-single__image">
                                <a href="{{$artikel->slug}}">
                                    <img src="{{$artikel->thumbnail}}" alt="{{$artikel->title}}" />
                                </a>
                            </div>
                            <div class="article-single__description">
                                <div>
                                    <a href="{{$artikel->slug}}">
                                        <h3 class="article-single__title">
                                            {{$artikel->title}}
                                        </h3>
                                    </a>
                                    @php
                                        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $artikel->created_at);
                                        $date = $date->locale('id_ID')->isoFormat('dddd, d MMMM Y');    
                                    @endphp
                                    <span class="article-single__date">
                                        {{$date}}
                                    </span>
                                    @php
                                        $taglessBody = strip_tags($artikel->content);
                                    @endphp
                                    <p class="article-single__excerpt">
                                        {{ $taglessBody }}
                                    </p>
                                    <a class="article-single__link" href="{{$artikel->slug}}">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            @empty

        </div>
            <h2 class="general__title mb-5">
                <span class="text-primary">Sedang Disiapkan</span>
            </h2>
            {{-- tidak semua produk bersertifikat mui --}}
            {{-- <div class="badge-carousel">
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
            </div> --}}
            @endforelse
            <div class="col-md-12 mt-3">
                <a href="{{url('/articles')}}" class="btn btn-konilife d-block mx-auto">
                    Lihat Lainnya
                </a>
            </div>
    </div>
</section>

{{-- <section class="section section__article">
    <img class="floating-component floating-component__sayur" src="{{asset('images/sayur.png')}}" />
    <div class="container">
        <h2 class="heading">
            Instagram Post
        </h2>
        <div class="instagram-carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
            @foreach ($media as $item)
                <div>
                    <div class="instagram-item">
                        <a href="https://www.instagram.com/p/{{$item->getshortCode()}}" target="_blank">
                            <img data-lazy="{{$item->getdisplaySrc()}}" alt="{{$item->getaccessibilityCaption()}}" />
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}


@endsection


@section('scripts')

@endsection
