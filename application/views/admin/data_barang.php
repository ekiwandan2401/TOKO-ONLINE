
<div class="container">
      <?php if($this->session->flashdata('flash')) : ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Data Barang Berhasil di <strong><?php echo $this->session->flashdata('flash'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <button class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#largeModal">
    <i class="fas fa-plus fa-sm"></i> Tambah Barang </button>
   <table class="table table-bordered">
    <tr>
      <th>NO</th>
      <th>NAMA BARANG</th>
      <th>KETERANGAN</th>
      <th>KATEGORI</th>
      <th>HARGA</th>
      <th>STOK</th>
      <th class="text-center" colspan="3">AKSI</th>
    </tr> <?php
		$no=1;
		 foreach($barang as $brg) : ?> <tr>
      <td> <?php echo $no++ ?> </td>
      <td> <?php echo $brg->nama_brg ?> </td>
      <td> <?php echo $brg->keterangan ?> </td>
      <td> <?php echo $brg->kategori ?> </td>
      <td>Rp. <?php echo number_format($brg->harga,0,",","."); ?> </td>
      <td> <?php echo $brg->stok ?> </td>
      <td>
        <div class="btn btn-success btn-sm">
          <i class="fas fa-search-plus"></i>
        </div>
      </td>
      <td> <?php echo anchor('admin/data_barang/edit/'.$brg->id_brg,'
				<div class="btn btn-primary btn-sm">
					<i class="fas fa-edit"></i>
				</div>') ?> </td>
      <td> <?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg,'
				<div class="btn btn-danger btn-sm">
					<i class="fas fa-trash"></i>
				</div>') ?> </td>
    </tr> <?php endforeach; ?>
  </table>
</div>
<!-- Large Modal -->
<div class="modal fade" id="largeModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SILAHKAN INPUT PRODUK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="
					<?php echo base_url().'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" required>
          </div>
          <div class="form-group" required> 
            <label>Kategori</label>
            <select class="form-control" name="kategori">
              <option>Elektronik</option>
              <option>Baju</option>
              <option>Celana</option>
              <option>Sepatu</option>
              <option>Jam</option>
              <option>Hp</option>
              <option>Laptop</option>
              <option>Otomotif</option>
              <option>Kesehatan</option>
              <option>Kecantikan</option>
              <option>Tas</option>
              <option>Fotografi</option>
            </select>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!-- End Large Modal-->