<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
        height: 380%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background: #8A2BE2; */
        background-image: url("<?php echo base_url('assets/img/wp1837179-santiago-bernabeu-wallpapers.jpg'); ?>");
        background-repeat: no-repeat;
        background-size: 100%;
    }

    /* .cont {
        overflow: hidden;
        position: relative;
        width: 1000px;
        height: 620px;
        background: #fff;
        border-radius: 10px;
    } */

    .form {
        width: 600px;
        height: 700px;
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

    /* .sub-cont {
        overflow: hidden;
        position: absolute;
        left: 0px;
        top: 0;
        width: 390px;
        height: 660px;
        padding-left: 260px;
        background: #FF0000; */
    /* background: -webkit-linear-gradient(left, rgb(39, 39, 39), rgb(65, 65, 65)); */
    /* } */

    /* .text {
        overflow: hidden;
        z-index: 2;
        position: absolute;
        left: 0;
        padding-top: 230px;
        padding-left: 75px;
        color: white;
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
        width: 170px;
        height: 36px;
        color: black;
        cursor: pointer;
        background-color: tomato;
    }

    .btn {

        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 170px;
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
    </style>
</head>

<body>
    <div class="cont">
        <div class="sub-cont">

        </div>

        <?php foreach ($user as $datas) {
		?>
        <form action="<?php echo base_url() . 'awal/update'; ?>" method="post">




            <div class="form">
                <h2>SIGN UP</h2>


                <label>
                    <span>Username</span>
                    <input type="hidden" name="id" value="<?php echo $datas->id; ?>">
                    <input type="text" name="nama" value="<?php echo $datas->name; ?>">
                </label>
                <label>
                    <span>NIK</span>
                    <input type="text" name="nik" value="<?php echo $datas->nik; ?>">
                </label>
                <label>
                    <span>Email</span>
                    <input type="text" name="Email" value="<?php echo $datas->email; ?>">
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="pw" value="<?php echo $datas->password; ?>">
                </label>
                <label>
                    <span>Retype Password</span>
                    <input type="password" name="repass" value="<?php echo $datas->retype_pasword; ?>">
                </label>
                <button type="submit" class="btn btn-secondary">Simpan</button>
                <!-- <button type="reset" class="btn btn-danger">Reset</button> -->



            </div>


    </div>


    </form>
    <?php } ?>


</body>


</html>