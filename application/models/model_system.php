<?php

class Model_system extends CI_Model
{

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
		$data = array(
			'id_pengaduan'  => "",
			'nama'		    => $this->input->post('Nama'),
			'tgl_pengaduan' => $this->input->post('Tanggal'),
			'nik'           => $this->input->post('NIK'),
			'judul_laporan' => $this->input->post('Judul'),
			'isi_laporan'   => $this->input->post('Isi'),
			'foto'          => $this->input->post('Foto'),
			'status'        => $this->input->post('proses')




		);



		// 'foto'          => $this->input->post('Foto'),
		// 'status' => $this->input->post(''),



		$this->db->insert('laporan_pengaduan', $data);
		header("location:" . base_url() . 'awal/datalaporan');
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