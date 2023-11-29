@extends('templating.layout')
@section('title', 'Organik Akun saya')
@section('content')
@php 

session_start();

@endphp
<body>
<style>
    body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    }

    header {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
    }

    h1 {
    font-size: 24px;
    margin-bottom: 0;
    }

    main {
    padding: 100px;
    }

    form {
    display: block;
    width: 1000px;
    margin: 0 auto;
    border-radius: 60px;
    padding: 20px;
    }

    .profile-pic {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-color: #fff;
    margin: 0 auto;
    }

    .profile-pic img {
    width: 100%;
    height: 100%;
    }

    .profile-pic-controls {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
    }

    .profile-pic-controls a {
    text-decoration: none;
    padding: 5px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
    background-color: #178e17;
    color: #fff;
    border-radius: 10px;
    cursor: pointer;
    margin-left: 0;
    margin-top: 0;
    }

    #buttun {
    margin-bottom: 40px;
    margin-top: 1px;
    padding-top:-5px;

    }

    .form-group {
    margin-bottom: 5px;
    padding-top:5px;
    }

    #simpan {
    text-align: center;
    }

    button {
        background-color: #4CAF50; /* Warna hijau */
        color: white;
        padding: 10px 450px;
        font-size: 16px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        aligment: center;
    }

    button:hover {
        background-color: #45a049; /* Warna hijau yang berbeda saat dihover */
    }

    label {
    display: block;
    margin-top: 20px;
    margin-bottom: 5px;
    border-radius: 60px;
    }

    input {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 10px;
    }

    input[type="button"] {
    background-color: #47a35b;
    color: #fff;
    padding: 10px;
    border: none;
    cursor: pointer;
    border-radius: 10PX;
    }

    footer {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
    }
