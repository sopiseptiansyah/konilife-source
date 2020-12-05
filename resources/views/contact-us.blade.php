@extends('layouts.main')

@section('title', 'Solusi Alam, Solusi Konilife')

@section('styles')

@endsection

@section('content')
    <section class="section section__contact">
        <div class="contact-wrapper">
            <div class="contact-wrapper__col">
                <div class="contact-wrapper__col-image" style="background-image: url('{{asset('images/berbahan-dasar-herbal.png')}}');">
                </div>
                <div class="contact-wrapper__detail">
                    <h1 class="heading">
                        Hubungi Kami
                    </h1>
                    <ul class="list-contact">
                        <li>
                            <i class="material-icons">place</i>
                            <p>
                                Jl. K.H Wahid Hasyim No.162 <br />
                                Kota Jakarta Pusat, DKI Jakarta
                            </p>
                        </li>
                        <li>
                            <i class="material-icons">phone</i>
                            <p>
                                Kantor (021 8888 2222)<br />
                                Cust. service (0800 1999 234)
                            </p>
                        </li>
                        <li>
                            <i class="material-icons">mail</i>
                            <a href="mailto:customer_service@konimex.com" target="_blank">
                                customer_service@konimex.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact-wrapper__col">
                <div class="contact-wrapper__col-form">
                    <h2 class="heading">
                        Kirim Pesan
                    </h2>
                    <p>
                        Anda dapat mengisi form ini untuk memberikan komentar atau pertanyaan tentang perusahaan atau produk-produk kami.
                    </p>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block mb-3">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form class="contact-form" action="{{route('contact')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan nama lengkap anda" value="{{old('name')}}">
                            @error('name')
                                <div class="pl-2 invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Alamat Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan alamat email anda" value="{{old('email')}}">
                            @error('email')
                                <div class="pl-2 invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Telepon</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Masukkan nomor telepon anda" value="{{old('phone')}}">
                            @error('phone')
                                <div class="pl-2 invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city">Kota</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="Masukkan nama kota tinggal anda" value="{{old('city')}}">
                            @error('city')
                                <div class="pl-2 invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subject">Judul Pesan</label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Masukkan judul pesan" value="{{old('subject')}}">
                            @error('subject')
                                <div class="pl-2 invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4"  placeholder="Tulis pesan anda">{{old('message')}}</textarea>
                            @error('message')
                                <div class="pl-2 invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-konilife">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('layouts.partials.footer-copyright')
@endsection

@section('scripts')

@endsection
