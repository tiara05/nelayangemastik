<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

	public function tambah($nama_file)
	{
		$data = array(
				'nama_pembeli' 	=> $this->input->post('nama_pembeli'),
				'foto_bukti'	=> $nama_file
			);

		$this->db->insert('pembayaran', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
?>