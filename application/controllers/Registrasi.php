<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index()
	{
	 $this->form_validation->set_rules('nama','Nama','required',[
	 	'required' => 'Nama Wajib diisi!']);
	 $this->form_validation->set_rules('email','Email','required',[
	 	'required' => 'Email Wajib diisi!']);
	 $this->form_validation->set_rules('username','Username','required',[
	 	'required' => 'Username Wajib diisi!']);
	 $this->form_validation->set_rules('password_1','Password','required|matches[password_2]',[
	 	'required' => 'Password Wajib diisi!',
	 	'matches' => 'Password tidak cocok!!']);
	 $this->form_validation->set_rules('password_2','Password','required|matches[password_1]');
	 if ($this->form_validation->run() == FALSE) {
	 		$this->load->view('registrasi');
	 	}else{
	 		$data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'role_id' => 2,


	 		);
	 	    $this->db->insert('tb_user', $data);
	 	    $this->session->set_flashdata('flash', 'Berhasil');
	 	    redirect('auth/login');
	 	}	
	}

}

/* End of file registrasi.php */
/* Location: ./application/controllers/registrasi.php */