@include('layouts.partials.customer-care')
<footer class="footer-konilife">
    <div class="footer-konilife__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <h2 class="heading heading__small">
                        Hubungi Kami
                    </h2>
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
                <div class="col-lg-3 col-md-3 mb-5">
                    <h2 class="heading heading__small">
                        Beli Produk Konilife
                    </h2>
                    <a href="https://www.konimexstore.com/produk/pencarian/konilife" target="_blank" class="btn btn-store">
                        <img src={{asset('images/konimex.png')}} alt="Konimex" />
                    </a>
                    <a href="https://www.tokopedia.com/konimexofficial?source=universe&st=product&keyword=konilife" target="_blank" class="btn btn-store">
                        <img src={{asset('images/tokopedia.png')}} alt="Tokopedia" />
                    </a>
                    <a href="https://shopee.co.id/mall/search?keyword=konilife&shop=63334771" target="_blank" class="btn btn-store">
                        <img src={{asset('images/shopee.png')}} alt="Shopee" />
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h2 class="heading heading__small">
                        Ikuti Konilife
                    </h2>
                    <ul class="list-follow">
                        <li>
                            <a href="https://www.facebook.com/konilife/" target="_blank">
                                <img src={{asset('images/facebook-white.svg')}} />
                                <span>
                                    Facebook.com/konilife
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/konilife_official?utm_source=website_konilife" target="_blank">
                                <img src={{asset('images/instagram-white.svg')}} />
                                <span>
                                    instagram.com/konilife_official
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 offset-lg-0 offset-md-8">
                    <img class="footer__image" src="{{asset('images/footer-image.png')}}" alt="Footer image" />
                </div>
            </div>
        </div>
    </div>
    <div class="footer-konilife__bottom">
        <div class="container">
            <h4 class="copyright">
                © Copyright Konimex. All Right Reserved.
            </h4>
        </div>
    </div>
</footer>
