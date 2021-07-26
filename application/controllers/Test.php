<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Test extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Test_model');
	}

	public function index()
	{	
		$data['provinsi'] = $this->Test_model->get_provinsi();
		$this->load->view('Landing/test', $data);
	}

	public function tambah()
	{
			$this->form_validation->set_rules('nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('kesulitan', 'kesulitan', 'trim|required');
			$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
			$this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
			$this->form_validation->set_rules('harga', 'harga', 'trim|required');
			$this->form_validation->set_rules('untuk', 'untuk', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->Test_model->tambah() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Tambah Test berhasil');
					redirect('LandingPage/index');
				} else {
					$this->session->set_flashdata('notif', 'Tambah Test gagal');
					redirect('LandingPage/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Test/index');
			}
		
	}
}
?>