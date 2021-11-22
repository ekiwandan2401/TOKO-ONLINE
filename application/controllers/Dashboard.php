<?php 
 
 class Dashboard extends CI_Controller{
       public function __construct(){
              parent::__construct();
              if ($this->session->userdata('role_id') != '2'
       ) {
                            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">
Anda belum login!!</div>');
                     redirect('auth/login');
              }
       }


       public function tambah_ke_keranjang($id)
       {
        $barang = $this->model_barang->find($id);
        $data = array(
        'id'      => $barang->id_brg,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_brg

);

        $this->cart->insert($data);
        redirect('Welcome');

       }
       public function detail_keranjang()
       {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('keranjang',$data);
       }
       public function hapus_keranjang()
       {
        $this->cart->destroy();
        $this->session->set_flashdata('sukses', 'Data keranjang anda Berhasil dihapus');
        redirect(base_url('dashboard/detail_keranjang'),'refresh');
       }
       public function hapus_item($rowid)
       {
        $this->cart->remove($rowid);
        $this->session->set_flashdata('sukses', 'Item Anda Berhasil dihapus');
        redirect(base_url('dashboard/detail_keranjang'),'refresh');  
       }
       public function update_cart($rowid)
       {
        if ($rowid) {
               $data = array('id' => $rowid,
                             'qty'   => $this->input->post('qty')
                      );
        $this->cart->update($rowid);
        $this->session->set_flashdata('sukses', 'Data Keranjang Berhasil di Update');
        redirect(base_url('dashboard/detail_keranjang'),'refresh');  
        }else{
         redirect(base_url('dashboard/detail_keranjang'),'refresh');       
        }
       }
       public function alamat()
       {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alamat');
        $this->load->view('templates/footer');
       }
       public function ke_pembayaran()
       {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
       }
       public function proses_pesanan()
       {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
        $this->cart->destroy();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('templates/footer');
       }else{
              echo "Maaf, Pesanan Anda Gagal di Proses";
            }
       }
       public function detail($id_brg)
       {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang',$data);
        $this->load->view('templates/footer');
       }
 }

 ?>