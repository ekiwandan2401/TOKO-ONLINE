<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url().'admin/data_barang/' ?>" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block"><i class="fas fa-users-cog"></i>ADMIN</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div>
    <!-- End Search Bar -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <!-- End Search Icon-->
      </ul>
    </nav>
    <!-- End Icons Navigation -->
  </header>
  <!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="
              <?php echo base_url().'admin/data_barang/' ?>">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-heading">Menu</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="
              <?php echo base_url().'admin/data_barang/' ?>">
          <i class="fas fa-database"></i>
          <span>Data Barang</span>
        </a>
      </li>
            <li class="nav-item">
        <a class="nav-link collapsed" href="
              <?php echo base_url().'admin/data_user/' ?>">
          <i class="fas fa-users"></i>
          <span>Data User</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="
              <?php echo base_url().'admin/invoice/' ?>">
          <i class="fas fa-file-invoice-dollar"></i>
          <span>Invoice</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="
              <?php echo base_url('auth/login') ?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>Sign Out</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->
    </ul>
  </aside>
  <main id="main" class="main">