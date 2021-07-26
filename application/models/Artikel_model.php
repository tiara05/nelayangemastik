<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function get_artikel(){
		return $this->db->get('artikel')
						->result();
	}

	public function get_data_barang_by_id($id)
	{
		return $this->db->where('id_artikel', $id)
						->get('artikel')
						->row();
	}
}
?>