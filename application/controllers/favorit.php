<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Favorit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Favorit_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/Favorit";
		// $data['account'] = $this->account_model->get_account();
 		$data['favorit'] = $this->Favorit_model->get_favorit();
		$this->load->view('landing/marketplace_template', $data);
	}

	public function hapus()
	{

			if($this->Favorit_model->hapus() == TRUE){
				$this->session->set_flashdata('notif', 'Hapus buku Berhasil');
				redirect('Favorit/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus buku gagal');
				redirect('Favorit/index');
			}

	}

	public function get_data_favorit_by_id($id)
	{
			$data = $this->Favorit_model->get_data_favorit_by_id($id);
			echo json_encode($data);
	}
}