<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" id="nama" placeholder="Masukkan Nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Bidang Keahlian</label>
                                <input type="text" class="form-control" id="bidang_keahlian" name="bidang_keahlian" value="<?= set_value('bidang_keahlian'); ?>" placeholder="Masukkan Bidang Keahlian">
                                <?= form_error('bidang_keahlian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?= set_value('email'); ?>" placeholder="Masukkan E-Mail">
                                <?= form_error('bidang_keahlian', '<small class="text-danger pl-3">', '</small>'); ?>
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
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('Desainer') ?>" class="btn btn-danger">Tutup</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
</div><!-- /.container-fluid -->
<!-- /.content -->