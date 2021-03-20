<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class favorit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('favorit_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/favorit";
		// $data['account'] = $this->account_model->get_account();
 		$data['favorit'] = $this->favorit_model->get_favorit();
		$this->load->view('landing/Marketplace_Template', $data);
	}

	public function hapus()
	{

			if($this->favorit_model->hapus() == TRUE){
				$this->session->set_flashdata('notif', 'Hapus buku Berhasil');
				redirect('favorit/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus buku gagal');
				redirect('favorit/index');
			}

	}

	public function get_data_favorit_by_id($id)
	{
			$data = $this->favorit_model->get_data_favorit_by_id($id);
			echo json_encode($data);
	}
}