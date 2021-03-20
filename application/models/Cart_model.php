<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

	
	public function get_cart(){
		return $this->db->join('barang','barang.id_barang = cart.id_barang')
						->get('cart')
						->result();
	}

	public function add_to_cart(){ //fungsi Add To Cart
        $data = array(
            'id_barang' 	=> $this->input->post('id_barang'), 
            'namabarang' 	=> $this->input->post('namabarang'), 
            'harga' 		=> $this->input->post('harga'), 
            'jumlah'	 	=> $this->input->post('jumlah'), 
        );
        $this->cart->insert($data);
        echo $this->show_cart(); //tampilkan cart setelah added
    }

    public function get_data_buku_by_id($id)
	{
		return $this->db->where('id_barang', $id)
						->get('barang')
						->row();
	}

	public function hapus_item_cart()
	{
		$this->db->where('id', $this->input->post('hapus_id'))
				 ->delete('cart');

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function ubah_jumlah_cart()
	{
		$data = array(
				'jumlah' => $this->input->post('jumlah')
			);

		//cek stok awal dulu untuk memastikan stok lebih dari jumlah yang dibeli
		$stok_awal = $this->get_data_buku_by_id($this->input->post('id_barang'))->stok;
		if($stok_awal >= $this->input->post('jumlah')){
			$this->db->where('id_cart', $this->input->post('id_cart'))
					 ->update('cart', $data);
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_total_belanja()
	{
		return $this->db->join('barang', 'barang.id_barang = cart.id_barang')
						->select('SUM(barang.harga*cart.jumlah) as total')
						->get('cart')
						->row()->total;
	}

	public function cart()
	{
		$data_cart = $this->db->where('barang.id_barang', $this->input->post('id_barang'))
							  ->join('kategori', 'kategori.id_kategori = barang.id_kategori')
							  ->get('barang')
							  ->row();
		if($data_cart != NULL){

			//cek stok
			if($data_cart->stok > 0){
				$cart_array = array(
								'id_cart'		=> $this->session->userdata('username'),
								'id_barang' 	=> $data_cart->id_barang
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

	public function tambah_transaksi()
	{
		$data_transaksi = array(
				'nama_pembeli'	=> $this->input->post('nama_pembeli')
			);
		$this->db->insert('transaksi', $data_transaksi);
		$last_insert_id = $this->db->insert_id();
		//insert detil transksi
		for($i = 0; $i < count($this->get_cart()); $i++)
		{
			$data_detil_transaksi = array(
				'id_transaksi'	=> $last_insert_id,
				'id_barang'		=> $this->input->post('id_barang')[$i],
				'jumlah'		=> $this->input->post('jumlah')[$i]
			);

			//memasukan ke tabel detil transaksi
			$this->db->insert('detil_transaksi', $data_detil_transaksi);

			//mengurangi stok buku
			$stok_awal = $this->get_data_buku_by_id($this->input->post('id_barang')[$i])->stok;
			$stok_akhir = $stok_awal-$this->input->post('jumlah')[$i];
			$stok = array('stok' => $stok_akhir);
			
			$this->db->where('id_barang', $this->input->post('id_barang')[$i])
					 ->update('barang', $stok);

			

		}


		//mengkosongkan cart berdasarkan kasir yang melakukan transaksi
		
		$this->db->empty_table('cart');

		return TRUE;
	}
	
}
?>