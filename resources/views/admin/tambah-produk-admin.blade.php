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

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('asset('assets/images/backgrounds/page-header-bg-1-1.jpg')');"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h1 style="color: white">TAMBAH DATA PRODUK</h1>
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="-page">
            <div class="container mt-5" style="display:flex; justify-content: center; align: center; gap: 10px;">
                <a href="/data-user-admin" style="font-size: 30px; background-color:#6071be; color: white;border-radius: 20px; padding: 10px;">+ Tambah Produk</a>
                <a href="/data-produk-admin" style="font-size: 30px; background-color:#60be74; color: white;border-radius: 20px; padding: 10px;">Data Produk</a>

                
            </div><!-- /.container -->
            <div class="container mt-3" >
                <form id="formProduk" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="gambar_produk" class="form-label">Gambar produk</label>
                        <input type="file" class="form-control" id="gambar_produk" name="gambar_produk" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                            placeholder="nama_produk" required>
                        <input type="hidden" id="id" name="id">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_produk" class="form-label">Jenis Produk</label>
                        <input type="text" class="form-control" id="jenis_produk" name="jenis_produk"
                            placeholder="jenis_produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_produk" class="form-label">Harga Produk</label>
                        <input type="number" class="form-control" id="harga_produk" name="harga_produk"
                            placeholder="harga_produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk"
                        placeholder="deskripsi_produk" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nama_toko" class="form-label">Nama Toko</label>
                        <textarea class="form-control" id="nama_toko" name="nama_toko"
                        placeholder="nama_toko" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="alamat_toko" class="form-label">Alamat Toko</label>
                        <textarea class="form-control" id="alamat_toko" name="alamat_toko"
                        placeholder="alamat_toko" required></textarea>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" form="formProduk" id="simpan-produk">Simpan</button>
                </div>
            </div>
                
        </section><!-- /.-page -->


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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
            $('#simpan-produk').click(function () {

                // Menggunakan FileReader untuk membaca file dan mengonversi ke base64
                var fileInput = document.getElementById('gambar_produk');
                var file = fileInput.files[0];
                var reader = new FileReader();

                reader.onloadend = function () {
                    var base64Image = reader.result;

                    // AJAX request
                    var url = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/insertProduk';
                    var type = 'POST';

                    $.ajax({
                        url: url,
                        type: type,
                        async: false,
                        data: {
                            gambar_produk: base64Image,
                            nama_produk: $('#nama_produk').val(),
                            jenis_produk: $('#jenis_produk').val(),
                            harga_produk: $('#harga_produk').val(),
                            deskripsi_produk: $('#deskripsi_produk').val(),
                            nama_toko: $('#nama_toko').val(),
                            alamat_toko: $('#alamat_toko').val(),
                        },
                        success: function () {
                            window.location.href = '/data-produk-admin';
                        },
                        error: function (err) {
                            console.log(err);
                        }
                    });
                };

                if (file) {
                    reader.readAsDataURL(file); // Membaca file sebagai data URL (base64)
                }
            });
        });
</script>
    


    
</body>

@endsection