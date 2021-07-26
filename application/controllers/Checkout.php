<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Checkout_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = "Landing/checkout";
			// $data['account'] = $this->Account_model->get_Account();
	 		$data['cart_transaksi'] = $this->Checkout_model->get_cart();
 			$data['cart'] = $this->Checkout_model->get_cart();
			$this->load->view('landing/marketplace_template', $data);
		}else {
			redirect('Marketplace/index');
		}
	}

	public function cart()
	{
		if($this->session->userdata('logged_in') == TRUE){
			if($this->Checkout_model->cart() == TRUE)
			{
				redirect('cart/index');
			} else {
				$this->session->set_flashdata('notif', 'Data buku tidak ditemukan atau stok sudah habis!');
				redirect('Marketplace/index');
			}	
		}else {
			redirect('Marketplace/index');
		}
	}

	public function ubah_jumlah_cart()
	{
		
		
			if($this->Checkout_model->ubah_jumlah_cart() == TRUE){
				echo json_encode(1);
			} else {
				echo json_encode(0);
			}
		
	}

	public function get_total_belanja()
	{
			$total_belanja['total'] = $this->Checkout_model->get_total_belanja();
			echo json_encode($total_belanja);

	}

	public function bayar()
	{
	
			//insert ke tabel transaksi dulu
			if($this->Checkout_model->tambah_transaksi() == TRUE)
			{
				$this->session->set_flashdata('notif', 'Proses pembelian berhasil');
				redirect('pembayaran/index');

			} else {
				$this->session->set_flashdata('notif', 'Proses pembelian gagal');
				redirect('Cart/index');
			}

	}
}