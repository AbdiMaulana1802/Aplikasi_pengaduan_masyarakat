<?php

class awal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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



	public function check_login()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'Email' => $email,
			'password' => $password
		);
		$cek = $this->model_system->cek_login("tabel_user", $where)->num_rows();

		if ($cek > 0) {
			$data_session = array(
				'email' => $email,
				'status' => 'signin'

			);




			$this->session->set_userdata($data_session);
			if ($this->session->userdata('status') == 'signin') {
				header("location:" . base_url() . 'awal/admin');
			} else {
				echo 'login Gagal';
			}
		} else {
			echo 'Email dan password yang anda masukan salah!';
		}
	}

	public function signout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}




	public function dasboard()
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

	public function admin()
	{
		$this->load->view('admin');
	}

	//fungsi data laporan
	public function datalaporan()
	{
		$data['user1'] = $this->model_system->get_user1();
		$data['data_user'] = $this->model_system->count_user1();
		$this->load->view('data', $data);
	}

	// untuk delete
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->model_system->hapus_data($where, 'tabel_user');
		redirect('awal/register');
	}

	//umtuk update

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['awal'] = $this->model_system->edit_data($where, 'tabel_user')->result();

		$data['user'] = $this->model_system->get_user();
		$data['c_user'] = $this->model_system->count_user();
		$this->load->view('edit', $data);
	}

	public function update()
	{

		$id1 = $this->input->post('id');
		$nama1 = $this->input->post('nama');
		$nik1 = $this->input->post('nik');
		$Email1 = $this->input->post('Email');
		$pw1 = $this->input->post('pw');
		$repass1 = $this->input->post('repass');

		$data = array(
			'name' => $nama1,
			'nik' => $nik1,
			'email' => $Email1,
			'password' => $pw1,
			'retype_pasword' => $repass1
		);

		$this->model_system->update_data($id1, $data);
		redirect('awal/register');
	}
}