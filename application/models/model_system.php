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
		$nama          = $this->input->post('Nama');
		$tgl_pengaduan = $this->input->post('Tanggal');
		$nik           = $this->input->post('NIK');
		$judul_laporan = $this->input->post('Judul');
		$isi_laporan   = $this->input->post('Isi');
		$status        = $this->input->post('proses');

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


	public function simpan_dbAdmin()
	{
		$nama          = $this->input->post('Nama');
		$tgl_pengaduan = $this->input->post('Tanggal');
		$nik           = $this->input->post('NIK');
		$judul_laporan = $this->input->post('Judul');
		$isi_laporan   = $this->input->post('Isi');
		$status        = $this->input->post('proses');

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

			$this->db->insert('laporan_admin', $data);
			header("location:" . base_url() . 'awal/datalaporan_admin');
		}
	}



	// register get  dan count

	public function get_user()
	{
		$data = $this->db->get('tabel_user');
		return $data->result();
	}
	public function count_user()
	{
		$data = $this->db->get('tabel_user');
		return $data->num_rows();
	}
	//get dan count laporan di user
	public function get_user1()
	{
		$data = $this->db->get('laporan_pengaduan');
		return $data->result();
	}
	public function count_user1()
	{
		$data = $this->db->get('laporan_pengaduan');
		return $data->num_rows();
	}



	//get admin
	// public function get_admin()
	// {
	// 	$data = $this->db->get('laporan_pengaduan');
	// 	return $data->result();
	// }
	// //count admin
	// public function count_admin()
	// {
	// 	$data = $this->db->get('laporan_pengaduan');
	// 	return $data->num_rows();
	// }



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


	public function update_pengaduan()
	{
		$foto = $_FILES['FOTO'];
		if ($foto = '') {
			// kosong
		} else {
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';

			$this->load->library('upload');
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('FOTO')) {
				echo "gagal upload";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}
		$id = $this->input->post('id');
		$nik = $this->session->userdata('NIK');
		$data = array(
			'id_pengaduan'  => $id,
			'nik'           => $nik,
			'nama'          => $this->input->post('NAME'),
			'tgl_pengaduan' => $this->input->post('TANGGAL'),
			'judul_laporan' => $this->input->post('JUDUL'),
			'isi_laporan'   => $this->input->post('ISI'),
			'foto'          => $foto,
			'status'        => $this->input->post('STATUS')
		);
		echo $data;
		$this->db->set($data);
		$this->db->where('id_pengaduan', $id);
		$this->db->update('laporan_pengaduan');
		header("Location:" . base_url() . "awal/datalaporan");
	}
}