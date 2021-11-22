<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Keranjang</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Alamat</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
          <li class="breadcrumb-item">
            <a href="#">Selesai</a>
          </li>
        </ol>
      </nav>
      <div class="btn btn-sm btn-success"> <?php 
            $grand_total = 0;
            if ($keranjang = $this->cart->contents()) 
            {
              foreach ($keranjang as $item)
              {
                $grand_total = $grand_total + $item['subtotal'];
              }
              echo "<h3>Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.'); 
            }
            ?> </div>
      <h3>Pembayaran</h3>
      <form>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="col-12 mb-3">
          <div class="card">
            <div class="card-body">
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
                <a href="
          <?php echo base_url('dashboard/proses_pesanan') ?>" class="btn btn-primary btn-block">Bayar</a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>