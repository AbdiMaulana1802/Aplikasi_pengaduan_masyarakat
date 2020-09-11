<?php

use FontLib\Table\Type\head;

class admin_t extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
	}
	public function admin()
	{
		$this->load->view('admin');
	}
	public function datalaporan_admin()
	{
		$data['lapor_admin'] = $this->model_admin->get_admin();
		$data['l_admin'] = $this->model_admin->count_admin();
		$this->load->view('admin', $data);
	}
}
// 	public function simpan_dataAdmin()
// 	{
// 		$this->model_admin->simpan_dbAdmin();
// 	}
// }