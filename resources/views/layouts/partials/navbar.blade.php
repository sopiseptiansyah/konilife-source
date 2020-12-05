<nav class="navbar navbar-expand-lg navbar-light navbar-konilife bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('images/logo.png')}}" alt="{{ config('app.name', 'Laravel') }} " />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger hamburger--collapse js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
                Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{url('about')}}">
                Tentang Kami
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('products') || Request::is('product/*') ? 'active' : '' }}" href="{{url('products')}}">
                Produk
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('articles') || Request::is('article/*') ? 'active' : '' }}" href="{{url('articles')}}">
                Artikel
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('store') ? 'active' : '' }}" href="{{url('store')}}">
                Store
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('contact-us') ? 'active' : '' }}" href="{{url('contact-us')}}">
                Kontak
            </a>
          </li>
          <li class="nav-item nav-item__social">
            <a class="nav-link" href="https://www.facebook.com/konilife/" target="_blank">
                <img src="{{asset('images/facebook.svg')}}" />
            </a>
            <a class="nav-link" href="https://instagram.com/konilife_official?utm_source=website_konilife" target="_blank">
                <img src="{{asset('images/instagram.svg')}}" />
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav>