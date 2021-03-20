<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_model extends CI_Model {

	public function get_detail(){
		return $this->db->join('kategori','kategori.id_kategori = barang.id_kategori')
						->join('pencariikan','pencariikan.id_nelayan = barang.id_nelayan')
						->get('barang')
						->result();
	}

	public function get_data_barang_by_id($id)
	{
		return $this->db->where('id_barang', $id)
						->get('barang')
						->row();
	}

	public function find($id)
	{
		$result = $this->db->where('id_barang', $id)
						   ->limit(1)
						   ->get('barang');

		if ($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function barang()
	{
		$data_cart = $this->db->where('barang.id_barang', $this->input->post('id_barang'))
							  ->join('kategori', 'kategori.id_kategori = barang.id_kategori')
							  ->get('barang')
							  ->row();
		if($data_cart != NULL){

			//cek stok
			if($data_cart->stok > 0){
				$cart_array = array(
								'id_cart'	=> $this->session->userdata('username'),
								'jumlah'	=> 1,
								'id_barang' => $data_cart->id_barang
							);						
				$this->db->insert('cart',$cart_array);

				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

	
}
?>