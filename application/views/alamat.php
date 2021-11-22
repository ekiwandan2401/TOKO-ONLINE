<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Keranjang</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Alamat</li>
          <li class="breadcrumb-item active">
            <a href="#">Pembayaran</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="#">Selesai</a>
          </li>
        </ol>
      </nav>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
      <h3>Alamat Pengiriman</h3>
      <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
        <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="form-outline mb-4">
              <input type="text" name="nama" class="form-control" required />
              <label class="form-label" for="kmkm">Nama Lengkap</label>
            </div>
        <div class="form-outline mb-4">
          <input type="text" name="alamat" class="form-control" required/>
          <label class="form-label" for="aldwadawamat">Alamat</label>
        </div>
        <!-- Text input -->
        <div class="row">
          <div class="col-6">
            <div class="form-outline mb-4">
              <input type="text" name="kabupaten" class="form-control" required/>
              <label class="form-label" for="kabupaten">Kabupaten / Kota</label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-outline mb-4">
              <input type="number" name="kodepos" class="form-control" required/>
              <label class="form-label" for="kodepos">Kode Pos</label>
            </div>
          </div>
        </div>
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" name="email" class="form-control" required/>
          <label class="form-label" for="email">Email</label>
        </div>
        <!-- Number input -->
        <div class="form-outline mb-4">
          <input type="number" name="nohp" class="form-control" required/>
          <label class="form-label" for="nohp">NO HP</label>
        </div>
        <!-- Submit button -->

        <h5>Pilih metode pembayaran</h5>
              <span class="strip-primary"></span>
              <div class="mt-4">
                <div class="methods">
                  <input class="mtdbtn" type="radio" id="method0" name="method" value="Bank BCA">
                  <label class="mtdlabel" for="method0">
                    <img src="https://xcashshop.com/assets/images/1623472818.png" class="img-fluid">
                    <p class="float-right">
                      <span class="badge badge-success" id="Bank_BCA"></span>
                    </p>
                  </label>
                  <br>
                  <input class="mtdbtn" type="radio" id="method1" name="method" value="QRIS">
                  <label class="mtdlabel" for="method1">
                    <img src="https://topupindo.id/assets/images/qris.png" class="img-fluid">
                    <p class="float-right">
                      <span class="badge badge-success" id="QRIS"></span>
                    </p>
                  </label>
                  <br>
                  <input class="mtdbtn" type="radio" id="method2" name="method" value="VA Mandiri">
                  <label class="mtdlabel" for="method2">
                    <img src="https://xcashshop.com/assets/images/1623472949.png" class="img-fluid">
                    <p class="float-right">
                      <span class="badge badge-success" id="VA_Mandiri"></span>
                    </p>
                  </label>
                  <br>
                  <input class="mtdbtn" type="radio" id="method3" name="method" value="VA BNI">
                  <label class="mtdlabel" for="method3">
                    <img src="https://xcashshop.com/assets/images/1623472929.png" class="img-fluid">
                    <p class="float-right">
                      <span class="badge badge-success" id="VA_BNI"></span>
                    </p>
                  </label>
                  <br>
                  <input class="mtdbtn" type="radio" id="method4" name="method" value="Alfamart">
                  <label class="mtdlabel" for="method4">
                    <img src="https://xcashshop.com/assets/images/1623472980.png" class="img-fluid">
                    <p class="float-right">
                      <span class="badge badge-success" id="Alfamart"></span>
                    </p>
                  </label>  
                </div>
        <button type="submit" class="btn btn-primary btn-block">Proses Pembayaran</button>
        <a href="
          <?php echo base_url('dashboard/detail_keranjang') ?>" class="btn btn-danger btn-block">Kembali </a>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>