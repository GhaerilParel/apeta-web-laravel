@extends('templating.layout')
@section('title', 'Organik product')
@section('content')
<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="{{asset('assets/images/loader.png')}}" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="main-logo">
                        <a href="{{ route ('index') }}" class="logo">
                            <img src="{{asset('assets/images/logo-dark.png')}}" width="105" alt="">
                        </a>
                        <div class="mobile-nav__buttons">
                            <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a>
                            <a href="#" class="mini-cart__toggler"><i class="organik-icon-shopping-cart"></i></a>
                        </div><!-- /.mobile__buttons -->

                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.main-logo -->

                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <div class="topbar__info">
                            <i class="organik-icon-email"></i>
                            <p>Email <a href="mailto:info@organik.com">emailnyaini@gmail.com</a></p>
                        </div><!-- /.topbar__info -->
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <div class="topbar__info">
                            <i class="organik-icon-calling"></i>
                            <p>Phone <a href="tel:+92-666-888-0000">+628 9898 7543</a></p>
                        </div><!-- /.topbar__info -->
                        <div class="topbar__buttons">
                            <a href="#" class="search-toggler"><i class="organik-icon-magnifying-glass"></i></a>
                            <a href="#" class="mini-cart__toggler"><i class="organik-icon-shopping-cart"></i></a>
                        </div><!-- /.topbar__buttons -->
                    </div><!-- /.topbar__left -->

                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <ul class="main-menu__list">
						<li class="dropdown">
							<a href="{{ route ('login4') }}"><i class="organik-icon-user"></i>Login / Register</a>
							<ul class="dropdown-content">
								<li><a href="{{ route ('akunsaya') }}">Akun saya</a></li>
								<li><a href="{{ route ('login4') }}">Logout</a></li>
							</ul>
						</li>
					</ul>
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="{{ route ('index') }}">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route ('product') }}">Shop</a>
                            <ul>
                                <li><a href="{{ route ('product') }}">Shop</a></li>
                                <li><a href="{{ route ('product-details') }}">Product Details</a></li>
                                <li><a href="{{ route ('cart') }}">Cart Page</a></li>
                                <li><a href="{{ route ('checkout') }}">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route ('contact') }}">Komunitas</a>
                            <ul>
                                <li><a href="{{ route ('daftarmitra') }}"> Daftar ke Mitra</a></li>
                                <li><a href="{{ route ('contact') }}"> Contact</a></li>
                            </ul>
                        </li>t 
                    </ul>
                </div><!-- /.container -->
            </nav>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Partner </h2>
     product           <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route ('index') }}">Home</a></li>
                    <li>/</li>
                    <li><span>Partner </span></liproduct>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="cart-page">
            <div class="container">
                <div class="table-responsive">
                    <table class="table cart-table">
                                
                        <tbody>
                            <div class="container">
                                <div class="card">
                                    <body>
                                        <h2>Mitra</h2>
                                        <div class="farm-profile">
                                            <div class="profile-circle">
                                                <img src="{{asset('assets/images/logoinstitusi.jpg')}}" alt="logo-institusi">
                                            </div>
                                            <div class="profile-info">
                                                <div class="profile-name">Vokasi Farm</div>
                                                <div class="profile-description">
                                                    Peternakan Vokasi Farm adalah sebuah usaha peternakan yang mengkhususkan diri dalam penyediaan ayam, kambing,
                                                    dan telur berkualitas tinggi. Dengan fokus pada praktik peternakan yang berkelanjutan dan etis,
                                                    Vokasi Farm memberikan perhatian khusus terhadap kesejahteraan hewan dan kualitas produk.
                                                </div>
                                            </div>
                                        </div>
                                                    <a href="#" class="chat-button">Chat Penjual</a>
                                                </div>
                                <div class="card">
                                    <h4>Produk</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="product-card">
                                                <div class="product-card__image">
                                                    <img src="{{asset('assets/images//product-2-product1.png')}}" alt="">
                                                    <div class="product-card__image-content">
                                                        <a href="{{ route ('product-details') }}"><i class="organik-icon-shopping-cart"></i></a>
                                                    </div><!-- /.product-card__image-content -->
                                                </div><!-- /.product-card__image -->
                                                <div class="product-card__content">
                                                    <div class="product-card__left">
                                                        <h3><a href="{{ route ('product-details') }}">Ayam</a></h3>
                                                        <p>Rp. 250.000</p>
                                                    </div><!-- /.product-card__left -->
                                                    <div class="product-card__right">
                                                        <a href="{{ route ('vokasifarm') }}">Vokasi Farm</a>
                                                    </div>
                                                    <!-- /.product-card__right -->
                                                </div><!-- /.product-card__content -->
                                            </div><!-- /.product-card -->
                                        </div><!-- /.col-md-6 col-lg-4 -->
                                        <div class="col-md-6 col-lg-4">
                                            <div class="product-card">
                                                <div class="product-card__image">
                                                    <img src="{{asset('assets/images//product-2-product2.png')}}" alt="">
                                                    <div class="product-card__image-content">
                                                        <a href="{{ route ('product-details') }}" id="product-link"><i class="organik-icon-shopping-cart"></i></a>
                                                    </div><!-- /.product-card__image-content -->
                                                </div><!-- /.product-card__image -->
                                                <div class="product-card__content">
                                                    <div class="product-card__left">
                                                        <h3><a href="{{ route ('product-details') }}">Kambing</a></h3>
                                                        <p>Rp. 1.250.000.</p>
                                                    </div><!-- /.product-card__left -->
                                                    <div class="product-card__right">
                                                        <p>Vokasi Farm</p>
                                                    </div><!-- /.product-card__right -->
                                                </div><!-- /.product-card__content -->
                                            </div><!-- /.product-card -->
                                        </div><!-- /.col-md-6 col-lg-4 -->
                                        <div class="col-md-6 col-lg-4">
                                            <div class="product-card">
                                                <div class="product-card__image">
                                                    <img src="{{asset('assets/images//product-2-product4.png')}}" alt="">
                                                    <div class="product-card__image-content">
                                                        <a href="{{ route ('product-details') }}"><i class="organik-icon-shopping-cart"></i></a>
                                                    </div><!-- /.product-card__image-content -->
                                                </div><!-- /.product-card__image -->
                                                <div class="product-card__content">
                                                    <div class="product-card__left">
                                                        <h3><a href="{{ route ('product-details') }}">Karkas Ayam</a></h3>
                                                        <p>Rp. 30.000/kg</p>
                                                    </div><!-- /.product-card__left -->
                                                    <div class="product-card__right">
                                                        <p><a href="{{ route ('vokasifarm') }}">Vokasi Farm</a></p>
                                                    </div>
                                                    </div><!-- /.product-card__right -->
                                                </div><!-- /.product-card__content -->
                                            </div><!-- /.product-card -->
                                        </div><!-- /.col-md-6 col-lg-4 -->
                                </div>
                            </div>
        <footer class="site-footer background-black-2">
            <img src="{{asset('assets/images/shapes/footer-bg-1-1.png')}}" alt="" class="site-footer__shape-1">
            <img src="{{asset('assets/images/shapes/footer-bg-1-2.png')}}" alt="" class="site-footer__shape-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-widget footer-widget__about-widget">
                            <a href="{{ route ('index') }}" class="footer-widget__logo">
                                <img src="{{asset('assets/images/logo-light.png')}}" alt="" width="105" height="43">
                            </a>
                            <p class="thm-text-dark">Atiam rhoncus sit amet adip
                                scing sed ipsum. Lorem ipsum
                                dolor sit amet adipiscing <br>
                                sem neque.</p>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__contact-widget">
                            <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__contact">
                                <li>
                                    <i class="fa fa-phone-square"></i>
                                    <a href="tel:666-888-0000">+62813 9898 7543</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:info@company.com">Lorem Ipsum</a>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker-alt"></i>
                                    <a href="#">Jl. Ciremei ujung.
                                        Bogor</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__links-widget">
                            <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li>
                                    <a href="{{ route ('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route ('product') }}">Shopping</a>
                                </li>
                                <li>
                                    <a href="{{ route ('contact') }}">Komunitas</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget">
                            <h3 class="footer-widget__title">Partners</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li>
                                    <a href="{{ route ('product') }}">Gopay</a>
                                </li>
                                <li>
                                    <a href="{{ route ('checkout') }}">Dana</a>
                                </li>
                                <li>
                                    <a href="{{ route ('contact') }}">Vokasi Farm</a>
                                </li>
                                <li>
                                    <a href="{{ route ('contact') }}">Ciremei Farm</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="bottom-footer">
                <div class="container">
                    <hr>
                    <div class="inner-container text-center">
                        <div class="bottom-footer__social">
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.bottom-footer__social -->
                        <p class="thm-text-dark">© Copyright <span class="dynamic-year"></span> by Very Good Very Well</p>
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.bottom-footer -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="organik-icon-close"></i></span>

            <div class="logo-box">
                <a href="{{ route ('index') }}" aria-label="logo image"><img src="{{asset('assets/images/logo-light.png')}}" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="organik-icon-email"></i>
                    <a href="mailto:needhelp@organik.com">needhelp@organik.com</a>
                </li>
                <li>
                    <i class="organik-icon-calling"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="{{asset('assets/images/resources/flag-1-1.jpg')}}" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="main-menu__login">
                    <a href="#"><i class="organik-icon-user"></i>Login / Register</a>
                </div><!-- /.main-menu__login -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="mini-cart">
        <div class="mini-cart__overlay mini-cart__toggler"></div>
        <div class="mini-cart__content">
            <div class="mini-cart__top">
                <h3 class="mini-cart__title">Shopping Cart</h3>
                <span class="mini-cart__close mini-cart__toggler"><i class="organik-icon-close"></i></span>
            </div><!-- /.mini-cart__top -->
            <div class="mini-cart__item">
                <img src="{{asset('assets/images//cart-1-1.pproductng')}}" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="{{ route ('product-details') }}">Ayam</a></h3>
                        <p>Rp. 30.000</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <div class="mini-cart__item">
                <img src="{{asset('assets/images//cart-1-2.pproductng')}}" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="{{ route ('product-details') }}">Telur Ayam</a></h3>
                        <p>Rp. 26.000</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <div class="mini-cart__item">
                <img src="{{asset('assets/images//cart-1-3.pproductng')}}" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="{{ route ('product-details') }}">Susu Sapi</a></h3>
                        <p>Rp. 12.000</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <a href="{{ route ('checkout') }}" class="thm-btn mini-cart__checkout">Proceed To Checkout</a>
        </div><!-- /.mini-cart__content -->
    </div><!-- /.cart-toggler -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="organik-icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>ih , 
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset ('assets/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset ('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset ('assets/vendors/countdown/countdown.min.js') }}"></script>
    <!-- template js -->
    <!-- <script src="assets/js/organik.js"></script> -->
    <script src="{{ asset('assets/js/organik.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

@endsection