<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Artikel extends CI_Controller {

	public function index()
	{	
		$this->load->view('Landing/artikel');
	}

	
}
?>