<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

	public function get_provinsi(){
		return $this->db->get('wilayah_provinsi')
						->result();
	}

	public function tambah()
	{
		$data = array(
				'nama' 			=> $this->input->post('nama'),
				'kendala'		=> $this->input->post('kesulitan'),
				'tinggal'		=> $this->input->post('provinsi'),
				'jenis'			=> $this->input->post('jenis'),
				'harga'			=> $this->input->post('harga'),
				'alasan'		=> $this->input->post('untuk'),
			);

		$this->db->insert('test', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}
}