<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Yus Perabot</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('FlexStart/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('FlexStart/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('FlexStart/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('FlexStart/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url('FlexStart/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/toastr/toastr.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('FlexStart/') ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?= base_url('FlexStart/') ?>assets/img/logo.png" alt="">
                <span>YusPerabot</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url('Home/') ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Home/#about') ?>">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Home/#services') ?>">Jasa</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Home/#portfolio') ?>">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Home/#team') ?>">Desainer</a></li>
                    <li><a href="<?= base_url('Home/tambah/') ?>">Order</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('Home/#contact') ?>">Kontak</a></li>
                    <?php if (isset($_SESSION['email'])) { ?>
                        <li><a class="nav-link scrollto" href="<?= base_url('Home/profil') ?>">Hi ! <?= $userdata['nama']; ?></a></li>
                        <li>
                            <a href="<?= base_url('Auth/logout') ?>">
                                <span class="fas fa-sign-out-alt"></span>
                            </a>
                        </li>

                    <?php } else { ?>
                        <li><a class="nav-link scrollto" href="#">Hi ! Guest</a></li>
                    <?php } ?>
                    <li><a class="getstarted scrollto" href="<?= base_url('Home/#about') ?>">Memulai</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->