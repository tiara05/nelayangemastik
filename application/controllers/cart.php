<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cart_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/Cart";
		// $data['account'] = $this->account_model->get_account();
 		$data['cart_transaksi'] = $this->Cart_model->get_cart();
 		$data['cart'] = $this->Cart_model->get_cart();
		$this->load->view('landing/Marketplace_Template', $data);
	}

	public function cart()
	{
		if($this->session->userdata('logged_in') == TRUE){
			if($this->Cart_model->cart() == TRUE)
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
		
		
			if($this->Cart_model->ubah_jumlah_cart() == TRUE){
				echo json_encode(1);
			} else {
				echo json_encode(0);
			}
		
	}

	public function get_total_belanja()
	{
			$total_belanja['total'] = $this->Cart_model->get_total_belanja();
			echo json_encode($total_belanja);

	}

	public function bayar()
	{
	
			//insert ke tabel transaksi dulu
			if($this->Cart_model->tambah_transaksi() == TRUE)
			{
				$this->session->set_flashdata('notif', 'Proses pembelian berhasil');
				redirect('cart/index');

			} else {
				$this->session->set_flashdata('notif', 'Proses pembelian gagal');
				redirect('cart/index');
			}

	}

	
}