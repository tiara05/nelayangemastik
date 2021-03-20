<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_admin_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$data['main_view'] = 'Admin/kategori_view';
			$data['kategori'] = $this->kategori_admin_model->get_kategori();
			$this->load->view('Admin/template', $data);

		} else { 
			redirect('login/index');
		}
	}

	public function tambah()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$this->form_validation->set_rules('nama', 'Nama Kategori', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->kategori_admin_model->tambah() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Tambah kategori berhasil');
					redirect('Kategori_admin/index');
				} else {
					$this->session->set_flashdata('notif', 'Tambah kategori gagal');
					redirect('kategori_admin/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('kategori_admin/index');
			}


		} else {
			redirect('login/index');
		}
	}

	public function ubah()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$this->form_validation->set_rules('ubah_nama', 'Nama Kategori', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->kategori_admin_model->ubah() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah kategori berhasil');
					redirect('kategori_admin/index');
				} else {
					$this->session->set_flashdata('notif', 'Ubah kategori gagal');
					redirect('kategori_admin/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('kategori_admin/index');
			}


		} else {
			redirect('login/index');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in') == TRUE){

			if($this->kategori_admin_model->hapus() == TRUE){
				$this->session->set_flashdata('notif', 'Hapus kategori berhasil');
				redirect('kategori_admin/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus kategori gagal');
				redirect('kategori_admin/index');
			}

		} else {
			redirect('login/index');
		}
	}

	public function get_data_kategori_by_id($id)
	{
		if($this->session->userdata('logged_in') == TRUE){

			$data = $this->kategori_admin_model->get_data_kategori_by_id($id);
			echo json_encode($data);

		} else {
			redirect('login/index');
		}
	}

}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */