<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class SiswaModel extends CI_Model
{
	// Fungsi untuk menampilkan semua data siswa
	public function view()
	{
		return $this->db->get('laporan_pengaduan')->result();
	}
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode)
	{
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIS tidak harus divalidasi
		// Jadi NIS di validasi hanya ketika menambah data siswa saja
		if ($mode == "save")
			$this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
		$this->form_validation->set_rules('input_tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('input_nik', 'NIK', 'required|numeric|max_length[11]');
		$this->form_validation->set_rules('input_judul', 'Judul', 'required');
		$this->form_validation->set_rules('input_isi', 'Isi', 'required');
		$this->form_validation->set_rules('input_status', 'Status', 'required');
		if ($this->form_validation->run()) // Jika validasi benar
			return true; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return false; // Maka kembalikan hasilnya dengan FALSE
	}
	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save()
	{


		$data = array(
			"nama"          => $this->input->post('input_nama'),
			"tgl_pengaduan" => $this->input->post('input_tanggal'),
			"nik"           => $this->input->post('input_nik'),
			"judul_laporan" => $this->input->post('input_judul'),
			"isi_laporan"   => $this->input->post('input_isi'),
			"status"        => $this->input->post('input_status')
		);
		$this->db->insert('laporan_pengaduan', $data); // Untuk mengeksekusi perintah insert data
	}
	// Fungsi untuk melakukan ubah data siswa berdasarkan ID siswa
	public function edit($id)
	{
		$data = array(
			"nama"          => $this->input->post('input_nama'),
			"tgl_pengaduan" => $this->input->post('input_tanggal'),
			"nik"           => $this->input->post('input_nik'),
			"judul_laporan" => $this->input->post('input_judul'),
			"isi_laporan"   => $this->input->post('input_isi'),
			"status"        => $this->input->post('input_status')
		);
		$this->db->where('id_pengaduan', $id);
		$this->db->update('laporan_pengaduan', $data); // Untuk mengeksekusi perintah update data
	}
	// Fungsi untuk melakukan menghapus data siswa berdasarkan ID siswa
	public function delete($id)
	{
		$this->db->where('id_pengaduan', $id);
		$this->db->delete('laporan_pengaduan'); // Untuk mengeksekusi perintah delete data
	}
}
