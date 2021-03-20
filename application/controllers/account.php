<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('account_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = "Landing/account";
			$data['account'] = $this->account_model->get_account();
	 		
			$this->load->view('landing/Marketplace_Template', $data);
		}else {
			redirect('Marketplace/index');
		}
	}

	
}