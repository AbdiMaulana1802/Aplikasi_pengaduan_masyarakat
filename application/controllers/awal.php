<?php

use FontLib\Table\Type\head;

class awal extends CI_Controller
{
	public function __construct()
	{


		Parent::__construct();
		$this->load->model('model_system');
	}

	//login
	public function index()
	{
		$this->load->view('home');
	}



	//register
	public function register()
	{

		$data['user'] = $this->model_system->get_user();
		$data['c_user'] = $this->model_system->count_user();
		$this->load->view('register', $data);
	}

	public function login()
	{
		$this->load->view('login');
	}



	///simpen data
	public function simpan_data()
	{
		$this->model_system->simpan_db();
	}

	public function simpan_datalaporan()
	{
		$this->model_system->simpan_dblaporan();
	}
	public function simpan_dataAdmin()
	{
		$this->model_system->simpan_dbAdmin();
	}




	public function check_login()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'Email' => $email,
			'password' => $password
		);

		$cek = $this->model_system->cek_signin($where)->num_rows();

		if ($cek > 0) {
			$role = $this->model_system->cek_signin($where)->row(0)->level;
			if ($role == 'admin' || $role == 'petugas') {
				$current_role = $this->model_system->cek_signin($where)->row(0)->level;
				$current_id   = $this->model_system->cek_signin($where)->row(0)->id_petugas;

				$data_session = array(
					'id_petugas'  => $current_id,
					'email'       => $email,
					'role'        => $current_role,
					'status'      => 'signin'

				);

				$this->session->set_userdata($data_session);

				if ($this->session->userdata('status') == 'signin') {
					header("Location:" . base_url() . 'awal/datalaporan_admin');
				} else {
					header("Location:" . base_url() . 'awal/dashboard');
				}
			} else {
				$current_id = $this->model_system->cek_signin($where)->row(0)->nik;

				$data_session = array(
					'id' => $current_id,
					'email' => $email,
					'role' => 'tabel_user',
					'status' => 'signin'

				);

				$this->session->set_userdata($data_session);
				if ($this->session->userdata('status') == 'signin') {
					header("Location:" . base_url() . 'awal/user');
				} else {
					header("Location:" . base_url());
				}
			}
		} else {
			echo 'login gagal';
		}
	}


	// 	$cek = $this->model_system->cek_login("tabel_user", $where)->num_rows();

	// 	if ($cek > 0) {
	// 		$data_session = array(
	// 			'email' => $email,
	// 			'status' => 'signin'

	// 		);



	// 		$this->session->set_userdata($data_session);
	// 		if ($this->session->userdata('status') == 'signin') {
	// 			header("location:" . base_url() . 'awal/admin');
	// 		} else {
	// 			echo 'login Gagal';
	// 		}
	// 	} else {
	// 		echo 'Email dan password yang anda masukan salah!';
	// 	}
	// }




	public function signout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}




	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function user()
	{
		$this->load->view('user');
	}

	public function petugas()
	{
		$this->load->view('petugas');
	}
	public function validasi()
	{
		$this->load->view('validasi');
	}

	// public function admin()
	// {
	// 	$this->load->view('admin');
	// }

	//fungsi data laporan user
	public function datalaporan()
	{
		$data['user1'] = $this->model_system->get_user1();
		$data['data_user'] = $this->model_system->count_user1();
		$this->load->view('data', $data);
	}


	// untuk ketampilan admin
	public function datalaporan_admin()
	{
		$data['user1'] = $this->model_system->get_user1();
		$data['data_user'] = $this->model_system->count_user1();
		$this->load->view('admin', $data);
	}




	// untuk delete register
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->model_system->hapus_data($where, 'tabel_user');
		redirect('awal/register');
	}

	// untuk delete data pengaduan
	public function hapus_laporan($id)
	{
		$where = array('id_pengaduan' => $id);
		$this->model_system->hapus_datamasyarakat($where, 'laporan_pengaduan');
		redirect('awal/datalaporan');
	}


	//umtuk update register

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['awal'] = $this->model_system->edit_data($where, 'tabel_user')->result();

		$data['user'] = $this->model_system->get_user();
		$data['c_user'] = $this->model_system->count_user();
		$this->load->view('edit', $data);
	}
	//update register
	public function update()
	{

		$id1        = $this->input->post('id');
		$nama1      = $this->input->post('nama');
		$nik1       = $this->input->post('nik');
		$Email1     = $this->input->post('Email');
		$no_telpon1 = $this->input->post('no_telpon');
		$pw1        = $this->input->post('pw');


		$data = array(
			'name' => $nama1,
			'nik' => $nik1,
			'email' => $Email1,
			'no_telpon' => $no_telpon1,
			'password' => $pw1,

		);

		$this->model_system->update_data($id1, $data);
		redirect('awal/register');
	}


	//untuk edit data laporan pengaduan masyarakat

	public function edit_laporan($id)
	{
		$where = array('id_pengaduan' => $id);
		$data['awal'] = $this->model_system->edit_datamasyarakat($where, 'laporan_pengaduan')->result();

		$data['user1'] = $this->model_system->get_user1();
		$data['data_user'] = $this->model_system->count_user1();
		$this->load->view('edit_pengaduan', $data);
	}

	//untuk update data laporan pengaduan masyarakat
	public function update_laporan()
	{
		$this->model_system->update_pengaduan();
	}







	public function pdf()
	{

		ob_start();
		$data['user1'] = $this->model_system->get_user1();
		$data['data_user'] = $this->model_system->count_user1();
		$this->load->view('laporan_pdf', $data);

		$html = ob_get_contents();
		ob_end_clean();

		require './assets/html2pdf/autoload.php';

		$pdf = new \Spipu\Html2Pdf\Html2Pdf('p', 'A4', 'en');
		$pdf->WriteHTML($html);

		$pdf->Output('Data_laporan_' . date('d-m-y') . '.pdf', 'D');
	}

	public function excel()
	{
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Laporan Data pengaduan.xls"');
		header('Cache-Control: max-age=0');
		$data['user1'] = $this->model_system->get_user1();
		$data['data_user'] = $this->model_system->count_user1();
		$this->load->view('laporan_pdf', $data);
	}
}