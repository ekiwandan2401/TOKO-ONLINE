<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_user');
	}
    
	public function index()
	{   
		$judul['judul'] = 'Halaman - Daftar User';
	    $data['user'] = $this->Model_user->tampil_data_user();
    	$this->load->view('templates-admin/header',$judul);
		$this->load->view('templates-admin/sidebar');
		$this->load->view('admin/data_user',$data);
		$this->load->view('templates-admin/footer');	
	}
	public function hapus($id)
    {
      $where = array('id'=> $id);
      $this->Model_user->hapus_data($where, 'tb_user');
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect('admin/data_user/index');
    }

}

/* End of file Data_user.php */
/* Location: ./application/controllers/admin/Data_user.php */