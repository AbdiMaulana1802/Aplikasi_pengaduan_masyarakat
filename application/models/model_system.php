<?php

class Model_system extends CI_Model
{



	public function cek_signin($where)
	{
		$petugas = $this->db->get_where("petugas", $where);
		$masyarakat = $this->db->get_where("tabel_user", $where);

		if ($petugas->result() == null) {
			return $masyarakat;
		} else {
			return $petugas;
		}
	}


	// get data pengaduan berdasarkan nik
	// public function ambilData()
	// {
	// 	$nik = $this->session->userdata('nik');
	// 	$query = $this->db->query("SELECT * FROM `pengaduan_masyarakat(masyarakat)` WHERE `nik` = '$nik'");
	// 	return $query->result();
	// }

	// // tampil data pengaduan berdasarkan status 0
	// public function tampil_pengaduanbaru()
	// {
	// 	$query = $this->db->query("SELECT * FROM `pengaduan_masyarakat(masyarakat` WHERE `status` = '0'");
	// 	return $query->result();
	// }

	// // hitung data berdasarkan status 0
	// public function HitungData1()
	// {
	// 	$this->db->where('status', '0');
	// 	return $this->db->count_all_results('pengaduan_masyarakat(masyarakat');
	// }




	public function simpan_db()
	{

		$data = array(
			'id'             => "",
			'name'           => $this->input->post('nama'),
			'nik'            => $this->input->post('nik'),
			'email'          => $this->input->post('Email'),
			'no_telpon'      => $this->input->post('no_telpon'),
			'password'       => $this->input->post('pw'),


		);

		$this->db->insert('tabel_user', $data);
		header("location:" . base_url() . 'awal/login');
	}




	public function simpan_dblaporan()
	{
		$nama = $this->input->post('Nama');
		$tgl_pengaduan = $this->input->post('Tanggal');
		$nik = $this->input->post('NIK');
		$judul_laporan =  $this->input->post('Judul');
		$isi_laporan = $this->input->post('Isi');
		$status = $this->input->post('proses');

		$foto = $_FILES['Foto'];
		if ($foto = '') {
		} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$this->load->library('upload');
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('Foto')) {
				echo "gagal upload";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}



			$data = array(
				'id_pengaduan'  => "",
				'nama'		    => $nama,
				'tgl_pengaduan' => $tgl_pengaduan,
				'nik'           => $nik,
				'judul_laporan' => $judul_laporan,
				'isi_laporan'   => $isi_laporan,
				'foto'			=> $foto,
				'status'        => $status




			);

			$this->db->insert('laporan_pengaduan', $data);
			header("location:" . base_url() . 'awal/datalaporan');
		}
	}

	//get register

	public function get_user()
	{
		$data = $this->db->get('tabel_user');
		return $data->result();
	}
	//get laporan
	public function get_user1()
	{
		$data = $this->db->get('laporan_pengaduan');
		return $data->result();
	}
	public function count_user()
	{
		$data = $this->db->get('tabel_user');
		return $data->num_rows();
	}
	public function count_user1()
	{
		$data = $this->db->get('laporan_pengaduan');
		return $data->num_rows();
	}

	//untuk mngecek login
	public function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	//untuk memghapus data register
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	//untuk memghapus data laporan pengaduan 

	public function hapus_datamasyarakat($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	//untuk edit data register
	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	//untuk edit data laporan pengaduan

	public function edit_datamasyarakat($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	//untuk update data register
	public function update_data($id, $data)
	{
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('tabel_user');
	}

	//untuk update data laporan

	public function update_datalaporan()
	{
		$data = array(
			// 'id_pengaduan'  =>$this->input->post('id'),
			'nama'          => $this->input->post('name'),
			'tgl_pengaduan' => $this->input->post('tanggal'),
			'nik'           => $this->input->post('NIK'),
			'judul_laporan' => $this->input->post('judul'),
			'isi_laporan'   => $this->input->post('isi'),
			'status'        => $this->input->post('Status'),
		);

		$where = array(
			'id_pengaduan' => $this->input->post('id'),
		);

		$foto = $_FILES['Foto'];
		if ($foto = '') {
		} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$this->load->library('upload');
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('Foto')) {
				echo "gagal upload";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}




			$this->db->update('laporan_pengaduan', $data, $where, $foto);
			header("Location:" . base_url() . 'awal/datalaporan');
		}
	}
}