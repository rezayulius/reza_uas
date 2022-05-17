<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yus Perabot | <?= $judul; ?></title>

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/toastr/toastr.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          <!-- </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url('assets/') ?>index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('assets/') ?>index3.html" class="brand-link">
        <span class="fas fa-book text-default ml-3 mr-2"></span>
        <span class="brand-text font-weight-regular">Yus Perabot</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?= site_url('Profil/') ?>" class="d-block"><?= $user['nama']; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <?php if ($user['role'] == 'Desainer') { ?>
              <li class="nav-header">MANAJEMEN PROJECT</li>
              <li class="nav-item">
                <a href="<?= site_url('Project/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Data Project
                  </p>
                </a>
              </li>
              <hr class="my-2 text-blue">
              <li class="nav-item">
                <a href="<?= site_url('Auth/logout') ?>" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                    Logout
                  </p>
                </a>
              </li>
            <?php } else { ?>
              <li class="nav-header">MANAJEMEN PESANAN</li>
              <li class="nav-item">
                <a href="<?= site_url('Pesanan/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Data Pesanan
                  </p>
                </a>
              </li>
              <li class="nav-header">MANAJEMEN AKUN</li>
              <li class="nav-item">
                <a href="<?= site_url('Desainer/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Data Desainer
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= site_url('User/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Data User
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Paket/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Data Paket
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Project/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Data Project
                  </p>
                </a>
              </li>
              <li class="nav-header">MANAJEMEN GALERI</li>
              <li class="nav-item">
                <a href="<?= site_url('Galeri/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Data Portfolio
                  </p>
                </a>
              </li>
              <hr class="my-2 text-blue">
              <li class="nav-item">
                <a href="<?= site_url('Auth/logout') ?>" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                    Logout
                  </p>
                </a>
              </li>
            <?php } ?>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $judul; ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('Pesanan') ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $judul; ?></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>