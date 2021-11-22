<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
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
	 $judul['judul'] = 'Halaman - Invoice';
	 $data['invoice'] = $this->model_invoice->tampil_data();
	 $this->load->view('templates-admin/header',$judul);
	 $this->load->view('templates-admin/sidebar');
	 $this->load->view('admin/invoice',$data);
	 $this->load->view('templates-admin/footer');	
	}
     public function detail($id_invoice)
     {
     $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
     $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
     $this->load->view('templates-admin/header');
	 $this->load->view('templates-admin/sidebar');
	 $this->load->view('admin/detail_invoice',$data);
	 $this->load->view('templates-admin/footer');	
     }
}

/* End of file invoice.php */
/* Location: ./application/views/invoice.php */