<body>
    <!-- navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand " href="<?php echo base_url('dashboard') ?>"><i class="m-2 fas fa-store"></i>Toko <strong>NURI</strong></a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <!-- search -->
      <form class="d-flex input-group ms-auto my-4 my-lg-0 w-auto">
      <input
        type="search"
        class="form-control rounded"
        placeholder="Cari.."
        aria-label="Search"
        aria-describedby="search-addon"
      />
      <span class="btn-primary input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
    </form>
    <!-- tutup search -->
      <div class="navbar-nav ms-auto">
        <!-- Icons -->
<li class="nav-item dropdown">
        <a
          class="nav-link active dropdown-toggle"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
         Kategori
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/elektronik') ?>"><i class="fas fa-tv"></i> Elektronik</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/baju') ?>"><i class="fas fa-tshirt"></i> Baju</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/celana') ?>"><i class="fas fa-tshirt"></i> Celana</a>
          </li>
                    <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/sepatu') ?>"><i class="fas fa-shoe-prints"></i> Sepatu</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/hp') ?>"><i class="fas fa-mobile-alt"></i> Handphone</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/laptop') ?>"><i class="fas fa-laptop"></i> Laptop</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/jam') ?>"><i class="bi bi-watch"></i> Jam Tangan</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/kesehatan') ?>"><i class="fas fa-medkit"></i> Kesehatan</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/kecantikan') ?>"><i class="fas fa-paint-brush"></i> Kecantikan</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/fotografi') ?>"><i class="fas fa-camera-retro"></i> Fotografi</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/tas') ?>"><i class="fas fa-shopping-bag"></i> Tas</a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('kategori/otomotif') ?>"><i class="fas fa-motorcycle"></i> Otomotif</a>
          </li>
        </ul>
      </li>

      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link active" href="<?php echo base_url('dashboard/detail_keranjang') ?>">
          <i class="fas fa-shopping-cart"></i>
            <span class="badge rounded-pill badge-notification bg-primary"><?php $keranjang = $this->cart->total_items() ?> <?php echo $keranjang ?></span>
           Cart
        </a>
      </li>
        
                 <?php if ($this->session->userdata('email')) { ?>
                  <a
        class="dropdown-toggle d-flex text-white align-items-center hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <img
          src="https://mdbootstrap.com/img/new/avatars/2.jpg"
          class="rounded-circle"
          height="25"
          alt=""
          loading="lazy"
        />
         <?php echo $this->session->userdata('email') ?>
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <li>
          <a class="dropdown-item" href="#"><i class="fas fa-user"></i> My profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a>
        </li>
        <li>
          <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>     
          <?php } else{ ?>
        <a class="nav-link" href="<?php echo base_url('auth/login') ?>">Login</a>
        <?php }  ?>
      </div>
    </div>
  </div>
</nav>
    <!-- tutup navbar-->