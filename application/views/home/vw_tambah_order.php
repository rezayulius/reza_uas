<main id="main" data-aos="fade-center">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?= base_url('Home/') ?>">Home</a></li>
                <li><?= $title; ?></li>
            </ol>
            <h2><?= $judul; ?></h2>

        </div>

    </section><!-- End Breadcrumbs -->

    <!-- Content Wrapper. Contains page content -->
    <div class="bg-white">
        <div class="container">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <a>Data Diri</a>
                            </div>
                            <form action="" method="POST">
                                <input type="hidden" name="no_pemesanan" value="PM<?= time() ?>" readonly class="form-control">
                                <input type="hidden" name="id_user" value="<?= $user['id'] ?>" readonly class="form-control">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Nama Lengkap</label>
                                        <input type="text" id="inputName" class="form-control" name="nama" readonly value="<?= $user['nama'] ?>">
                                    </div>
                                    <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <div class="form-group">
                                        <label for="inputStatus">Paket</label>
                                        <select id="inputStatus" class="form-control custom-select" name="id_paket" value="<?= set_value('id_paket'); ?>">
                                            <option selected disabled>Pilih Paket</option>
                                            <?php foreach ($paket as $pk) : ?>
                                                <option value="<?= $pk['id'] ?>"><?= $pk['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Alamat</label>
                                        <input type="text" id="inputName" value="<?= $user['alamat'] ?>" name="alamat" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Kota</label>
                                        <input type="text" id="inputName" class="form-control" name="kota" value="<?= $user['kota'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Nomor Whatsapp</label>
                                        <input type="text" id="inputName" class="form-control" name="no_hp" value="<?= $user['no_hp'] ?>" readonly>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <a>Detail Pesanan</a>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputStatus">Ruangan yang ingin di desain ?</label>
                                    <select id="inputStatus" class="form-control custom-select" name="pertanyaan1" value="<?= set_value('pertanyaan1'); ?>">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option value="Ruang Keluarga">Ruang Keluarga</option>
                                        <option value="Ruang Tengah">Ruang Tengah</option>
                                        <option value="Dapur">Dapur</option>
                                        <option value="Ruang Makan">Ruang Makan</option>
                                        <option value="Ruang Kerja">Ruang Kerja</option>
                                        <option value="Kamar Tidur">Kamar Tidur</option>
                                        <option value="Ruang Serba Guna">Ruang Serba Guna</option>
                                        <option value="Ruang Tamu">Ruang Tamu</option>
                                        <option value="Ruangan Lainnya">Ruangan Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Kenapa anda memutuskan untuk mendesain rumah anda ?</label>
                                    <select id="inputStatus" class="form-control custom-select" name="pertanyaan2" value="<?= set_value('pertanyaan2'); ?>">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option value="Saya Baru Pindah">Saya Baru Pindah</option>
                                        <option value="Butuh bantuan mendekorasi ulang">Butuh bantuan mendekorasi ulang</option>
                                        <option value="Butuh bantuan dengan layout furnitur">Butuh bantuan dengan layout furnitur</option>
                                        <option value="Alasan Lainnya">Alasan Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Seperti apa kondisi ruangan yang Anda tempati sekarang ?</label>
                                    <select id="inputStatus" class="form-control custom-select" name="pertanyaan3" value="<?= set_value('pertanyaan3'); ?>">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option value="Ruangan Kosong">Ruangan Kosong</option>
                                        <option value="Terdapat beberapa furnitur dan aksesoris">Terdapat beberapa furnitur dan aksesoris</option>
                                        <option value="Sudah di dekorasi">Sudah di dekorasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Gaya desain seperti apa yang menggambarkan diri Anda ?</label>
                                    <select id="inputStatus" class="form-control custom-select" name="pertanyaan4" value="<?= set_value('pertanyaan4'); ?>">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option value="Modern Minimalis">Modern Minimalis</option>
                                        <option value="Pedesaan">Pedesaan</option>
                                        <option value="Trendi">Trendi</option>
                                        <option value="Tradisional">Tradisional</option>
                                        <option value="Klasik & Mewah">Klasik & Mewah</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <button type="submit" name="simpan" value="Simpan" class="btn btn-success float-right mb-4">Kirim</button>
                    </div>
                </div>
                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">



        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->