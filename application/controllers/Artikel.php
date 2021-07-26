<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Artikel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Artikel_model');
	}

	public function index()
	{	
		$data['artikel'] = $this->Artikel_model->get_artikel();
		$this->load->view('Landing/artikel', $data);
	}

	public function artikel1()
	{	
		$this->load->view('Landing/artikel1');
	}

	public function artikel2()
	{	
		$this->load->view('Landing/artikel2');
	}

	public function artikel3()
	{	
		$this->load->view('Landing/artikel3');
	}

	public function artikel4()
	{	
		$this->load->view('Landing/artikel4');
	}

	public function artikel5()
	{	
		$this->load->view('Landing/artikel5');
	}

	public function artikel6()
	{	
		$this->load->view('Landing/artikel6');
	}
}
?>