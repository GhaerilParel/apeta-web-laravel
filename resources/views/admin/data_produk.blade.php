@php 

session_start();

if(empty($_SESSION['email_toko'])){
    header('Location: /admin/admin_login');
    exit;
}

@endphp

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mitra APETA | Data Produk</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .scrollable-table {
            width: 100%; /* Ganti dengan lebar yang sesuai */
            overflow-x: auto;
        }
    </style>
</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/adminmitra">
                <div class="sidebar-brand-text mx-3">Mitra Apeta</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/adminmitra">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Store & Modification
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin/data_produk">
                    <i class="fas fa-vial"></i>
                    <span>Data Produk</span></a>
            </li>


            <div class="sidebar-heading">
                Add Data
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/tambah_produk">
                    <i class="fas fa-plus"></i>
                    <span>Tambah Produk</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['email_toko'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('images/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="admin/signout-admin" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                    <a class="btn btn-primary btn-sm m-e-2" href="/admin/signout-admin">Logout</a>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Produk</h1>
                        <a href="/admin/tambah_produk" class="btn btn-success">
                            <i class="fas fa-plus"></i>
                            Tambah Produk
                        </a>
                    </div>
                    <div class="scrollable-table">
                        <table class="table table-striped-columns">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar Produk</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Jenis Produk</th>
                                <th scope="col">Harga Produk</th>
                                <th scope="col">Deskripsi Produk</th>
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
                                        <td>'.(empty($row->jenis_produk) ? '' : $row->jenis_produk).'</td>
                                        <td>'.(empty($row->harga_produk) ? '' : 'Rp'.$row->harga_produk).'</td>
                                        <td>'.(empty($row->deskripsi_produk) ? '' : $row->deskripsi_produk).'</td>
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
                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


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
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success" form="formProduk">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- END MODAL EDIT -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Apeta 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik tombol "Logout" untuk keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/admin/signout-admin">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

    


</body>

</html>s