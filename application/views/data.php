<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laporan data</title>

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
                    <i class="fas fa-user-secret"></i>
                </div>
                <div class="sidebar-brand-text mx-3">USER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <div class="sidebar-heading">
                Admin
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('awal/dasboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">




            <!-- Heading -->
            <div class="sidebar-heading">
                User
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

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="m-0 font-weight-bold text-primary">Data Laporan Pengaduan Masyarakat</h3>
                        <form action="<?php echo site_url('awal/simpan_datalaporan'); ?>" method="post">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Tanggal Pengaduan</th>
                                        <th scope="col">Nik</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Isi Laporan</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Status</th>
                                        <!-- <th scope="col">Status</th> -->
                                    </tr>


                                </thead>
                                <tbody>
                                    <?php
									if ($data_user > 0) {
										foreach ($user1 as $dapor) {
									?>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td> <?php echo $dapor->nama; ?></td>
                                        <td> <?php echo $dapor->tgl_pengaduan; ?></td>
                                        <td> <?php echo $dapor->nik; ?></td>
                                        <td> <?php echo $dapor->judul_laporan; ?></td>
                                        <td> <?php echo $dapor->isi_laporan; ?></td>
                                        <td> <?php echo $dapor->foto; ?></td>
                                        <td> <?php echo $dapor->status; ?></td>


                                    </tr>
                                    <?php }
									} else {
										?>
                                    <tr>
                                        <td colspan="8">
                                            <center> NO Data Entry</center>
                                        </td>
                                    </tr>
                                    <?php
									}

									?>



                                </tbody>


                            </table>
                        </div>
                    </div>

                    </form>
                </div>

            </div>





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