<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <style type="text/css">
    /* * {
        font-family: 'Gotham';
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    } */

    body {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background: #8A2BE2; */
        background-image: url("<?php echo base_url('assets/img/wp1837180-santiago-bernabeu-wallpapers.jpg'); ?>");
        background-repeat: no-repeat;
        background-size: 100%;
        /* background: -webkit-linear-gradient(left, rgb(138, 137, 137), rgb(87, 87, 87)); */
    }

    /* .cont {
        overflow: hidden;
        position: relative;
        width: 1000px;
        height: 580px;
        background: #fff;
        border-radius: 10px;
    } */

    .form {
        width: 600px;
        height: 450px;
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
        /* position: relative;
        width: 640px;
        height: 100%;
        padding: 50px 30px;
        margin-left: 400px; */
    }

    /* 
    .sub-cont {
        overflow: hidden;
        position: absolute;
        left: 0px;
        top: 0;
        width: 440px;
        height: 600px;
        padding-left: 260px;
        background: #00FA9A; */
    /* background: -webkit-linear-gradient(left, rgb(39, 39, 39), rgb(65, 65, 65)); */
    /* } */
    /* 
    .text {
        overflow: hidden;
        z-index: 2;
        position: absolute;
        left: 0;
        padding-top: 100px;
        padding-left: 7px;
        color: black;
        font-weight: bold;
        text-align: center;

    } */

    h2 {
        width: 100%;
        font-size: 40px;
        text-align: center;
        color: tomato;


    }

    label {
        display: block;
        width: 260px;
        margin: 25px auto;
        margin-top: 46px;
        text-align: left;
        color: #fff;
    }

    label span {
        font-size: 25px;
        font-weight: 600;
        text-transform: uppercase;

    }

    input {
        width: 115%;
        height: 40px;
        border-radius: 15px 0 15px 0;
        border: 2px solid #fff;
        margin-bottom: 8px;
        background-color: transparent;
        color: #fff;
    }

    button {
        display: block;
        margin: 0 auto;
        width: 230px;
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

    .forgot {
        margin-top: 15px;
        text-align: center;
        font-size: 14px;
        font-weight: 600;
        color: white;
        cursor: pointer;
        font-style: italic;
    }

    .forgot:hover {
        color: red;
    }

    .sign-up {
        margin-top: 15px;
        text-align: center;
        font-size: 14px;
        font-weight: 600;
        color: tomato;
        /* color: rgb(66, 66, 66); */
        cursor: pointer;
    }

    .sign-up:hover {
        color: dodgerblue;
        text-decoration: underline;
    }
    </style>
    <title>Login</title>
</head>

<body>



    <div class="cont">
        <nav>
            <div>
                <ul>
                    <li><a href="<?php echo site_url('awal'); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('awal/login'); ?>">Login</a></li>
                    <li><a href="<?php echo site_url('awal/register') ?>">Register</a></li>
                    <li><a href="<?php echo site_url('awal/signout') ?>">loguot</a></li>
                </ul>
            </div>

        </nav>

        <div class="sub-cont">

            <!-- <div class="text">
                <h1>LAPORAN <br>PENGADUAN <br>MASYARAKAT<br></h1>
            </div> -->
        </div>
        <form action="<?php echo site_url('awal/check_login'); ?>" method="post">

            <div class="form">
                <h2>SIG-IN</h2>

                <label>
                    <span>Email</span>
                    <input type="text" name="email">
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password">
                </label>
                <button type="submit" class="btn btn-secondary">Login</button>
                <p class="forgot">Forgot password?</p>
                <center>
                    <a class="sign-up" href="<?php echo site_url('awal/register') ?>">
                        <h3>Silakan sign up!</h3>
                    </a>
                </center>

            </div>
    </div>
    </form>
</body>

</html>
