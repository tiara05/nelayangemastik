<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pembayaran_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = "Landing/pembayaran";
			// $data['account'] = $this->Account_model->get_Account();
	 		// $data['cart_transaksi'] = $this->Checkout_model->get_cart();
 			// $data['cart'] = $this->Checkout_model->get_cart();
			$this->load->view('landing/marketplace_template', $data);
		}else {
			redirect('Marketplace/index');
		}
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_pembeli', 'nama_pembeli', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = '*';
			// $config['max_size']  = '1000';
			// $config['max_width']  = '1024';
			// $config['max_height']  = '768';
			if($_FILES['foto_bukti']['name']!=""){
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ( ! $this->upload->do_upload('foto_bukti')){
					$this->session->set_flashdata('pesan', $this->upload->display_errors());
					redirect('pembayaran/index');
				}
				else{
					if($this->Pembayaran_model->tambah($this->upload->data('file_name'))){
						$this->session->set_flashdata('pesan', 'Upload Bukti Pembayaran Berhasil');	
					} else {
						$this->session->set_flashdata('pesan', 'Upload Bukti Pembayaran Gagal');	
					}
					redirect('Activity/index');		
				}
			} else {
				if($this->Pembayaran_model->tambah('')){
					$this->session->set_flashdata('pesan', 'sukses menambah tp gagal upload');	
				} else {
					$this->session->set_flashdata('pesan', 'gagal menambah');	
				}
				redirect('pembayaran/index');	
			}
			
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect('cart/index');
		}

	}
}