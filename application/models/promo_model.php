<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class promo_model extends CI_Model {

	public function get_promo(){
		return $this->db->get('promo')
						->result();
	}
}
?>