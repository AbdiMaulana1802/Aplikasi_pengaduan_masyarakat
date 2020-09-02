<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <style type="text/css">
    * {
        font-family: 'Gotham';
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        height: 500%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background: #8A2BE2; */
        background-image: url("<?php echo base_url('assets/img/wp1837180-santiago-bernabeu-wallpapers.jpg'); ?>");
        background-repeat: no-repeat;
        background-size: 128%;
        /* background: -webkit-linear-gradient(left, rgb(138, 137, 137), rgb(87, 87, 87)); */
    }

    .form {
        width: 600px;
        height: 770px;
        margin: 0 auto;
        position: relative;
        background: rgb(0, 0, 0, 0.4);
        text-align: center;
        margin-top: 60px;
        padding: 35px;
        border: 3px solid #fff;
        -webkit-border-radius: 70px 0 70px 0;
        -moz-border-radius: 70px 0 70px 0;
        border-radius: 70px 0 70px 0;
    }



    h2 {
        width: 100%;
        font-size: 400px;
        text-align: center;




    }

    h1 {
        width: 100%;
        font-size: 40px;
        text-align: center;
        color: tomato;

    }

    label {
        display: block;
        width: 270px;
        margin: 25px auto;
        margin-top: 46px;
        text-align: left;
        color: #fff;
    }

    label span {
        font-size: 20px;
        font-weight: 900;
        text-transform: uppercase;


    }

    input {
        width: 115%;
        height: 35px;
        border-radius: 15px 0 15px 0;
        border: 2px solid #fff;
        background-color: transparent;
        color: #fff;
    }

    button {
        display: block;
        margin: 0 auto;
        width: 120px;
        height: 36px;
        color: black;
        cursor: pointer;
        background-color: tomato;
    }

    .btn {

        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 200px;
        text-transform: uppercase;
        font-weight: 600;
        border-radius: 30px;
    }

    .sign-up {
        margin-top: 1px;
        text-align: center;
        font-size: 14px;
        font-weight: 600;
        color: #FF4500;
        /* color: rgb(66, 66, 66); */
        cursor: pointer;
    }

    .sign-up:hover {
        color: dodgerblue;
        text-decoration: underline;
    }

    table {
        margin-top: 40px;
        padding: 30px;
        width: 550px;
        height: 200px;
        border: 3px solid black;
        color: orangered;
        margin-top: 40px;
        margin-left: 80px;
    }

    .link ul li {
        display: inline;
        margin-right: 50px;
    }

    .link {
        margin: auto;
        text-align: right;
    }

    .link ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 25px;

    }
    </style>
</head>

<body>
    <div class="cont">
        <nav>
            <div class="link">
                <div style="background-color:black">
                    <ul>
                        <li><a href="<?php echo site_url('awal'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('awal/login'); ?>">Login</a></li>
                        <li><a href="<?php echo site_url('awal/register') ?>">Register</a></li>
                        <li><a href="<?php echo site_url('awal/signout') ?>">Loguot</a></li>
                    </ul>
                </div>
            </div>

        </nav>


        <form action="<?php echo site_url('awal/simpan_data'); ?>" method="post">


            <div class="text">

                <!-- <h1>LAPORAN PENGADUAN MASYARAKAT</h1> -->

            </div>


            <div class="form">
                <h1>
                    Sign-up
                </h1>


                <label>
                    <span>Username</span>
                    <input type="text" name="nama" placeholder="">
                </label>
                <label>
                    <span>NIK</span>
                    <input type="text" name="nik">
                </label>
                <label>
                    <span>Email</span>
                    <input type="text" name="Email">
                </label>
                <label>
                    <span>No Telpon</span>
                    <input type="text" name="no_telpon">
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="pw">
                </label>
                <!-- <label>
                    <span>Retype Password</span>
                    <input type="password" name="repass">
                </label> -->
                <button type="submit" class="btn btn-secondary">Login</button>
                <center>
                    <a class="sign-up" href="<?php echo site_url('awal/login') ?>">
                        <h3>Silakan Login!</h3>
                    </a>

                </center>






            </div>

            <table border="1">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Username</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Password</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
					if ($c_user > 0) {
						foreach ($user as $datas) {
					?>

                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <?php echo $datas->name; ?>
                        </td>
                        <td>
                            <?php echo $datas->nik; ?>
                        </td>
                        <td>
                            <?php echo $datas->email; ?>
                        </td>
                        <td>
                            <?php echo $datas->no_telpon; ?>
                        </td>
                        <td>
                            <?php echo $datas->password; ?>
                        </td>


                        <td onclick="javascript: return confirm('apakah anda yakin mau menghapus data ini?')">
                            <?php echo anchor('awal/hapus/' . $datas->id, '<button type="button" class="btn btn-danger">Delete</button>'); ?>
                        </td>
                        <td><?php echo anchor('awal/edit/' . $datas->id, '<button type="button" class="btn btn-primary">Update</button>') ?>
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




    </form>



</body>


</html>