<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Shopdetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_admin_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/shopdetail";
		$data['buku'] = $this->barang_admin_model->get_buku();
		$this->load->view('landing/Marketplace_Template', $data);


	}
}
