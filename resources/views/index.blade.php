@extends('templating.layout')
@section('title', 'Organik Index')
@section('content')
@php 

session_start();

@endphp
<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="{{ asset ('assets/images/loader.png') }}" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="main-logo">
                        <a href="/index" class="logo">
                            <img src="{{ asset ('assets/images/logo-dark.png') }}" width="105" alt="">
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
                                <?php if(isset($_SESSION['email'])) : ?>
                                <ul class="dropdown-content">
                                    <li><a href="{{ route ('akunsaya') }}">Akun saya</a></li>
                                    <li><a href="{{ route ('signout-user') }}">Logout</a></li>
                                </ul>
                            <?php endif; ?>
                        </li>
                    </ul>
                    
                    <ul class="main-menu__list">
                        <li class="dropdown">
                        <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="/product">Shop</a>
                            <ul>
                                <li><a href="/product">Shop</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/contact">Komunitas</a>
                            <ul>
                            <li><a href="{{ route('daftarmitra') }}"> Daftar ke Mitra</a></li>

                                <li><a href="/contact"> Contact</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
                "slidesPerView": 1,
                "loop": true,
                "effect": "fade",
                "autoplay": {
                    "delay": 5000
                },
                "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                }
                }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url( '{{ asset('assets/images/main-slider/main-slider-1-1.jpg') }}');">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <h2><span>Farm</span> <br>
                                        Market</h2>
                                    <a href="/product" class=" thm-btn">Order Now</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url( '{{ asset('assets/images/main-slider/main-slider-1-2.jpg') }}');">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <h2><span> Farm </span> <br>
                                        Market</h2>
                                    <a href="/product" class=" thm-btn">Order Now</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="organik-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="organik-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <section class="feature-box">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="thm-tiny__slider" id="contact-infos-box" data-tiny-options='{
                        "container": "#contact-infos-box",
                        "items": 1,
                        "slideBy": "page",
                        "gutter": 0,
                        "mouseDrag": true,
                        "autoplay": true,
                        "nav": false,
                        "controlsPosition": "bottom",
                        "controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
                        "autoplayButtonOutput": false,
                        "responsive": {
                            "640": {
                            "items": 2,
                            "gutter": 30
                            },
                            "992": {
                            "gutter": 30,
                            "items": 3
                            },
                            "1200": {
                            "disable": true
                            }
                        }
                    }'>
                        <div>
                            <div class="feature-box__single">
                                <<i class="organik-icon-global-shipping feature-box__icon"></i>>
                                <div class="feature-box__content">
                                    <h3>Return Policy</h3>
                                    <p>Money back guarantee</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                        <div>
                            <div class="feature-box__single">
                                <i class="organik-icon-delivery-truck feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Free Shipping</h3>
                                    <p>On all orders over $25.00</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                        <div>
                            <div class="feature-box__single">
                                <i class="organik-icon-online-store feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Store Locator</h3>
                                    <p>Find your nearest store</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                    </div>
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.feature-box -->

        <section class="new-products">
            <img src="{{ asset ('assets/images/shapes/new-product-shape-1.png') }}" alt="" class="new-products__shape-1">
            <div class="container">
                <div class="new-products__top">
                    <div class="block-title ">
                        <img src = "{{ asset ('assets/images/favicons/favicon-32x32.png') }}"><!-- /.block-title__decor -->
                        <p></p>
                        <h3>Products</h3>
                    </div><!-- /.block-title -->

                    <ul class="post-filter filters list-unstyled">
                        <li class="active filter" data-filter=".filter-item">All</li>
                        <li class="filter" data-filter=".Ternak">Ternak</li>
                        <li class="filter" data-filter=".Karkas">Karkas
                        </li>
                        <li class="filter" data-filter=".HasilTernak">Hasil Ternak
                        </li>
                    </ul>
                </div><!-- /.new-products__top -->
                <div class="row filter-layout">
                    <div class="col-lg-4 col-md-6 filter-item Ternak">
                        <div class="product-card__two">
                            <div class="product-card__two-image">
                                <span class="product-card__two-sale">sale</span>
                                <img src="{{ asset ('assets/images/products/product-2-1.png') }}" alt="Ayam">
                                <div class="product-card__two-image-content">
                                    
                                    
                                    <a href="/product"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="/product-details">Ayam</a></h3>
                                <div class="product-card__two-stars">
                                </div><!-- /.product-card__two-stars -->
                                <p></p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item Ternak">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="{{ asset ('assets/images/products/product-2-2.png') }}" alt="Kambing">
                                <div class="product-card__two-image-content">
                                    
                                    
                                    <a href="/product"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="/product-details">Kambing</a></h3>
                                <div class="product-card__two-stars">
                                </div><!-- /.product-card__two-stars -->
                                <p></p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item Ternak">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="{{ asset ('assets/images/products/product-2-3.png') }}" alt="Sapi">
                                <div class="product-card__two-image-content">
                                    
                                    
                                    <a href="/product"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="/product-details">Sapi</a></h3>
                                <div class="product-card__two-stars">
                                </div><!-- /.product-card__two-stars -->
                                <p></p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item Daging">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="{{ asset ('assets/images/products/product-2-4.png') }}" alt="Daging Ayam">
                                <div class="product-card__two-image-content">
                                    
                                    
                                    <a href="/product"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="/product-details">Karkas Ayam</a></h3>
                                <div class="product-card__two-stars">
                                </div><!-- /.product-card__two-stars -->
                                <p></p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item Daging">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="{{ asset ('assets/images/products/product-2-5.png') }}" alt="Daging Kambing">
                                <div class="product-card__two-image-content">
                                    -
                                    
                                    <a href="/product"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="/product-details">Karkas Kambing</a></h3>
                                <div class="product-card__two-stars">
                                </div><!-- /.product-card__two-stars -->
                                <p></p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item Daging">
                        <div class="product-card__two">
                            <div class="product-card__two-image">
                                <span class="product-card__two-sale">sale</span>
                                <img src="{{ asset ('assets/images/products/product-2-6.png') }}" alt="Daging Sapi">
                                <div class="product-card__two-image-content">
                                    
                                    
                                    <a href="/product"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="/product-details">Karkas Sapi</a></h3>
                                <div class="product-card__two-stars">
                                </div><!-- /.product-card__two-stars -->
                                <p></p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-4 col-md-6 filter-item HasilTernak">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="{{ asset ('assets/images/products/product-2-9.png') }}" alt="Telur Ayam">
                                <div class="product-card__two-image-content">
                                    
                                    
                                    <a href="/product"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="/product-details">Telur Ayam</a></h3>
                                <div class="product-card__two-stars">
                                </div><!-- /.product-card__two-stars -->
                                <p></p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item HasilTernak">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="{{ asset ('assets/images/products/product-2-8.png') }}" alt="Susu Kambing">
                                <div class="product-card__two-image-content">
                                    
                                    
                                    <a href="/product"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="/product-details">Susu Kambing</a></h3>
                                <div class="product-card__two-stars">
                                </div><!-- /.product-card__two-stars -->
                                <p></p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item HasilTernak">
                        <div class="product-card__two">
                            <div class="product-card__two-image">
                                <span class="product-card__two-sale">sale</span>
                                <img src="{{ asset ('assets/images/products/product-2-7.png') }}" alt="Susu Sapi">
                                <div class="product-card__two-image-content">
                                    
                                    
                                    <a href="/product"><i class="organik-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="/product-details">Susu Sapi</a></h3>
                                <div class="product-card__two-stars">
                                </div><!-- /.product-card__two-stars -->
                                <p></p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.new-products -->

        <section class="offer-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="offer-banner__box" style="background-image: url({{ asset ('assets/images/offer-banner-1-1.jpg') }};">
                            <div class="offer-banner__content">
                                <h3><span>100%</span> <br>Organic</h3>
                                <p>Quality Organic Food Store</p>
                                <a href="/product" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                            </div><!-- /.offer-banner__content -->
                        </div><!-- /.offer-banner__box -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="offer-banner__box" style="background-image: url({{ asset ('assets/images/offer-banner-1-2.jpg') }};">
                            <div class="offer-banner__content">
                                <h3><span>100%</span> <br>Organic</h3>
                                <p>Quality Organic Food Store</p>
                                <a href="/product" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                            </div><!-- /.offer-banner__content -->
                        </div><!-- /.offer-banner__box -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.offer-banner -->

        <section class="call-to-action">
            <img src="{{ asset ('assets/images/shapes/call-shape-1.png') }}" alt="" class="call-to-action__shape-1">
            <img src="{{ asset ('assets/images/shapes/call-shape-2.png') }}" alt="" class="call-to-action__shape-2 wow fadeInLeft" data-wow-duration="1500ms">
            <h2 class="floated-text">Oragnic</h2><!-- /.floated-text -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-6 clearfix">
                    </div><!-- /.col-md-12 col-lg-12 col-xl-12 -->
                    <br>
                    <br>
                    <div id="map" style="width: 100%; height: 500px;"></div>
                        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
                        <script src="{{ asset ('assets/js/script.js') }}"></script>
                </div>
                    
                    <div class="col-md-12 col-lg-12 col-xl-6 clearfix">
                        <div class="call-to-action__content">
                            <div class="block-title text-left">
                                <div class="block-title__decor" style="background-image: url({{ asset ('assets/images/shapes/leaf-2-1.png') }});"></div>
                                <!-- /.block-title__decor -->
                                <p>Shopping Store</p>
                                <h3>Farm Only</h3>
                            </div><!-- /.block-title -->
                            <p>There are many variations of passages of lorem ipsum available but the majority have suffered
                                alteration in some form by injected humor or random word.</p>
                            <div class="call-to-action__wrap">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="call-to-action__box">
                                            <i class="organik-icon-farmer"></i>
                                            <h3>Professional
                                                Farmers</h3>
                                        </div><!-- /.call-to-action__box -->
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="call-to-action__box">
                                            <i class="organik-icon-farm"></i>
                                            <h3>Solution
                                                for Farming</h3>
                                        </div><!-- /.call-to-action__box -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.call-to-action__wrap -->
                            <a href="/product" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                        </div><!-- /.call-to-action__content -->
                    </div><!-- /.col-md-12 col-lg-12 col-xl-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action -->

        <section class="call-to-action-two">
            <img src="{{ asset ('assets/images/shapes/call-shape-2-1.png') }}" alt="" class="call-to-action-two__shape-1">
            <img src="{{ asset ('assets/images/shapes/call-shape-2-2.png') }}" alt="" class="call-to-action-two__shape-2">
            <img src="{{ asset ('assets/images/shapes/call-shape-2-3.png') }}" alt="" class="call-to-action-two__shape-3">
            <img src="{{ asset ('assets/images/shapes/call-shape-2-4.png') }}" alt="" class="call-to-action-two__shape-4">
            <img src="{{ asset ('assets/images/shapes/call-shape-2-5.png') }}" alt="" class="call-to-action-two__shape-5">
            <img src="{{ asset ('assets/images/shapes/call-shape-2-6.png') }}" alt="" class="call-to-action-two__shape-6">
            <div class="container">
                <div class="row flex-xl-row-reverse">
                    <div class="col-lg-12 col-xl-6">
                        <div class="call-to-action-two__image">
                            <h2 class="floated-text">Healthy</h2><!-- /.floated-text -->
                            <img src="{{ asset ('assets/images/call-2-1.png') }}" alt="">
                        </div><!-- /.call-to-action-two__image -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="call-to-action-two__content">
                            <div class="block-title text-left">
                                <div class="block-title__decor"></div><!-- /.block-title__decor -->
                                <p>Pure Farm Products</p>
                                <h3>Everyday Farm Food</h3>
                            </div><!-- /.block-title -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Duis aute irure dolor in reprehen in derit.</h4>
                                    <p>Voluptate velit essects quis tempor orci. Suspendisse that potenti faucibus.</p>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Lorem Ipsum
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Lorem Ipsum
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Lorem Ipsum
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Lorem Ipsum
                                        </li>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            Lorem Ipsum
                                        </li>
                                    </ul><!-- /.list-unstyled -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <a href="/product" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                        </div><!-- /.call-to-action-two__content -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action-two -->

    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
    <!-- Tambahkan kode berikut di dalam <body> -->
    <div class="chat-launcher" id="chat-launcher">
        <span class="chat-icon"><a href="/ChatBot">👋</a></span>
    </div>
    <div class="chat-container" id="chat-container">

        <script src="{{ asset ('assets/js/script.js') }}"></script>

        <footer class="site-footer background-black-2">
            <img src="{{ asset ('assets/images/shapes/footer-bg-1-1.png') }}" alt="" class="site-footer__shape-1">
            <img src="{{ asset ('assets/images/shapes/footer-bg-1-2.png') }}" alt="" class="site-footer__shape-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-widget footer-widget__about-widget">
                            <a href="/index" class="footer-widget__logo">
                                <img src="{{ asset ('assets/images/logo-light.png') }}" alt="" width="105" height="43">
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
                                    <a href="/index">Home</a>
                                </li>
                                <li>
                                    <a href="/product">Shopping</a>
                                </li>
                                <li>
                                    <a href="/contact">Komunitas</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget">
                            <h3 class="footer-widget__title">Partners</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li>
                                    <a href="/product">Gopay</a>
                                </li>
                                <li>
                                    <a href="/checkout">Dana</a>
                                </li>
                                <li>
                                    <a href="/contact">Vokasi Farm</a>
                                </li>
                                <li>
                                    <a href="/contact">Ciremei Farm</a>
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
                <a href="/index" aria-label="logo image"><img src="{{ asset ('assets/images/logo-light.png') }}" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="organik-icon-email"></i>
                    <a href="mailto:needhelp@organik.com">emailnyaini@gmail.com</a>
                </li>
                <li>
                    <i class="organik-icon-calling"></i>
                    <a href="tel:666-888-0000">+62813 9898 7543</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="{{ asset ('assets/images/flag-1-1.jpg')}}" alt="">
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
            <img src="{{ asset('assets/images/products/cart-1-1.png') }}" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="/product-details">Ayam</a></h3>
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
                <img src="{{ asset ('assets/images/products/cart-1-2.png') }}" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="/product-details">Telur Ayam</a></h3>
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
                <img src="{{ asset ('assets/images/products/cart-1-3.png') }}" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="/product-details">Susu Sapi</a></h3>
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
    </div>
    <!-- /.search-popup -->
    <div id="map" style="height: 400px;"></div>

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
    <script async defer src="http://maps.google.com/maps/api/js?sensor=false&callback=initMap"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script> -->
    <script src="{{asset('script.js')}}"></script>
    <!-- template js -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('assets/js/organik.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&callback=initMap" async defer></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script> -->

    <!-- Skrip JavaScript untuk menginisialisasi peta -->
    <script>
        function initMap() {
            // Inisialisasi peta di dalam elemen dengan ID "map"
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644}, // Koordinat pusat peta
                zoom: 8 // Tingkat zoom
            });
        }
    </script>
</body>
@endsection
