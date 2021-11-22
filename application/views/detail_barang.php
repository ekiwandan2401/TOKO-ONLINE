<!-- breadcrum -->

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-2">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Kategori</a></li>
    <li class="breadcrumb-item active" aria-current="page">Produk</li>
    </ol>
    </nav>
</nav>
</div>

<!-- tutup breadcrum -->
<?php foreach ($barang as $brg) : ?>
<!-- single produk -->

<div class="container">
  <div class="row row-produk">
    <div class="col-lg-5">
      <figure class="figure">
  <img
    src="<?php echo base_url().'/uploads/'.$brg->gambar ?>"
    class="figure-img img-fluid rounded shadow-3 mb-3"
    alt="..."
  />
</figure>
    </div>
    <div class="col-lg-7">
      <h4><?php echo $brg->nama_brg ?></h4>
      <div class="garis-nama"></div>
      <table class="table">
        <tr>
          <td>Keterangan</td>
          <td><strong><?php echo $brg->keterangan ?></strong></td>
        </tr>
        <tr>
          <td>Kategori</td>
          <td><strong><?php echo $brg->kategori ?></strong></td>
        </tr>
          <tr>
          <td>Stok</td>
          <td><strong><?php echo $brg->stok ?></strong></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><strong><div class="btn btn-sm btn-success btn-rounded">Rp.<?php echo number_format($brg->harga,0,',','.') ?></div></strong></td>
        </tr>
      </table>
      <div class="btn-produk mt-5">
               <?php echo anchor ('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn text-white btn-dark"><i class="fas fa-cart-plus"></i> Tambahkan ke Keranjang</div>') ?>
                <a href="<?php echo base_url('dashboard/index') ?>" class="btn btn-primary text-white ">Kembali</a>

      </div>
    <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- tutup single produk -->