<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keranjang Belanja</title>
    <!-- NURI icon -->
    <link rel="shortcut icon" href="https://nusamandiri.ac.id/nuri/assets/images/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" type="text/css" href="
                            <?php echo base_url() ?>assets/css/cart.css">
  </head>
  <body>
    <div class="container"> 
     <?php $keranjang = $this->cart->contents(); ?> 
       <div class="card mt-5">
        <div class="row">
          <div class="col-md-8 cart">
            <?php if($this->session->flashdata('sukses')) {
               echo '<div class="alert alert-warning">';
               echo $this->session->flashdata('sukses');
               echo '</div>';

            }?>
            <div class="title titit">
              <div class="row">
                <div class="col">
                  <h4>
                    <b><i class="fas fa-shopping-cart"></i>Keranjang Saya</b>
                  </h4>
                </div>
                <div class="col align-self-center text-right text-muted"> <?php echo ($this->cart->total_items()) ?> items </div>
              </div>
            </div> 
        <?php 
        foreach($keranjang as $keranjang) {
        $id = $keranjang['id'];
        $produknya = $this->model_barang->find($id);
        ?> 
        <div class="row border-top border-bottom">
              <div class="row main align-items-center">
                <div class="col-2">
                  <img class="img-fluid" src="<?php echo base_url('uploads/'.$produknya->gambar) ?>">
                </div>
                <div class="col">
                  <div class="row "> <?php echo $keranjang['name'] ?> </div>
                  <div class="row text-muted"> <?php echo $produknya->keterangan ?> </div>
                </div>
                <div class="col">
                  <a href="#" class="border"> <?php echo $keranjang['qty'] ?> </a>
                </div>
                <div class="col">Rp. <?php echo number_format($keranjang['price'],0,',','.') ?> 
                  <a href="<?php echo base_url('dashboard/hapus_item/'.$keranjang['rowid']) ?>" class="close"><i class="fas fa-trash"></i></a>
                </div>
              </div>
            </div> 

        <?php } ?> 
       <div class="back-to-shop">
              <a href="<?php echo base_url('dashboard/index') ?>"><button class="btn-primary rounded"><i class="fas fa-arrow-alt-circle-left"></i></button></a>
              <span class="text-muted">Kembali</span>
            </div>
          </div>
          <div class="col-md-4 summary">
            <div>
              <h5>
                <b>Ringkasan</b>
              </h5>
            </div>
            <hr>
            <div class="row">
              <div class="col" style="padding-left:0;">ITEM <?php echo ($this->cart->total_items()) ?> </div>
              <div class="col text-right">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?> </div>
            </div>
            <form>
              <p>PENGIRIMAN</p>
              <select>
                <option class="text-muted">TIKI - Gratis</option>
                <option class="text-muted">JNE - Gratis</option>
                <option class="text-muted">GO SEND - Gratis</option>
                <option class="text-muted">GRAB - Gratis</option>
                <option class="text-muted">SI CEPAT - Gratis</option>
              </select>
              <p>KODE VOUCHER</p>
              <input id="code" placeholder="Masukkan Code Voucher">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
              <div class="col">TOTAL BELANJA</div>
              <div class="col text-right">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?> </div>
            </div>
            <div class="row mt-4">
              <div>
                <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
                  <div class="btn btn-sm btn-danger">Hapus Semua</div>
                </a>
                <a href="<?php echo base_url('dashboard/alamat') ?>">
                  <div class="btn btn-sm btn-success">Pembayaran</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>