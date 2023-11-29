@php 

session_start();

if(empty($_SESSION['email_toko'])){
    header('Location: /admin/admin_login');
    exit;
}

@endphp

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mitra Apeta | Tambah Produkt</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
            <li class="nav-item">
                <a class="nav-link" href="/admin/data_produk">
                    <i class="fas fa-vial"></i>
                    <span>Data Produk</span></a>
            </li>


            <div class="sidebar-heading">
                Add Data
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
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
                                <a class="dropdown-item" href="admin/signout-admin" data-toggle="modal" data-target="#keluarModal">
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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
                    </div>

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

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
    <div class="modal fade" id="keluarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
                            window.location.href = '/admin/data_produk';
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

</html>