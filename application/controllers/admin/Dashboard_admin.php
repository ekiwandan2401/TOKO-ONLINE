<?php 

class Dashboard_admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('role_id') != '1'
	) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
Anda belum login!!</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		$judul['judul'] = 'Selamat Datang di Dashboard Admin';
		$this->load->view('templates-admin/header');
		$this->load->view('templates-admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates-admin/footer');
	}
}

 ?>