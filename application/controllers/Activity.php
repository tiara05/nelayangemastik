<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Activity extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Activity_model');
	// }

	public function index()
	{
		$data['main_view'] = "Landing/Activity";
		// $data['account'] = $this->account_model->get_account();
 		// $data['favorit'] = $this->Activity_model->get_activity();
		$this->load->view('landing/Marketplace_Template', $data);
	}

	
}