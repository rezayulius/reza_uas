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
                        <input type="hidden" name="id" value="<?= $desainer['id']; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= $desainer['nama']; ?>" id="nama" placeholder="Masukkan Nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Bidang Keahlian</label>
                                <input type="text" class="form-control" id="bidang_keahlian" name="bidang_keahlian" value="<?= $desainer['bidang_keahlian']; ?>" placeholder="Masukkan Bidang Keahlian">
                                <?= form_error('bidang_keahlian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <label for="exampleInputEmail1">Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?= $desainer['email']; ?>" placeholder="Masukkan E-Mail">
                                <?= form_error('bidang_keahlian', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('assets/images/desainer/') . $desainer['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                <br>
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
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
<!-- /.content -->