<div class="table-responsive">
    <table class="table table-bordered" id="" width="10%" cellspacing="0">
        <tr>
            <th class="text-center">NO</th>
            <th>NAMA</th>
            <th>Tanggal Pengaduan</th>
            <th>NIK</th>
            <th>Judul Laporan</th>
            <th>Isi Laporan</th>
            <th>Status</th>
            <th colspan="2" class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
        </tr>
        <?php
		$no = 1;
		foreach ($model as $data) {
		?>
        <tr>
            <td class="align-middle text-center"><?php echo $no; ?></td>
            <td class="align-middle"><?php echo $data->nama; ?></td>
            <td class="align-middle"><?php echo $data->tgl_pengaduan; ?></td>
            <td class="align-middle"><?php echo $data->nik; ?></td>
            <td class="align-middle"><?php echo $data->judul_laporan; ?></td>
            <td class="align-middle"><?php echo $data->isi_laporan; ?></td>

            <td class="align-middle"><?php echo $data->status; ?></td>
            <td class="align-middle text-center">
                <a href="javascript:void();" data-id="<?php echo $data->id_pengaduan; ?>" data-toggle="modal"
                    data-target="#form-modal" class="btn btn-default btn-form-ubah"><span
                        class="glyphicon glyphicon-pencil"></span></a>
                <!-- Membuat sebuah textbox hidden yang akan digunakan untuk form ubah -->
                <input type="hidden" class="nama-value" value="<?php echo $data->nama; ?>">
                <input type="hidden" class="tanggal-value" value="<?php echo $data->tgl_pengaduan; ?>">
                <input type="hidden" class="nik-value" value="<?php echo $data->nik; ?>">
                <input type="hidden" class="judul-value" value="<?php echo $data->judul_laporan; ?>">
                <input type="hidden" class="isi-value" value="<?php echo $data->isi_laporan; ?>">

                <input type="hidden" class="status-value" value="<?php echo $data->status; ?>">
            </td>
            <td class="align-middle text-center">
                <a href="javascript:void();" data-id="<?php echo $data->id_pengaduan; ?>" data-toggle="modal"
                    data-target="#delete-modal" class="btn btn-danger btn-alert-hapus"><span
                        class="glyphicon glyphicon-erase"></span></a>
            </td>
        </tr>
        <?php
			$no++; // Tambah 1 setiap kali looping
		}





		?>
    </table>
</div>
</div>