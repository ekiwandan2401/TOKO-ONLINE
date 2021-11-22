<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Registrasi</title>
  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css"
  rel="stylesheet"
/>
<style type="text/css">
  .gradient-custom {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
</head>
<body>
<section class="vh-200 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body  text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Registrasi</h2>
             <br>
              <form method="post" action="<?php echo base_url('registrasi/index') ?>">
                 <div class="form-outline form-white mb-4">
                      <input type="text" name="nama" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">Nama Anda</label>
                    </div>
                    <?php echo form_error('nama', '<div class="text-danger small">','</div>'); ?>
                   <div class="form-outline form-white mb-4">
                      <input type="email" name="email" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">Email</label>
                    </div>
                    <?php echo form_error('email', '<div class="text-danger small">','</div>'); ?>

    
                   <div class="form-outline form-white mb-4">
                      <input type="text" name="username" id="form3Example1" class="form-control"  />
                      <label class="form-label" for="form3Example1">Username</label>
                    </div>
                    <?php echo form_error('username', '<div class="mt-2 text-danger small">','</div>'); ?>
    
                <div class="row">
                  <div class="col">
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="password_1" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">Password</label>
                    </div>
                    <?php echo form_error('password_1', '<div class="mt-2 text-danger small">','</div>'); ?>
                  </div>
                  <div class="col">
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="password_2" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">Konfirmasi Password</label>
                    </div>
                  </div>
                </div>

              <p class="small  pb-lg-2"><a class="text-white-50" href="<?php echo base_url('auth/login') ?>">Sudah punya Akun?</a></p>

  <button type="submit" class="btn btn-primary btn-block mb-4 btn-rounded">Daftar</button>
            </div>
            </form>

      
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"
></script>
</html>