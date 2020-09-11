<?php

class Model_admin extends CI_Model
{
	// get admin
	public function get_admin()
	{
		$data = $this->db->get('laporan_pengaduan');
		return $data->result();
	}
	public function count_admin()
	{
		$data = $this->db->get('laporan_pengaduan');
		return $data->num_rows();
	}
}

// 	public function simpan_dbAdmin()
// 	{
// 		$nama          = $this->input->post('Nama');
// 		$tgl_pengaduan = $this->input->post('Tanggal');
// 		$nik           = $this->input->post('NIK');
// 		$judul_laporan = $this->input->post('Judul');
// 		$isi_laporan   = $this->input->post('Isi');
// 		$status        = $this->input->post('proses');

// 		$foto = $_FILES['Foto'];
// 		if ($foto = '') {
// 		} else {
// 			$config['upload_path'] = './assets/foto';
// 			$config['allowed_types'] = 'jpg|png|gif|jpeg';
// 			$this->load->library('upload');
// 			$this->upload->initialize($config);

// 			if (!$this->upload->do_upload('Foto')) {
// 				echo "gagal upload";
// 				die();
// 			} else {
// 				$foto = $this->upload->data('file_name');
// 			}

// 			$data = array(
// 				'id_pengaduan'  => "",
// 				'nama'		    => $nama,
// 				'tgl_pengaduan' => $tgl_pengaduan,
// 				'nik'           => $nik,
// 				'judul_laporan' => $judul_laporan,
// 				'isi_laporan'   => $isi_laporan,
// 				'foto'			=> $foto,
// 				'status'        => $status




// 			);

// 			$this->db->insert('laporan_pengaduan', $data);
// 			header("location:" . base_url() . 'admin_t/datalaporan_admin');
// 		}
// 	}
// }
	// get data pengaduan berdasarkan nik
// 	public function ambilData()
// 	{
// 		$nik = $this->session->userdata('nik');
// 		$query = $this->db->query("SELECT * FROM `laporan_pengaduan` WHERE `nik` = '$nik'");
// 		return $query->result();
// 	}

// 	//tampil data seluruh pengaduan 
// 	public function tampil_pengaduan()
// 	{
// 		$query = $this->db->query("SELECT * FROM `laporan_pengaduan` ORDER BY `tgl_pengaduan` DESC");
// 		return $query->result();
// 	}

// 	// tampil data pengaduan berdasarkan status 0
// 	public function tampil_pengaduanbaru()
// 	{
// 		$query = $this->db->query("SELECT * FROM `laporan_pengaduan` WHERE `status` = '0'");
// 		return $query->result();
// 	}

// 	// tampil data pengaduan berdasarkan status proses
// 	public function tampil_pengaduan_proses()
// 	{
// 		$query = $this->db->query("SELECT * FROM `laporan_pengaduan` WHERE `status` = 'proses'");
// 		return $query->result();
// 	}

// 	// tampil data pengaduan berdasarkan status selesai
// 	public function tampil_pengaduan_selesai()
// 	{
// 		$query = $this->db->query("SELECT * FROM `laporan_pengaduan` WHERE `status` = 'selesai'");
// 		return $query->result();
// 	}

// 	// tampil data tanggapan
// 	public function tampil_tanggapan()
// 	{
// 		$query = $this->db->query("SELECT * FROM `tanggapan`");
// 		return $query->result();
// 	}

// 	// hitung data berdasarkan status 0
// 	public function HitungData1()
// 	{
// 		$this->db->where('status', '0');
// 		return $this->db->count_all_results('laporan_pengaduan');
// 	}

// 	// hitung data berdasarkan status proses
// 	public function HitungData2()
// 	{
// 		$this->db->where('status', 'proses');
// 		return $this->db->count_all_results('laporan_pengaduan');
// 	}

// 	// hitung data berdasarkan status selesai
// 	public function HitungData3()
// 	{
// 		$this->db->where('status', 'selesai');
// 		return $this->db->count_all_results('laporan_pengaduan');
// 	}
// }