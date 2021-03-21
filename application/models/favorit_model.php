<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorit_model extends CI_Model {

	
	public function get_favorit(){
		return $this->db->join('barang','barang.id_barang = favorit.id_barang')
						->get('favorit')
						->result();
	}
	public function hapus()
	{
		$this->db->where('id_barang', $this->input->post('hapus_id_barang'))
				 ->join('barang','barang.id_barang = favorit.id_barang')
				 ->delete('favorit');

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_data_favorit_by_id($id)
	{
		return $this->db->join('barang','barang.id_barang = favorit.id_barang')
						->where('id_barang', $id)
						->get('buku')
						->row();
	}

	public function favorit()
	{
		$data_cart = $this->db->where('barang.id_barang', $this->input->post('id_barang'))
							  ->join('kategori', 'kategori.id_kategori = barang.id_kategori')
							  ->get('barang')
							  ->row();
		if($data_cart != NULL){

			//cek stok
			if($data_cart->stok > 0){
				$cart_array = array(
								'id_favorit'	=> $this->session->userdata('username'),
								'id_barang' => $data_cart->id_barang
							);						
				$this->db->insert('favorit',$cart_array);

				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}

		$this->db->empty_table('favorit');
	}
}
?>