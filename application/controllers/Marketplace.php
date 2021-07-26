<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Marketplace extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_admin_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/marketplace";
		$data['detail'] = "Landing/detail";
 		$data['buku'] = $this->Barang_admin_model->get_buku();
 		$data['barang'] = $this->Barang_admin_model->get_barang1();
 		$data['barang2'] = $this->Barang_admin_model->get_barang2();
 		$data['barang3'] = $this->Barang_admin_model->get_barang3();
 		$data['barang4'] = $this->Barang_admin_model->get_barang4();
 		$data['barangg1'] = $this->Barang_admin_model->get_barangg1();
 		$data['barangg2'] = $this->Barang_admin_model->get_barangg2();
 		$data['barangg3'] = $this->Barang_admin_model->get_barangg3();
 		$data['barangg4'] = $this->Barang_admin_model->get_barangg4();
		$this->load->view('Landing/marketplace_template', $data);
	}

	public function detil()
	{
		$this->load->view('Landing/detail');
	}

	public function tambah_keranjang($id)
	{
		$barang = $this->Barang_admin_model->find($id);

		$data = array(
			'id_barang'		=> $barang->id_barang,
			'jumlah'		=> 1,
			'harga'			=> $barang->harga,
			'namabarang'	=> $barang->namabarang
		);

		$this->cart->insert($data);
		redirect('Marketplace');
	}
	
}
