<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('asset/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('asset/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-10">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="sidebar-brand-text mx-3">admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('awal/dasboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <div class="sidebar-heading">
                Admin
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('awal/admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin(Tanggapan)</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">




            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>


            <!-- Nav Item - User -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('awal/user') ?>">
                    <i class="fas fa-user"></i>
                    <span>User(Laporan Pengaduan)</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Validasi -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('awal/datalaporan') ?>">
                    <i class="fas fa-table"></i>
                    <span>Data</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Validasi -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('awal/validasi') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Validasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('awal') ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
            </li>
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




                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <? echo $user['name']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('assets/img/avatar5.png'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo site_url('awal') ?>" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h2 mb-4 text-gray-800 ">Tanggapan Laporan Pengaduan Masyarakat</h1>

                    <form action="<?php echo site_url('awal/simpan_datalaporan'); ?>" method="post">

                        <div class="container">
                            <!-- header -->
                            <header class="sticky-footer bg-white">
                                <div class="container my-auto">
                                    <div class="copyright text-center my-auto">
                                        <form action="">


                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Nama Lengkap</span>
                                                </div>

                                                <input type="text" name="Nama" class="form-control"
                                                    placeholder="Masukan nama anda" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Tanggal
                                                        pengaduan</span>
                                                </div>

                                                <input type="date" name="Tanggal" class="form-control"
                                                    placeholder="Masukan Tanggal pengaduan Anda" aria-label="tanggal"
                                                    aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">NIK</span>
                                                </div>

                                                <input type="text" name="NIK" class="form-control"
                                                    placeholder="Masukan NIK  Anda" aria-label="nik"
                                                    aria-describedby="basic-addon1">
                                            </div>


                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Judul</span>
                                                </div>

                                                <input type="text" name="Judul" class="form-control"
                                                    placeholder="Masukan judul Laporan Anda" aria-label="judul"
                                                    aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">isi laporan</span>
                                                </div>
                                                <textarea name="Isi" class="form-control" aria-label="With textarea"
                                                    placeholder="Masukan isi Laporan Anda"></textarea>
                                            </div>

                                            <div class="input-group mb-4">
                                                <!-- <div class="input-group-prepend"> -->
                                                <span class="input-group-text" id="basic-addon1">foto</span>

                                                <input type="file" name="Foto" class="form-control" placeholder=""
                                                    aria-label="foto">
                                            </div>


                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Status</span>
                                                </div>

                                                <select class="form-control" name="proses">

                                                    <option>0</option>
                                                    <option>proses</option>
                                                    <option>selesai</option>


                                                </select>


                                            </div>








                                    </div>





                                    <div class="input-group mb-4 ">
                                        <button type="submit" class="btn btn-success">Kirim Laporan</button>

                                    </div>




                                </div>


                    </form>
                </div>



            </div>
            </header>

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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>


                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">





                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your
                    current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo site_url('awal') ?>">Logout</a>
                </div>
            </div>
        </div>

        </form>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js">
    </script>




    <!-- Core plugin JavaScript-->

    <script src="<?php echo base_url('asset/'); ?>vendor/jquery-easing/jquery.easing.min.js">
    </script>







    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('asset/'); ?>js/sb-admin-2.min.js"></script>















</body>



</html>




</html>












































































































</html>













</html>














































</html>

</html>