<!DOCTYPE html>
<html>

<head>
    <title>laporan pdf</title>
</head>

<body>




    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Pengaduan</th>
                <th>Nik</th>
                <th>Judul</th>
                <th>Isi Laporan</th>
                <th>Foto</th>
                <th>Status</th>
                <!-- <th >Status</th> -->
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
				<td> <img src="<?php echo base_url(); ?>assets/foto/<?php 
				echo $dapor->foto ?>" width="100"
                        height="100">
                </td>

                <td> <?php echo $dapor->status; ?></td>


            </tr>
            <?php }
			} else {
				?>
            <tr>
                <td>
                    <center> NO Data Entry</center>
                </td>
            </tr>
            <?php
			}

			?>



        </tbody>


    </table>

</body>



















</html>




</html>






</html>

</html>
