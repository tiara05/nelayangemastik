<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_admin_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$data['main_view'] = 'Admin/barang_view';
			$data['buku'] = $this->Barang_admin_model->get_buku();

			//get_kategori untuk dropdown tambah/edit buku
			$data['kategori'] = $this->barang_admin_model->get_kategori();
			$data['nelayan'] = $this->barang_admin_model->get_nelayan();
			$this->load->view('Admin/template', $data);

		} else {
			redirect('login_admin/index');
		}
	}

	public function tambah()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$this->form_validation->set_rules('nama_barang', 'Nama barang', 'trim|required');
			$this->form_validation->set_rules('stok', 'harga', 'trim|required|numeric');
			$this->form_validation->set_rules('harga', 'harga', 'trim|required|numeric');
			$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
			$this->form_validation->set_rules('nelayan', 'nelayan', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				//upload file
				$config['upload_path'] = './assets/Admin/fotoikan/';
				$config['allowed_types'] = 'gif|jpeg|png';
				$config['max_size'] = '2000';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('fotoikan')){
					if($this->Barang_admin_model->tambah($this->upload->data()) == TRUE)
					{
						$this->session->set_flashdata('notif', 'Tambah buku berhasil');
						redirect('Barang_admin/index');
					} else {
						$this->session->set_flashdata('notif', 'Tambah buku gagal');
						redirect('Barang_admin/index');
					}
				} else {
					$this->session->set_flashdata('notif', 'Tambah buku gagal upload');
					redirect('Barang_admin/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Barang_admin/index');
			}
		} else {
			redirect('login_admin/index');
		}
	}

	public function ubah()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$this->form_validation->set_rules('ubah_judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('ubah_tahun', 'tahun', 'trim|required|numeric');
			$this->form_validation->set_rules('ubah_penulis', 'penulis', 'trim|required');
			$this->form_validation->set_rules('ubah_penerbit', 'penerbit', 'trim|required');
			$this->form_validation->set_rules('ubah_stok', 'harga', 'trim|required|numeric');
			$this->form_validation->set_rules('ubah_harga', 'harga', 'trim|required|numeric');
			$this->form_validation->set_rules('ubah_kategori', 'kategori', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->Barang_admin_model->ubah() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah buku berhasil');
					redirect('buku/index');
				} else {
					$this->session->set_flashdata('notif', 'Ubah buku gagal');
					redirect('buku/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('buku/index');
			}


		} else {
			redirect('login/index');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in') == TRUE){

			if($this->Barang_admin_model->hapus() == TRUE){
				$this->session->set_flashdata('notif', 'Hapus buku Berhasil');
				redirect('buku/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus buku gagal');
				redirect('buku/index');
			}

		} else {
			redirect('login/index');
		}
	}

	public function get_data_buku_by_id($id)
	{
		if($this->session->userdata('logged_in') == TRUE){

			$data = $this->Barang_admin_model->get_data_buku_by_id($id);
			echo json_encode($data);

		} else {
			redirect('login/index');
		}
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */