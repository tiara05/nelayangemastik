<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_admin_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$data['main_view'] = 'Admin/barang_view';
			$data['buku'] = $this->Barang_admin_model->get_buku();

			//get_kategori untuk dropdown tambah/edit buku
			$data['kategori'] = $this->Barang_admin_model->get_kategori();
			$data['nelayan'] = $this->Barang_admin_model->get_nelayan();
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
			$this->form_validation->set_rules('Deskripsi', 'Deskripsi', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = 'assets/Admin/fotoikan/';
			$config['allowed_types'] = '*';
			// $config['max_size']  = '1000';
			// $config['max_width']  = '1024';
			// $config['max_height']  = '768';
			if($_FILES['fotoikan']['name']!=""){
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ( ! $this->upload->do_upload('fotoikan')){
					$this->session->set_flashdata('notif', $this->upload->display_errors());
					redirect('Barang_admin/index');
				}
				else{
					if($this->Barang_admin_model->tambah($this->upload->data('file_name'))){
						$this->session->set_flashdata('notif', 'Upload foto Berhasil');	
					} else {
						$this->session->set_flashdata('notif', 'Upload foto Gagal');	
					}
					redirect('Barang_admin/index');		
				}
			} else {
				if($this->Barang_admin_model->tambah('')){
					$this->session->set_flashdata('notif', 'sukses menambah tp gagal upload');	
				} else {
					$this->session->set_flashdata('notif', 'gagal menambah');	
				}
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

			$this->form_validation->set_rules('ubah_nama_barang', 'nama_barang', 'trim|required');
			$this->form_validation->set_rules('ubah_stok', 'harga', 'trim|required|numeric');
			$this->form_validation->set_rules('ubah_harga', 'harga', 'trim|required|numeric');
			$this->form_validation->set_rules('ubah_kategori', 'kategori', 'trim|required');
			$this->form_validation->set_rules('ubah_nelayan', 'nelayan', 'trim|required');
			$this->form_validation->set_rules('ubah_deskripsi', 'Deskripsi', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if($this->Barang_admin_model->ubah() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Ubah kategori berhasil');
					redirect('Barang_admin/index');
				} else {
					$this->session->set_flashdata('notif', 'Ubah kategori gagal');
					redirect('Barang_admin/index');
				}
			} else {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('Barang_admin/index');
			}


		} else {
			redirect('login/index');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in') == TRUE){
			if($this->Barang_admin_model->hapus() == TRUE)
				{
					$this->session->set_flashdata('notif', 'Hapus Barang berhasil');
					redirect('Barang_admin/index');
				} else {
					$this->session->set_flashdata('notif', 'Hapus Barang gagal');
					redirect('Barang_admin/index');
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