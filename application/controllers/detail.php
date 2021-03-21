<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Detail_model');
		$this->load->model('Favorit_model');
		$this->load->model('Barang_admin_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/Detail";
 		
		$this->load->view('landing/marketplace_template', $data);


	}

	public function get_detil_barang_by_id($id)
	{
		$data['main_view'] = "Landing/Detail";
		$detil_barang = $this->Barang_admin_model->get_detil_barang_by_id($id);
		$data['detail_barang'] = $detil_barang;

		$this->load->view('landing/marketplace_template', $data);
	}

	public function tambah_ke_keranjang()
	{
		$barang = $this->Detail_model->find($id);

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
		

			if($this->Detail_model->barang() == TRUE)
			{
				redirect('Cart/index');
			} else {
				$this->session->set_flashdata('notif', 'Data buku tidak ditemukan atau stok sudah habis!');
				redirect('Cart/index');
			}

		
	}

	public function favorit()
	{
			if($this->Favorit_model->favorit() == TRUE)
			{
				redirect('Favorit/index');
			} else {
				$this->session->set_flashdata('notif', 'Data buku tidak ditemukan atau stok sudah habis!');
				redirect('Favorit/index');
			}

		
	}
}