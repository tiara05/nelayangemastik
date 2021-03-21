<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Landingpage extends CI_Controller {

	public function index()
	{
		$this->load->view('Landing/landingpage_view');
	}
}
