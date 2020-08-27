<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <style type="text/css">
    body {
        font-family: 'Gotham';
        background: #00FFFF;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }

    #sidebar {
        background: #4e4e4e;
        color: #fff;
        min-width: 380px;
        max-width: 400px;
        min-height: 100vh;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #4e4e4e;
    }

    #sidebar ul.components {
        padding: 20px 0;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a:hover {
        color: #4e4e4e;
        background: #fff;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: #242424;
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #4e4e4e;
    }

    img {
        border-radius: 50%;
        width: 40%;
    }

    .cont {
        display: block;
        margin: 25px auto;
        padding: auto;
    }

    .card {
        border-radius: 15px;
        margin-top: auto;
        text-transform: uppercase;
    }

    .yes {
        text-align: center;
        background-color: rgb(226, 65, 65);
        font-size: 100px;
        width: 600px;
        height: 130px;
        border: 0;
        color: white;
        font-weight: bold;
    }

    .no {
        text-align: center;
        background-color: rgb(226, 223, 65);
        font-size: 100px;
        width: 600px;
        height: 130px;
        border: 0;
        color: white;
        font-weight: bold;
    }

    .will {
        text-align: center;
        background-color: rgb(88, 219, 88);
        font-size: 100px;
        width: 600px;
        height: 130px;
        border: 0;
        color: white;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="{!! asset('img/icon.png') !!}" alt="">
                <h3>Administrator</h3>
                <h5>18191118</h5>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="<?php echo site_url('awal/dasboard') ?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo site_url('awal/user') ?>">User (laporan pengaduan)</a>
                </li>
                <li>
                    <a href="<?php echo site_url('awal/petugas') ?>">Petugas (Tampilan pengaduan)</a>
                </li>
                <li>
                    <a href="<?php echo site_url('awal/validasi') ?>">Validasi</a>
                </li>
                <!-- <li>
                    <a href="#">Contact</a>
                </li> -->
                <li>
                    <a href="<?php echo site_url('awal') ?>">Logout</a>
                </li>
            </ul>
        </nav>
        <div class="cont">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row no-gutters">
                    <a href="#">
                        <h2>Laporan Pengaduan Sudah Ditanggani</h2>
                    </a>
                    <div class="col-md-4">
                        <div class="card yes">18</div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row no-gutters">
                    <a href="#">
                        <h2>Laporan Pengaduan Belum Ditangani</h2>
                    </a>

                    <div class="col-md-4">
                        <div class="card no">27</div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row no-gutters">
                    <a href="#">
                        <h2>Laporan Pengaduan Segera Ditangani</h2>
                    </a>

                    <div class="col-md-4">
                        <div class="card will">78</div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

