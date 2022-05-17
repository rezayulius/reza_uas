<!-- Main content -->
<section class="content">
    <?= $this->session->flashdata('message');
    ?>
    <!-- Default box -->
    <div class="col-md-6"><a href="<?= base_url(); ?>Galeri/tambah" class="btn btn-info mb-2">Tambah Portfolio</a></div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 10%">
                            Nama Project
                        </th>
                        <th style="width: 10%">
                            Jenis Desain
                        </th>
                        <th style="width: 15%">
                            Deskripsi
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($galeri as $pj) : ?>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    <img src="<?= base_url('assets/images/galeri/') . $pj['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                </a>
                                <br />
                                <a>
                                    <?= $pj['nama']; ?>
                                </a>
                                <br />
                                <small>
                                    Dibuat <?= date('d-m-Y', strtotime($pj['date_created'])); ?>
                                </small>
                            </td>
                            <td>
                                <?= $pj['jenis_desain']; ?>
                            </td>
                            <td>
                                <?= $pj['deskripsi']; ?>
                            </td>
                            <td class="project-actions text-right">
                                <!-- Trigger Image -->
                                <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-primary<?php echo $pj['id'] ?>"><i class="fas fa-folder"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="modal-primary<?php echo $pj['id'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Project</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Profile Image -->
                                                <div class="card card-primary card-outline">
                                                    <div class="card-body box-profile">
                                                        <div class="text-center">
                                                            <img class="img-fluid img-square" src="<?= base_url('assets/images/galeri/') . $pj['gambar']; ?>">
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                                <!-- Trigger Edit -->
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-warning<?php echo $pj['id']; ?>">
                                    <i class="fas fa-pencil-alt"> </i>
                                </button>
                                <div class="modal fade" id="modal-warning<?php echo $pj['id']; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-warning">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Data</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <p>Anda yakin ingin mengubah data ini&hellip; ?</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                                <a href="<?= base_url('Galeri/edit/') . $pj['id']; ?>" class="btn btn-outline-dark">Simpan Perubahan</a>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <!-- Trigger Hapus -->
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger<?php echo $pj['id']; ?>">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="modal-danger<?php echo $pj['id'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Data</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left    ">
                                                <p>Anda yakin akan menghapus data ini&hellip; ?</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                <a href="<?= base_url('Galeri/hapus/') . $pj['id']; ?>" class="btn btn-outline-light">Simpan Perubahan</a>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->