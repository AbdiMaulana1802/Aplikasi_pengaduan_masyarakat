<?php

class Model_system extends CI_Model
{

	// public function tampil_data()
	// {
	// 	return $this->db->get('laporan_pengaduan');
	// }

	public function simpan_db()
	{

		$data = array(
			'id' => "",
			'name' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'email' => $this->input->post('Email'),
			'password' => $this->input->post('pw'),
			'retype_pasword' => $this->input->post('repass')

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



			// 'foto'          => $this->input->post('Foto'),
			// 'status' => $this->input->post(''),



			$this->db->insert('laporan_pengaduan', $data);
			header("location:" . base_url() . 'awal/datalaporan');
		}
	}


	public function get_user()
	{
		$data = $this->db->get('tabel_user');
		return $data->result();
	}

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

	//untuk memghapus data
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	//untuk edit data
	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($id, $data)
	{
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('tabel_user');
	}
}