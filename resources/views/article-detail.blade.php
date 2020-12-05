@extends('layouts.main')

@section('title', 'Solusi Alam, Solusi Konilife')

@section('styles')

@endsection

@section('content')

<section class="section section__article pb-3">
    <div class="container">
        <div class="article-detail">
            <h1 class="article-detail__title">
                {{$article->title}}
            </h1>
            @php
                $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at);
                $date = $date->locale('id_ID')->isoFormat('dddd, d MMMM Y');    
            @endphp
            <span class="article-detail__date">
                {{$date}}
            </span>
            <div class="article-detail__thumbnail" style="background-image: url('{{$article->image}}');">
                <img src="{{$article->image}}" alt="{{$article->title}}">
            </div>
            <div class="article-detail__content">
                <div class="article-detail__content__wrapper">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
        <hr />
        <div class="article-share">
            <button class="btn btn-share" data-sharer="facebook" data-hashtag="konilife" data-url="{{$article->slug}}">
                <img src="{{asset('images/facebook-white.svg')}}" alt="facebook Icon" />
                Share on Facebook
            </button>
            <button class="btn btn-share btn-share-twitter" data-sharer="twitter" data-title="{{$article->title}}" data-hashtags="kesehatan, konilife" data-url="{{$article->slug}}">
                <img src="{{asset('images/twitter-white.svg')}}" alt="Twitter Icon" />
                Share on Twitter
            </button>
        </div>
    </div>
</section>


<section class="section section__article">
    <div class="container">
        <h2 class="heading text-center">
            Artikel Lainnya
        </h2>
        <div class="other-carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
            @foreach($other_articles as $article)
            <div>
                <div class="article-single">
                    <div class="article-single__image">
                        <a href="{{ $article->slug }}">
                            <img src={{ asset($article->thumbnail) }} alt="{{ $article->title }}" />
                        </a>
                    </div>
                    <div class="article-single__description">
                        <div>
                            <a href="{{ $article->slug }}">
                                <h3 class="article-single__title">
                                    {{ $article->title }}
                                </h3>
                            </a>
                            <span class="article-single__date">
                                {{ $article->created_at->format('d F Y') }}
                            </span>
                            <p class="article-single__excerpt">
                                {{ Str::limit(strip_tags($article->content), 300) }}
                            </p>
                            <a class="article-single__link" href="{{ $article->slug }}">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endsection
