<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Project</h3>

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
                            <input type="text" id="inputName" value="<?= set_value('nama_project'); ?>" name="nama_project" class="form-control">
                        </div>
                        <?= form_error('nama_project', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="form-group">
                            <label for="inputDescription">Deskripsi Project</label>
                            <textarea id="inputDescription" name="deskripsi" value="<?= set_value('deskripsi'); ?>" class="form-control" rows="4"></textarea>
                        </div>
                        <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="form-group">
                            <label for="inputStatus">Nomor Pesanan</label>
                            <select id="inputStatus" name="id_pemesanan" value="<?= set_value('id_pemesanan'); ?>" class="form-control custom-select">
                                <option selected disabled>Pilih Nomor Pesanan</option>
                                <?php foreach ($pesanan as $ps) : ?>
                                    <option value="<?= $ps['id']; ?>"><?= $ps['no_pemesanan']; ?> - <?= $ps['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Nama Klien</label>
                            <select id="inputStatus" name="id_user" value="<?= set_value('id_user'); ?>" class="form-control custom-select">
                                <option selected disabled>Pilih Klien</option>
                                <?php foreach ($userdata as $udt) : ?>
                                    <?php if ($udt['role'] == 'User') { ?>
                                        <option value="<?= $udt['id']; ?>"><?= $udt['nama']; ?></option>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Status</label>
                            <select id="inputStatus" name="status" value="<?= set_value('status'); ?>" class="form-control custom-select">
                                <option selected disabled>Pilih Status</option>
                                <option value="Pemeriksaan Data">Pemeriksaan Data</option>
                                <option value="Proses Pengerjaan">Proses Pengerjaan</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Waktu Pengerjaan</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Tanggal Mulai</label>
                        <input type="date" name="tgl_mulai" value="<?= set_value('tgl_mulai'); ?>" id="inputDate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Estimasi Selesai</label>
                        <input type="date" id="inputDate" name="tgl_selesai" value="<?= set_value('tgl_selesai'); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Desainer</label>
                        <select id="inputStatus" name="nama_desainer" value="<?= set_value('nama_desainer'); ?>" class="form-control custom-select">
                            <option selected disabled>Pilih Desainer</option>
                            <?php foreach ($userdata as $udt) : ?>
                                <?php if ($udt['role'] == 'Desainer') { ?>
                                    <option value="<?= $udt['nama']; ?>"><?= $udt['nama']; ?></option>
                                <?php } ?>
                            <?php endforeach; ?>
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
            <a href="#" class="btn btn-secondary">Batal</a>
            <button type="submit" name="simpan" value="Simpan" class="btn btn-success float-right mb-4">Simpan</button>
        </div>
        </form>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->