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
    <style>
    .align-middle {
        vertical-align: middle !important;
    }
    </style>
    <script>
    var base_url = '<?= base_url() ?>' // Buat variabel base_url agar bisa di akses di semua file js
    </script>

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
                petugas
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('awal/dashboard') ?>">
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
                                    <? echo $user['name']; ?>
                                </span>
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
                    <!-- // pdf -->
                    <div class="card-header py-1">
                        <a class="btn btn-warning" href="<?php echo base_url('awal/pdf') ?>">
                            <i class="fa fa-file"></i>Export Pdf </a>

                        <!-- excel -->

                        <a class="btn btn-primary" href="<?php echo base_url('awal/excel') ?>">
                            <i class="fa fa-file"></i>Export excel </a>
                    </div>

                    <div class="well ">
                        <!-- <div class="card-header py-1"> -->
                        <button type="button" id="btn-tambah" data-toggle="modal" data-target="#form-modal"
                            class="btn btn-success pull-right">
                            <span class="glyphicon glyphicon-plus"></span> Tulis Laporan Anda
                        </button>

                    </div>
                    <div id="pesan-sukses" class="alert alert-success" style="margin: 10px 20px;"></div>




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
                                        <th colspan="2">Action</th>
                                        <!-- <th scope="col">Status</th> -->
                                    </tr>


                                </thead>
                                <tbody>
                                    <?php
									if ($data_user > 0) {
										foreach ($user1 as $dapor) {
									?>
                                    <tr>
                                        <td> <?php echo $dapor->id_pengaduan; ?></td>
                                        <td> <?php echo $dapor->nama; ?></td>
                                        <td> <?php echo $dapor->tgl_pengaduan; ?></td>
                                        <td> <?php echo $dapor->nik; ?></td>
                                        <td> <?php echo $dapor->judul_laporan; ?></td>
                                        <td> <?php echo $dapor->isi_laporan; ?></td>

                                        <td> <img src="<?php echo base_url(); ?>assets/foto/<?php echo $dapor->foto ?>"
                                                width="100" height="100">
                                        </td>
                                        <td> <?php echo $dapor->status; ?></td>

                                        <td
                                            onclick="javascript: return confirm('apakah anda yakin mau menghapus data ini?')">
                                            <?php echo anchor(
														'awal/hapus_laporan/' . $dapor->id_pengaduan,
														'<button type="button" class="btn btn-danger">Delete</button>'
													); ?>
                                        </td>
                                        <td><?php echo anchor(
														'awal/edit_laporan/' .  $dapor->id_pengaduan,
														'<button type="button" class="btn btn-primary">Update</button>'
													) ?>
                                        </td>


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



            <div id="form-modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-titles">
                                <h3>Tulis Laporan Pengaduan Anda</h3>
                                <!-- Beri id "modal-title" untuk tag span pada judul modal -->
                                <!-- <span id="modal-title"></span> -->
                            </h4>
                        </div>
                        <div class="modal-body">
                            <!-- Beri id "pesan-error" untuk menampung pesan error -->
                            <div id="pesan-error" class="alert alert-danger"></div>
                            <form>

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Pengaduan</label>
                                    <input type="date" class="form-control" id="Tanggal" name="tanggal">

                                </div>

                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" class="form-control" id="nis" name="nik" placeholder="NIK">
                                </div>

                                <div class="form-group">
                                    <label>Judul Laporan</label>
                                    <input type="text" class="form-control" id="judul_laporan" name="judul"
                                        placeholder="judul Laporan">
                                </div>

                                <div class="form-group">
                                    <label>Isi Laporan</label>
                                    <textarea class="form-control" id="isi_laporan" name="isi"
                                        placeholder="Isi Laporan"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control" id="foto" name="Foto">

                                </div>



                                <div class="form-group">
                                    <label>Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="0">0</option>
                                        <option value="proses">Proses</option>
                                        <option value="selesai">Selesai</option>
                                    </select>
                                </div>


                            </form>
                        </div>
                        <div class="modal-footer">
                            <!-- Beri id "loading-simpan" untuk loading ketika klik tombol simpan -->
                            <div id="loading-simpan" class="pull-left">
                                <b>Sedang menyimpan...</b>
                            </div>
                            <!-- Beri id "loading-ubah" untuk loading ketika klik tombol ubah -->
                            <div id="loading-ubah" class="pull-left">
                                <b>Sedang mengubah...</b>
                            </div>
                            <!-- Beri id "btn-simpan" untuk tombol simpan nya -->
                            <button type="button" class="btn btn-primary" id="btn-simpan">Simpan</button>
                            <!-- Beri id "btn-ubah" untuk tombol simpan nya -->
                            <button type="button" class="btn btn-primary" id="btn-ubah">Ubah</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
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





    <!-- Load File jquery.min.js yang ada difolder js -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Load File bootstrap.min.js yang ada difolder js -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Load file ajax.js yang ada di folder js -->
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>









</body>



</html>



















































































































</html>













































































































































</html>

</html>

</html>


</html>


</html>
