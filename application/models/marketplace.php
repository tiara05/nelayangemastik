<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardpelanggan_model extends CI_Model {
	
	public function get_data_barang_by_id($id)
	{
		return $this->db->where('id_barang', $id)
						->get('barang')
						->row();
	}

	
}
?>