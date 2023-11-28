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
                <h1 style="color: white">DATA USER</h1>
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="-page">
            <div class="container mt-5" style="display:flex; justify-content: center; align: center; gap: 10px;">
                <a href="/data-produk-admin" style="font-size: 30px; background-color:#60be74; color: white;border-radius: 20px; padding: 10px;">Data Produk</a>
                <a href="/data-user-admin" style="font-size: 30px; background-color:#60be74; color: white;border-radius: 20px; padding: 10px;">Data User</a>

                
            </div><!-- /.container -->
            <div class="container mt-3" >
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Handphone</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Password</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $cUrl = curl_init();

                    $options = array(
                        CURLOPT_URL => 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/getAllPengguna',
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
                                <td>'.(empty($row->username) ? '' : $row->username).'</td>
                                <td>'.(empty($row->email) ? '' : $row->email).'</td>
                                <td>'.(empty($row->no_hp) ? '' : $row->no_hp).'</td>
                                <td>'.(empty($row->alamat) ? '' : $row->alamat).'</td>
                                <td>'.(empty($row->password) ? '' : $row->password).'</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-warning edit" data-id="'.$row->_id.'">Ubah</a>
                                    <a href="'.route('delete-user', ['id' => $row->_id]).'" class="btn btn-danger mt-1 delete-btn" onclick="return confirm(\'Apakah anda yakin akan menghapus data?\');">Hapus</a>
                                </td>
                            </tr>';

                        $no_urut++;
                    endforeach;
                    if(empty($data)) {
                        echo '<tr><td colspan="5" class="text-center"> Tidak ada data </td></tr>';
                    }

                    ?>
                    </tbody>
                </table>
            </div>
                
        </section><!-- /.-page -->

        <!-- MODAL EDIT -->

        <div class="modal fade" id="modalUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Edit User</h1>
                    </div>
                    <div class="modal-body">
                        <form id="formUser" action="/update-user-admin" method="post">
                            @csrf 
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="username" required>
                                <input type="hidden" id="id" name="id">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor Handphone</label>
                                <input type="number" class="form-control" id="no_hp" name="no_hp"
                                    placeholder="no_hp" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat"
                                placeholder="alamat" required></textarea>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success" form="formUser">Simpan</button>
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
                    url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-drzkm/endpoint/getPenggunaById?id=' + id,
                    type: 'GET',
                    success: function(res){
                        if (res && res.length > 0) {
                            var data = res[0];
                            $('#modalUser').modal('show');
                
                            $('#id').val(data._id);
                            $('#username').val(data.username);
                            $('#email').val(data.email);
                            $('#no_hp').val(data.no_hp);
                            $('#alamat').val(data.alamat);
                            $('#password').val(data.password);
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