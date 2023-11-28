@extends('templating.layout')
@section('title', 'Organik product')
@section('content')
@php 

session_start();

@endphp
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
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('asset('assets/images/backgrounds/page-header-bg-1-1.jpg')');"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2></h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>/</li>
                    <li><a href="{{ route('product') }}">Product</a></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="product-sidebar">
                            <div class="product-sidebar__single product-sidebar__search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button class="organik-icon-magnifying-glass" type="submit"></button>
                                </form>
                            </div><!-- /.product-sidebar__single -->
                            <div class="product-sidebar__single">
                                <h3>Categories</h3>
                                <ul class="list-unstyled product-sidebar__links">
                                    <li><a href="#">Ayam <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Kambing <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Sapi <i class="fa fa-angle-right"></i></a></li>
                                </ul><!-- /.list-unstyled product-sidebar__links -->
                            </div><!-- /.product-sidebar__single -->
                        </div><!-- /.product-sidebar -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-3 -->

                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="product-sorter">
                            <p>Showing 1–9 of 18 results</p>
                            <div class="product-sorter__select">
                                <select class="selectpicker">
                                    <option value="All">Sort by ... </option>
                                    <option value="Hewan">Sort by Hewan</option>
                                    <option value="Karkas">Sort by Karkas</option>
                                    <option value="HasilTernak">Sort by Hasil Ternak</option>
                                </select>
                            </div><!-- /.product-sorter__select -->
                        </div><!-- /.product-sorter -->
                        <div class="row">
                            
                            <?php
                            $cUrl = curl_init();
    
                            $options = array(
                                CURLOPT_URL => 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/getAllProduk',
                                CURLOPT_CUSTOMREQUEST => 'GET',
                                CURLOPT_RETURNTRANSFER => TRUE
                            );
    
                            curl_setopt_array($cUrl, $options);
    
                            $response = curl_exec($cUrl);
    
                            $data = json_decode($response);
    
                            curl_close($cUrl);

                            $counter = 1;
                            foreach ($data as $row) :
                            $modalId = 'myModal' . $counter;
                            $formattedHargaProduk = number_format($row->harga_produk, 0, ',', '.');
                                echo '<div class="col-md-6 col-lg-4">
                                <div class="product-card">
                                    <div class="product-card__image">
                                        <img src="'.$row->gambar_produk.'">
                                    </div>
                                    
                                    <div class="product-card__left">
                                        <h3><a href="#'.$modalId.'" class="open-modal" data-custom-action="Beli">'.$row->nama_produk.'</a></h3>
                                        <p>'.$formattedHargaProduk.'</p>
                                    </div>
                                    <div class="product-card__right">
                                        <a href="#">'.$row->nama_toko.'
                                    </div>
                                    
                                </div>
                            </div>';
                            $counter++;
                            endforeach;
                            if(empty($data)) {
                                echo '<h1>Tidak ada produk tersedia</h1>';
                            }
    
                            ?>
                        </div><!-- /.row -->
                        {{-- <div class="text-center">
                            <a href="#" class="thm-btn __load-moreproduct">Load More</a><!-- /.thm-btn -->
                        </div><!-- /.text-center --> --}}
                    </div><!-- /.col-sm-12 col-md-12 col-lg-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->

            


        </section><!-- /.-page -->

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
                                    <a href="index{{ route ('index') }}">Home</a>
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
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        
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
    </div>
    <!-- /.search-popup -->


    {{-- Modal Detail Produk --}}
            
            <!-- Modal Produk -->
            <?php
      
            $counter = 1;
      
            foreach($data as $row):
              $modalId = 'myModal' . $counter;
              $formattedHargaProduk = number_format($row->harga_produk, 0, ',', '.');
              if (isset($_SESSION['email'])) {
                echo '<div id="'.$modalId.'" class="modal">
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <div class="row px-3 py-3 px-0">
        
                    <div class="col-md-6 d-flex justify-content-center align-items-center"
                      style="border:2px solid #7FC334; border-radius: 20px;">
                      <img src="'.$row->gambar_produk.'" style="height: auto; width: 200px;" alt="" class="img-fluid">
                    </div>
        
                    <div class="col-md-6">
                      <h2 class="mt-3">'
                      .$row->nama_produk.
                      '</h2>
        
                      <div style="background-color: #7FC334; width: 100%; height: 2px; border-radius: 20px; margin: 10px 0;"
                        id="garis"></div>
        
                      <form>
                        <input type="hidden" id="email" name="email" value="'.$_SESSION['email'].'">
                        <input type="hidden" id="nama_produk" name="nama_produk" value="'.$row->nama_produk.'">
                        <input type="hidden" id="harga_produk" name="harga_produk" value="'.$row->harga_produk.'">
                        <input type="hidden" class="alamat" id="alamat" name="alamat">
                        <input type="hidden" class="no_hp" id="no_hp" name="no_hp">
                        <div class="row" style="display: flex; justify-content: center; align-items: center;">
                          <div class="col-6">
                            <div class="harga-produk">
                              <h2 id="harga-produk" value="'.$row->harga_produk.'" style="color: #7FC334;">Rp'
                              .$formattedHargaProduk.
                              '</h2>
                            </div>
                          </div>
        
                          <div class="col-6">
                            <div class="total-obat">
                              <input type="number" id="total_produk" name="total_produk" value="1" min="1">
                            </div>
                          </div>
                        </div>
      
        
                        <p class="text-justify mt-2">
                        '
                        .$row->deskripsi_produk.
                        '
                        </p>
        
                        <button type="submit" id="tombol_beli" onclick="sendToWhatsapp()">
                          <i class="fa fa-plus" aria-hidden="true"></i> Beli
                        </button>
      
                      </form>
        
                    </div>
                  </div>
                </div>
              </div>';
              }
            $counter++;
            endforeach;
      
            ?>
            <!-- End Modal Produk -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    <script src="{{ asset('assets/js/organik.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
    // Menangani klik pada tautan "Beli"
