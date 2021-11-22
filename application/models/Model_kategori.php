<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {
	public function data_elektronik(){
		return $this->db->get_where("tb_barang",array('kategori' => 'elektronik'));
	}
	public function data_baju(){
		return $this->db->get_where("tb_barang",array('kategori' => 'baju'));
	}
	public function data_celana(){
		return $this->db->get_where("tb_barang",array('kategori' => 'celana'));
	}
	public function data_fotografi(){
		return $this->db->get_where("tb_barang",array('kategori' => 'fotografi'));
	}
	public function data_hp(){
		return $this->db->get_where("tb_barang",array('kategori' => 'hp'));
	}
	public function data_jam(){
		return $this->db->get_where("tb_barang",array('kategori' => 'jam'));
	}
	public function data_kecantikan(){
		return $this->db->get_where("tb_barang",array('kategori' => 'kecantikan'));
	}
	public function data_kesehatan(){
		return $this->db->get_where("tb_barang",array('kategori' => 'kesehatan'));
	}
	public function data_laptop(){
		return $this->db->get_where("tb_barang",array('kategori' => 'laptop'));
	}
	public function data_otomotif(){
		return $this->db->get_where("tb_barang",array('kategori' => 'otomotif'));
	}
	public function data_sepatu(){
		return $this->db->get_where("tb_barang",array('kategori' => 'sepatu'));
	}
	public function data_tas(){
		return $this->db->get_where("tb_barang",array('kategori' => 'tas'));
	}

	

}

/* End of file model_kategori.php */
/* Location: ./application/models/model_kategori.php */