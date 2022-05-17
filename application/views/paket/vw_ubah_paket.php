<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Data Paket</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $paket['id']; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Jenis Paket</label>
                                <input type="text" class="form-control" name="jenis" value="<?= $paket['jenis']; ?>" id="jenis" placeholder="Masukkan jenis paket">
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= $paket['nama']; ?>" id="nama" placeholder="Masukkan Nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Harga</label>
                                <input type="text" class="form-control" name="harga" value="<?= $paket['harga']; ?>" id="harga" placeholder="Masukkan harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">File Input</label>
                                <div class="custom-file">
                                    <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile"><?= $paket['gambar']; ?></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="img-fluid img-square" src="<?= base_url('assets/images/paket/') . $paket['gambar']; ?>">
                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />
                        </div>
                        <!-- /.card-body -->


                        <div class="card-footer">
                            <button type="submit" name="tambah" class="btn btn-primary">Simpan Data</button>
                            <a href="<?= base_url('Paket') ?>" class="btn btn-danger">Tutup</a>
                        </div>

                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
            <div class="col-md-6">
                <!-- Form Element sizes -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Deskripsi Paket</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Paket</label>
                            <input type="text" class="form-control" name="deskripsi1" value="<?= $paket['deskripsi1']; ?>" id="deskripsi1" placeholder="cth. Alternatif gaya desain . . .">
                            <?= form_error('deskripsi1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Paket</label>
                            <input type="text" class="form-control" name="deskripsi2" value="<?= $paket['deskripsi2']; ?>" id="deskripsi2" placeholder="cth. Batasan revisi . . .">
                            <?= form_error('deskripsi2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Paket</label>
                            <input type="text" class="form-control" name="deskripsi3" value="<?= $paket['deskripsi3']; ?>" id="deskripsi3" placeholder="cth. Komunikasi via sosial media . . .">
                            <?= form_error('deskripsi3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Paket</label>
                            <input type="text" class="form-control" name="deskripsi4" value="<?= $paket['deskripsi4']; ?>" id="deskripsi4" placeholder="cth. Layanan konsumen 12/7 . . .">
                            <?= form_error('deskripsi4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Paket</label>
                            <textarea class="form-control" name="deskripsi5" value="<?= $paket['deskripsi5']; ?>" id="inputExperience" placeholder="Paket ini direkomendasikan untuk . . ."><?= $paket['deskripsi5']; ?></textarea>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>
</div><!-- /.container-fluid -->
<!-- /.content -->