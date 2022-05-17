<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card-header">
                        <div class="col-md-6"><a href="<?= base_url(); ?>Paket/tambah" class="btn btn-info mb-2">Tambah Paket</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Jenis</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($paket as $us) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td>
                                            <div class="col-md-8">
                                                <div class="thumbnail">
                                                    <img src="<?= base_url('assets/images/paket/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                                </div>
                                            </div>
                                        </td>

                                        <td><?= $us['jenis']; ?></td>
                                        <td><?= $us['nama']; ?></td>
                                        <td><?= "Rp " . number_format($us['harga'], 2, ',', '.'); ?></td>
                                        <td><?= $us['deskripsi1']; ?> | <?= $us['deskripsi2']; ?> |
                                            <br /><?= $us['deskripsi3']; ?> | <?= $us['deskripsi4']; ?> |
                                            <br /><?= $us['deskripsi5']; ?>
                                        </td>
                                        <td>
                                            <!-- Trigger Hapus -->
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger<?php echo $us['id'];?>">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-danger<?php echo $us['id'] ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-danger">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Anda yakin akan menghapus data ini&hellip; ?</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                            <a href="<?= base_url('Paket/hapus/') . $us['id']; ?>" class="btn btn-outline-light">Simpan Perubahan</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                            <!-- Trigger Edit -->
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-warning<?php echo $us['id'];?>">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-warning<?php echo $us['id'];?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-warning">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Anda yakin ingin mengubah data ini&hellip; ?</p>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                                            <a href="<?= base_url('Paket/edit/') . $us['id']; ?>" class="btn btn-outline-dark">Simpan Perubahan</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                        </td>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Jenis</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->