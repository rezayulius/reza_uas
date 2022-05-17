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
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Jenis Paket</label>
                                <input type="text" class="form-control" name="jenis" value="<?= set_value('jenis'); ?>" id="jenis" placeholder="Masukkan jenis paket">
                                <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" id="nama" placeholder="Masukkan Nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Harga</label>
                                <input type="text" class="form-control" name="harga" value="<?= set_value('harga'); ?>" id="harga" placeholder="Masukkan harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Gambar</label>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                        <label for="gambar" class="custom-file-label">Choose File</label>
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
                            <input type="text" class="form-control" name="deskripsi1" value="<?= set_value('deskripsi1'); ?>" id="deskripsi1" placeholder="cth. Alternatif gaya desain . . .">
                            <?= form_error('deskripsi1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Paket</label>
                            <input type="text" class="form-control" name="deskripsi2" value="<?= set_value('deskripsi2'); ?>" id="deskripsi2" placeholder="cth. Batasan revisi . . .">
                            <?= form_error('deskripsi2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Paket</label>
                            <input type="text" class="form-control" name="deskripsi3" value="<?= set_value('deskripsi3'); ?>" id="deskripsi3" placeholder="cth. Komunikasi via sosial media . . .">
                            <?= form_error('deskripsi3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Paket</label>
                            <input type="text" class="form-control" name="deskripsi4" value="<?= set_value('deskripsi4'); ?>" id="deskripsi4" placeholder="cth. Layanan konsumen 12/7 . . .">
                            <?= form_error('deskripsi4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Paket</label>
                            <textarea class="form-control" name="deskripsi5" value="<?= set_value('deskripsi5'); ?>" id="inputExperience" placeholder="Paket ini direkomendasikan untuk . . ."></textarea>

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