<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Diskon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Promo_model');
	}

	public function index()
	{
		$data['main_view'] = "Landing/Diskon";
		$data['promo'] = $this->Promo_model->get_promo();
 		
		$this->load->view('Landing/Marketplace_Template', $data);
	}
}