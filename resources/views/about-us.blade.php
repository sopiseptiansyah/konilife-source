@extends('layouts.main')

@section('title', 'Solusi Alam, Solusi Konilife')

@section('styles')

@endsection

@section('content')
<section class="section section__about">
    <div class="container">
        <div class="about-wrapper">
            <h1 class="heading text-center">
                Tentang Kami
            </h1>
            <p>
                Divisi Natural Produk dari PT. Konimex memproduksi suplemen kesehatan berbahan dasar alami, yang disajikan untuk para konsumennya yang telah dirancang dan diformulasikan melalui penelitian dan uji laboratorium secara khusus dan seksama di bagian Research dan Development Department. Pengolahan berbagai macam produk suplemen kesehatan ini dilakukan menggunakan mesin-mesin modern dan dikerjakan memenuhi standard current Good Manufacturing Practice (cGMP).
            </p>
            <p>
                Kini PT. Konimex mempersembahkan Konilife, yang merupakan rangkaian suplemen kesehatan berbahan alami sebagai solusi untuk berbagai masalah kesehatan Anda. Sebagai produk suplemen kesehatan, Konilife diproduksi berdasarkan formula yang sudah disesuaikan untuk orang Asia dengan dosis ideal, serta zat aktif terbaik berdasarkan penelitian terbaru.
            </p>
        </div>
        <div class="about-thumb">
            <img src="{{asset('images/about-thumb.jpg')}}" />
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
@endsection

@section('scripts')

@endsection
