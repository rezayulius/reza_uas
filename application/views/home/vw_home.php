<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Desain rumah impian anda dengan sangat mudah!</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Desain interor dan pembuatan furniture dengan kualitas bagus dan harga terjangkau.</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Memulai</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?= base_url('FlexStart/') ?>assets/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Siapa Kami ?</h3>
                        <h2>Jasa desain interior online murah.</h2>
                        <p>
                            Yus Perabot adalah perusahaan yang menyediakan jasa desain bangunan,rumah tinggal & komersil seperti, Ruko, Kosan, Cafe, desain and build furniture, gudang, pabrik, GOR dan Banyak Lainnya. Kami juga Melayani jasa desain bangunan dengan gaya arsitektur Tropis, Minimalis, Modern, Kontemporer dengan dikerjakan oleh orang-orang yang profesional di bidangnya dengan kualitas produk yang baik dan cepat.

                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#services" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Jasa Kami</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url('FlexStart/') ?>assets/img/about.jpg" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Layanan Kami</h2>
                <p>Layanan yang sudah kami sediakan</p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= base_url('FlexStart/') ?>assets/img/values-1.png" class="img-fluid" alt="">
                        <h3>Desain Interior</h3>
                        <p>Interior yang nyaman akan membuat suasana rumah keluarga anda bahagia.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?= base_url('FlexStart/') ?>assets/img/values-2.png" class="img-fluid" alt="">
                        <h3>Gambar Detail</h3>
                        <p>Perencanaan yang matang sangat diperlukan untuk sebuah bangunan apapun.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?= base_url('FlexStart/') ?>assets/img/values-3.png" class="img-fluid" alt="">
                        <h3>Desain 3 Dimensi</h3>
                        <p>Wujud 3D dari sebuah desain memperlihatkan gambaran nyata dari rumah anda sebelum diimplementasikan.</p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $klien; ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Klien</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $project; ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Project</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $pesanan; ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Pesanan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $desainer; ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Desainer</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Jasa</h2>
                <p>Kenapa memilih jasa kami ?</p>
            </header>

            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Daring</h3>
                        <p>Kemudahan proses desain secara daring dan sesuai jadwal yang Anda tentukan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Desain Terbaik & Professional</h3>
                        <p>Desainer terbaik & profesional, mengkreasi ruang sesuai dengan keinginan Anda</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Garansi</h3>
                        <p>A design you love, atau uang kembali</p>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Paket</h2>
                <p>Paket yang Kami Sediakan</p>
            </header>
            <!-- yg ini bg -->
            <div class="row gy-4 justify-content-center" data-aos="fade-left">
                <?php foreach ($paket as $us) : ?>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <h3 style="color: #07d5c0;"><?= $us['nama']; ?></h3>
                            <h6 style="color: #a2a2a2;"><?= $us['jenis']; ?></h6>
                            <div class="price"><sup>Rp.</sup><?= substr(number_format($us['harga'], 2, ',', '.'), 0, 5); ?></div>
                            <img src="<?= base_url('assets/images/paket/') . $us['gambar'] ?>" class="img-fluid" alt="">
                            <ul>
                                <li><?= $us['deskripsi1']; ?></li>
                                <li><?= $us['deskripsi2']; ?></li>
                                <li><?= $us['deskripsi3']; ?></li>
                                <li><?= $us['deskripsi4']; ?></li>
                                <li><?= $us['deskripsi5']; ?></li>
                            </ul>
                            <a href="<?= base_url('Home/tambah/') ?>" class="btn-buy">Pesan Sekarang</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </section><!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Portfolio</h2>
                <p>Hasil dari project kami</p>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Semua Project</li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php foreach ($galeri as $gr) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('assets/images/galeri/') . $gr['gambar'] ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?=$gr['nama'];?></h4>
                                <p><?=$gr['jenis_desain'];?></p>
                                <div class="portfolio-links">
                                    <a href="<?= base_url('assets/images/galeri/') . $gr['gambar'] ?>" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Desainer</h2>
                <p>Desainer yang bertalenta</p>
            </header>

            <?php foreach ($user as $us) : ?>
                <?php if ($us['role'] == 'Desainer') { ?>
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="<?= base_url('assets/images/profile/') . $us['gambar'] ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href="http://twitter.com"><i class="bi bi-twitter"></i></a>
                                        <a href="http://facebook.com"><i class="bi bi-facebook"></i></a>
                                        <a href="http://instagram.com"><i class="bi bi-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4><?= $us['nama']; ?></h4>
                                    <span><?= $us['email']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Kontak</h2>
                <p>Kontak Kami</p>
            </header>

            <div class="row gy-4 justify-content-center">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>Jalan Tanjung Harpaan,<br>Tembilahan, Riau 29212</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Telp</h3>
                                <p>+62 821 8575 2004<br>+62 821 8575 2003</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>yusperabot@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Jam Kerja</h3>
                                <p>Senin - Jumat<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->