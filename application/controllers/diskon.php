<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class diskon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('promo_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/diskon";
		$data['promo'] = $this->promo_model->get_promo();
 		
		$this->load->view('landing/Marketplace_Template', $data);
	}
}