document.querySelectorAll(".open-modal").forEach(function (button) {
  button.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default behavior of the anchor tag
    const modalId = this.getAttribute("href").substring(1);
    document.getElementById(modalId).style.display = "block";

    // Get the modal content element
    const modalContent = document.getElementById(modalId).querySelector(".modal-content");

    // Menangani klik pada tombol penutup modal
    modalContent.querySelector(".close").addEventListener("click", function () {
      document.getElementById(modalId).style.display = "none";
    });

    // Menangani klik di luar modal untuk menutupnya
    window.addEventListener("click", function (event) {
      if (event.target == document.getElementById(modalId)) {
        document.getElementById(modalId).style.display = "none";
      }
    });

    // Menangani klik tombol "Beli" di dalam modal
    modalContent.querySelector("#tombol_beli").addEventListener("click", function () {
      sendToWhatsapp(modalContent);
    });
  });
});

function sendToWhatsapp(modalContent) {
  let number = "+6285779410576";

  let email = modalContent.querySelector('#email').value;
  let nama_produk = modalContent.querySelector('#nama_produk').value;
  let harga_produk = parseInt(modalContent.querySelector('#harga_produk').value);
  let total_produk = parseInt(modalContent.querySelector('#total_produk').value);

  // Calculate total harga
  let total_harga = harga_produk * total_produk;

  var url = "https://wa.me/" + number + "?text=" +
      "Email : " + email + "%0a" +
      "Produk : " + nama_produk + "%0a" +
      "Harga : " + harga_produk + "%0a" +
      "Total Produk : " + total_produk + "%0a" +
      "Total Harga : " + total_harga;

  // You can open the WhatsApp link or do something else with the generated URL
  // For example, open it in a new tab:
  window.open(url, '_blank');
}



    </script>
</body>

@endsection