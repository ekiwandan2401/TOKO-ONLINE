<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Login</title>
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
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/mdb.min.css" />
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
    <?php if($this->session->flashdata('flash')) : ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Registrasi Akun <strong><?php echo $this->session->flashdata('flash'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
              <?php echo $this->session->flashdata('pesan'); ?>
              <form method="post" action="<?php echo base_url('auth/login') ?>">
              <div class="form-outline form-white mb-4">
                <input type="text" name="username" id="typeEmailX" required="Masukkan Password!" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Username</label>
              </div>
              
              
              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX"  class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
                              <?php echo form_error('password', '<div class="mb-3 text-danger small">','</div'); ?>

              <p class="small  pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>


                          <div>
              <p class="mt-4">Belum Punya Akun? <a href="<?php echo base_url('registrasi/index'); ?>" class="text-white-50 fw-bold">Daftar</a></p>
            </div>
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