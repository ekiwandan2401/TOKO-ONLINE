<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
          public function __construct(){
          parent::__construct();
          if ($this->session->userdata('role_id') != '1'
        ) {
              $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
      Anda belum login!!</div>');
            redirect('auth/login');
          }
        }
      public function tampil_data_user()
      {
      	return $this->db->get('tb_user')->result_array();
      }
      public function hapus_data($where,$table)
      {
         $this->db->where($where);
         $this->db->delete($table);
      }
}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */