<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Shopdetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_admin_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/shopdetail";
		$data['buku'] = $this->Barang_admin_model->get_buku();
		$this->load->view('landing/marketplace_template', $data);


	}
}
