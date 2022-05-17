<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Portfolio</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <form action="" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Nama Project</label>
                            <input type="text" id="inputName" value="<?= set_value('nama'); ?>" name="nama" class="form-control">
                        </div>
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="form-group">
                            <label for="inputName">Jenis Desain</label>
                            <input type="text" id="inputName" value="<?= set_value('jenis_desain'); ?>" name="jenis_desain" class="form-control">
                        </div>
                        <?= form_error('jenis_desain', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="form-group">
                            <label for="inputDescription">Deskripsi Project</label>
                            <textarea id="inputDescription" name="deskripsi" value="<?= set_value('deskripsi'); ?>" class="form-control" rows="4"></textarea>
                        </div>
                        <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Lampiran Gambar</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Gambar</label>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-secondary">Batal</a>
            <button type="submit" name="simpan" value="Simpan" class="btn btn-success float-right mb-4">Simpan</button>
        </div>
        </form>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->