</style>

    <div class="preloader">
        <img class="preloader__image" width="55" src="{{asset('assets/assets/images/loader.png')}}" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="main-logo">
                    <a href="{{ route('index') }}" class="logo">
                            <img src="{{asset('assets/assets/images/logo-dark.png')}}" width="105" alt="">
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
                        @if(isset($_SESSION['email']))
                            <a href="{{ route('login4') }}"><i class="organik-icon-user"></i>{{ $_SESSION['email'] }}</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('akunsaya') }}">Akun saya</a></li>
                                <li><a href="{{ route('signout-user') }}">Logout</a></li>
                            </ul>
                        @else
                            <a href="{{ route('login4') }}"><i class="organik-icon-user"></i>Login / Register</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('akunsaya') }}">Akun saya</a></li>
                                <li><a href="{{ route('signout-user') }}">Logout</a></li>
                            </ul>
                        @endif
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
                                <li><a href="/product-details">Product Details</a></li>
                                <li><a href="/cart">Cart Page</a></li>
                                <li><a href="{{ route('checkout') }}">Checkout</a>
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
        
        <!-- <form action="proses-pendaftaran.php" method="post"> -->
        
            <div class="profile-pic">
                <img src="{{asset('assets/images/logoinstitusi.jpg')}}" alt="Profile picture" />
            </div>
            <div class="profile-pic-controls" id="buttun" style="margin: 0;">

                <form action="/hapus-user" method="post" style="display: flex;" onsubmit="return confirm('Yakin ingin hapus akun?');">
                    @csrf
                    <input type="hidden" name="id" id="id_hapus">
                    <button type="submit" style="text-decoration: none;
                            padding: 5px 20px;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            margin-top: 10px;
                            background-color: rgb(219, 0, 0);
                            color: #fff;
                            border-radius: 10px;
                            cursor: pointer;
                            margin-left: 0;
                            margin-top: 0;">Hapus</button>
                
                    <a href="javascript:void(0);" id="edit" onclick="openModal()" style="margin-left: 10px">Ubah</a>
                </form>
                
            </div>
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email"  value="<?php echo $_SESSION['email'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor Handphone</label>
                <input type="no_hp" id="no_hp" readonly>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" readonly>
            </div>  
        <form>
      
        <footer>
          &copy; Very Good Very Well
        </footer>

        <!-- tadinya pake route('proses-pendaftaran') -->
        <form action="proses-pendaftaran" method="post">
        <!-- ... (unchanged form content) ... -->
        </div>

    </form>
        <script src="{{ asset('assets/js/script.js') }}"></script>

        <footer class="site-footer background-black-2">
            <img src="{{asset('assets/assets/images/shapes/footer-bg-1-1.png')}}" alt="" class="site-footer__shape-1">
            <img src="{{asset('assets/assets/images/shapes/footer-bg-1-2.png')}}" alt="" class="site-footer__shape-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-widget footer-widget__about-widget">
                            <a href="{{ route('index') }}" class="footer-widget__logo">
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
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('product') }}">Shopping</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Komunitas</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget">
                            <h3 class="footer-widget__title">Partners</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li>
                                    <a href="{{ route('product') }}">Gopay</a>
                                </li>
                                <li>
                                    <a href="{{ route('checkout') }}">Dana</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Vokasi Farm</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Ciremei Farm</a>
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
                <a href="{{ route('index') }}" aria-label="logo image"><img src="{{asset('assets/assets/images/logo-light.png')}}" width="155" alt="" /></a>
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
                    <img src="resources/assets/images/resources/flag-1-1.jpg" alt="">
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
                <img src="resources/assets/images/products/cart-1-1.png" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="{{ route('product-details') }}">Ayam</a></h3>
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
                <img src="resources/assets/images/products/cart-1-2.png" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="{{ route('product-details') }}">Telur Ayam</a></h3>
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
                <img src="resources/assets/images/products/cart-1-3.png" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="{{ route('product-details') }}">Susu Sapi</a></h3>
                        <p>Rp. 12.000</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <a href="{{ route('checkout') }}" class="thm-btn mini-cart__checkout">Proceed To Checkout</a>
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

    {{-- MODAL EDIT DATA USER --}}
    <div id="modalUser" class="modal">
        <div class="modal-content">
          <h2>Edit Data User</h2>
            <form id="formUser" action="/update-user" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username_edit-form" name="username" placeholder="username"
                        required>
                    <input type="hidden" id="id_edit-form" name="id">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email_edit-form" name="email" placeholder="email"
                        required>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                    <input type="number" class="form-control" id="no_hp_edit-form" name="no_hp" placeholder="no_hp"
                        required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat_edit-form" name="alamat" placeholder="alamat"
                        required>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Batal</button>
                <button type="submit" class="btn btn-success" form="formUser">Simpan</button>
            </div>
        </div>
    </div>

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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script src="script.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset ('assets/js/organik.js') }}"></script>
    <script src="{{ asset ('assets/js/script.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap" async defer></script>

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

    <script>
        function openModal() {
            var modal = document.getElementById("modalUser");
            modal.style.display = "block";
            }
            
            // Fungsi untuk menutup modal
            function closeModal() {
            var modal = document.getElementById("modalUser");
            modal.style.display = "none";
            }
            
            // Tutup modal jika pengguna mengklik di luar modal
            window.onclick = function(event) {
            var modal = document.getElementById("modalUser");
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }

        $(document).ready(function() {
        var email = $('#email').val();
    
        $.ajax({
            url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/getUserByEmail?email=' + email,
            type: 'GET',
            success: function(res){
                var data = res[0];
                $('#username').val(data.username);
                $('#password').val(data.password);
                $('#no_hp').val(data.no_hp);
                $('#alamat').val(data.alamat);

                $('#id_hapus').val(data._id);
                $('#id_edit-form').val(data._id);
                $('#username_edit-form').val(data.username);
                $('#email_edit-form').val(data.email);
                $('#no_hp_edit-form').val(data.no_hp);
                $('#alamat_edit-form').val(data.alamat);

            },
            error: function (err){
                console.log(err);
            }
        });
    });
    </script>
</body>
@endsection