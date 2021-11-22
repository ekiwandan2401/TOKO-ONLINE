<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function elektronik()
	{
		$data['elektronik'] = $this->model_kategori->data_elektronik()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('elektronik',$data);
		$this->load->view('templates/footer');
	}
	public function baju()
	{
		$data['baju'] = $this->model_kategori->data_baju()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('baju',$data);
		$this->load->view('templates/footer');
	}
	public function celana()
	{
		$data['celana'] = $this->model_kategori->data_celana()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('celana',$data);
		$this->load->view('templates/footer');
	}
	public function fotografi()
	{
		$data['fotografi'] = $this->model_kategori->data_fotografi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('fotografi',$data);
		$this->load->view('templates/footer');
	}
	public function hp()
	{
		$data['hp'] = $this->model_kategori->data_hp()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('hp',$data);
		$this->load->view('templates/footer');
	}
	public function jam()
	{
		$data['jam'] = $this->model_kategori->data_jam()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('jam',$data);
		$this->load->view('templates/footer');
	}
	public function kecantikan()
	{
		$data['kecantikan'] = $this->model_kategori->data_kecantikan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kecantikan',$data);
		$this->load->view('templates/footer');
	}
	public function kesehatan()
	{
		$data['kesehatan'] = $this->model_kategori->data_kesehatan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kesehatan',$data);
		$this->load->view('templates/footer');
	}
	public function laptop()
	{
		$data['laptop'] = $this->model_kategori->data_laptop()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laptop',$data);
		$this->load->view('templates/footer');
	}
	public function otomotif()
	{
		$data['otomotif'] = $this->model_kategori->data_otomotif()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('otomotif',$data);
		$this->load->view('templates/footer');
	}
	public function sepatu()
	{
		$data['sepatu'] = $this->model_kategori->data_sepatu()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sepatu',$data);
		$this->load->view('templates/footer');
	}
	public function tas()
	{
		$data['tas'] = $this->model_kategori->data_tas()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tas',$data);
		$this->load->view('templates/footer');
	}



}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */