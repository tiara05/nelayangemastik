<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {

	public function get_account(){
		return $this->db->where('username', $this->session->userdata('username'))
						->get('user')
						->result();
	}
}
?>