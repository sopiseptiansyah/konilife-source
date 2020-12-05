@extends('layouts.main')

@section('title', 'Solusi Alam, Solusi Konilife')

@section('styles')

@endsection

@section('content')

<section class="section section__article">
    <div class="container">
        <h2 class="heading text-center">
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
            <h2 class="heading text-center mx-auto mb-5">
                <span class="text-primary">Sedang Disiapkan</span>
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
            @endforelse
            <div class="d-flex justify-content-center w-100">
                {{$posts->links()}}
            </div>
    </div>
</section>

@endsection

@section('scripts')

@endsection
