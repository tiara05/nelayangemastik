<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('detail_model');
		$this->load->model('favorit_model');
		$this->load->model('barang_admin_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/detail";
 		
		$this->load->view('landing/Marketplace_Template', $data);


	}

	public function get_detil_barang_by_id($id)
	{
		$data['main_view'] = "Landing/detail";
		$detil_barang = $this->barang_admin_model->get_detil_barang_by_id($id);
		$data['detail_barang'] = $detil_barang;

		$this->load->view('landing/Marketplace_Template', $data);
	}

	public function tambah_ke_keranjang()
	{
		$barang = $this->detail_model->find($id);

		$data = array(
			'id_barang' => $barang->id_barang,
			'jumlah'	=> 1,
			'harga'		=> $barang->harga,
			'namabarang'=> $barang->namabarang
		);

		$this->cart->insert($data);
		redirect('cart/index');
	}

	public function barang()
	{
		

			if($this->detail_model->barang() == TRUE)
			{
				redirect('cart/index');
			} else {
				$this->session->set_flashdata('notif', 'Data buku tidak ditemukan atau stok sudah habis!');
				redirect('cart/index');
			}

		
	}

	public function favorit()
	{
			if($this->favorit_model->favorit() == TRUE)
			{
				redirect('favorit/index');
			} else {
				$this->session->set_flashdata('notif', 'Data buku tidak ditemukan atau stok sudah habis!');
				redirect('favorit/index');
			}

		
	}
}