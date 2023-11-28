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
                <h1 style="color: white">DATA PRODUK</h1>
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="-page">
            <div class="container mt-5" style="display:flex; justify-content: center; align: center; gap: 10px;">
                <a href="/tambah-produk-admin" style="font-size: 30px; background-color:#6071be; color: white;border-radius: 20px; padding: 10px;">+ Tambah Produk</a>
                <a href="/data-produk-admin" style="font-size: 30px; background-color:#60be74; color: white;border-radius: 20px; padding: 10px;">Data Produk</a>
                <a href="/data-user-admin" style="font-size: 30px; background-color:#60be74; color: white;border-radius: 20px; padding: 10px;">Data User</a>

                
            </div><!-- /.container -->
            <div class="container mt-3" >
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gambar Produk</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Jenis Produk</th>
                            <th scope="col">Harga Produk</th>
                            <th scope="col">Deskripsi Produk</th>
                            <th scope="col">Nama Toko</th>
                            <th scope="col">Alamat Toko</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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
                    $no_urut = 1;
                    foreach ($data as $row) :
                        echo '<tr>
                                <td>'.$no_urut.'</td>
                                <td>'.(empty($row->gambar_produk) ? '' : '<img src="'.$row->gambar_produk.'" width="100" height="100">').'</td>
                                <td>'.(empty($row->nama_produk) ? '' : $row->nama_produk).'</td>
                                <td>'.(empty($row->jenis_produk) ? '' : 'Rp'.$row->jenis_produk).'</td>
                                <td>'.(empty($row->harga_produk) ? '' : 'Rp'.$row->harga_produk).'</td>
                                <td>'.(empty($row->deskripsi_produk) ? '' : $row->deskripsi_produk).'</td>
                                <td>'.(empty($row->nama_toko) ? '' : $row->nama_toko).'</td>
                                <td>'.(empty($row->alamat_toko) ? '' : $row->alamat_toko).'</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-warning edit" data-id="'.$row->_id.'">Ubah</a>
                                    <a href="'.route('delete-produk', ['id' => $row->_id]).'" class="btn btn-danger mt-1 delete-btn" onclick="return confirm(\'Apakah anda yakin akan menghapus data?\');">Hapus</a>
                                </td>
                            </tr>';

                        $no_urut++;
                    endforeach;
                    if(empty($data)) {
                        echo '<tr><td colspan="9" class="text-center"> Tidak ada data </td></tr>';
                    }

                    ?>
                    </tbody>
                </table>
            </div>
                
        </section><!-- /.-page -->

        <!-- MODAL EDIT -->

        <div class="modal fade" id="modalProduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit Produk</h1>
                    </div>
                    <div class="modal-body">
                        <form id="formProduk" action="/update-produk" method="post">
                            @csrf 
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
                            <button type="submit" class="btn btn-success" form="formProduk">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
        $(document).ready(function() {
            $('.edit').click(function(){
                console.log('Edit button clicked');
                var id = $(this).data('id');
            
                $.ajax({
                    url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/getProdukById?id=' + id,
                    type: 'GET',
                    success: function(res){
                        if (res && res.length > 0) {
                            var data = res[0];
                            $('#modalProduk').modal('show');
                
                            $('#id').val(data._id);
                            $('#nama_produk').val(data.nama_produk);
                            $('#jenis_produk').val(data.jenis_produk);
                            $('#harga_produk').val(data.harga_produk);
                            $('#deskripsi_produk').val(data.deskripsi_produk);
                            $('#nama_toko').val(data.nama_toko);
                            $('#alamat_toko').val(data.alamat_toko);
                        } else {
                            console.error('Invalid response format or empty response.');
                        }
                    },
                    error: function (err){
                        console.log(err);
                    }
                })
            });
        });
    </script>
    
</body>

@endsection