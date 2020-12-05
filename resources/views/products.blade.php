@extends('layouts.main')

@section('title', 'Solusi Alam, Solusi Konilife')

@section('styles')

@endsection

@section('content')
<section class="section section__product">
    <div class="container">
        <h2 class="heading text-center mb-5">
            Produk Kami
        </h2>
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
                    <div class="product-item__image">
                        <img src="{{asset('images/redaxin.png')}}" alt="Redaxin">
                    </div>
                    <div class="product-item__description">
                        <p>
                            Membantu mengurangi lemak darah
                        </p>
                        <a href="{{url('product/redaxin')}}" class="btn btn-konilife">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item  product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
                    <div class="product-item__image">
                        <img src="{{asset('images/oxi.png')}}" alt="Oxj">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col">
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
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col long-content">
                    <div class="product-item__image">
                        <img src="{{asset('images/normovas.png')}}" alt="Normovas">
                    </div>
                    <div class="product-item__description">
                        <p style="color:  #EE4770;">
                            Secara Tradisional Membantu Meringankan Tekanan Darah Tinggi yang Ringan
                        </p>
                        <a href="{{url('product/normovas')}}" class="btn btn-konilife">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-4">
                <div class="product-item product-item__col long-content">
                    <div class="product-item__image">
                        <img src="{{asset('images/digestcare.png')}}" alt="digestcare">
                    </div>
                    <div class="product-item__description">
                        <p style="color:  #AFCD22;">
                            Membantu Memelihara Kesehatan Pencernaan dan Membantu Melancarkan Buang Air Besar
                        </p>
                        <a href="{{url('product/digestcare')}}" class="btn btn-konilife">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection
