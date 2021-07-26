<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/Marketplace";
		$this->load->view('Landing/Marketplace_Template', $data);
	}

	public function cek_login(){

			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->Login_model->cek_user() == TRUE){
					$data['main_view'] = "Landing/Marketplace";
					$this->load->view('Landing/Marketplace_Template', $data);
				} else {
					$this->session->set_flashdata('notif', 'Login gagal');
					$data['main_view'] = "Landing/Marketplace";
					$this->load->view('Landing/Marketplace_Template', $data);
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
					redirect('Login/index');
			}

	}

	public function tambah()
	{

			$this->form_validation->set_rules('nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->Login_model->tambah() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Tambah kategori berhasil');
					redirect('Login/index');
				} else {
					$this->session->set_flashdata('notif', 'Tambah kategori gagal');
					redirect('Login/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Login/index');
			}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login/index');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */