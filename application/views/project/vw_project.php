<!-- Main content -->
<section class="content">
    <?= $this->session->flashdata('message');
    ?>
    <!-- Default box -->
    <div class="col-md-6"><a href="<?= base_url(); ?>Project/tambah" class="btn btn-info mb-2">Tambah Project</a></div>
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
                        <th style="width: 20%">
                            Nama Project
                        </th>
                        <th style="width: 10%">
                            Desainer
                        </th>
                        <th style="width: 15%">
                            Klien
                        </th>
                        <th>
                            Estimasi Selesai
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($project as $pj) : ?>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    <?= $pj['nama_project']; ?>
                                </a>
                                <br />
                                <small>
                                    Dibuat <?= date('d-m-Y', strtotime($pj['tgl_mulai'])); ?>
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item text-center">
                                        <?php foreach ($userdata as $user) : ?>
                                            <?php if ($pj['nama_desainer'] == $user['nama']) { ?>
                                                <img alt="<?= $user['nama']; ?>" class="table-avatar" src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>">
                                                <br />
                                                <small>
                                                    <?= $user['nama']; ?>
                                                </small>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <?php foreach ($userdata as $user) : ?>
                                    <?php if ($pj['id_user'] == $user['id']) { ?>
                                        <?= $user['nama']; ?>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </td>

                            <td>
                                <?= $pj['tgl_selesai']; ?>
                            </td>
                            <td class="project-state">
                                <?php if ($pj['status'] == 'Pemeriksaan') { ?>
                                    <a href="<?php echo base_url(); ?>project/update_status/<?php echo $pj['id']; ?>/<?php echo $pj['status']; ?>" class="badge badge-secondary">Pemeriksaan</a>
                                <?php } else if ($pj['status'] == 'Pengerjaan') { ?>
                                    <a href="<?php echo base_url(); ?>project/update_status/<?php echo $pj['id']; ?>/<?php echo $pj['status']; ?>" class="badge badge-info">Proses</a>
                                <?php } else { ?>
                                    <a href="<?php echo base_url(); ?>project/update_status/<?php echo $pj['id']; ?>/<?php echo $pj['status']; ?>" class="badge badge-success">Selesai</a>
                                <?php } ?>
                            </td>
                            <td class="project-actions text-right">
                                <!-- Trigger Image -->
                                <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-primary<?php echo $pj['id'] ?>"><i class="fas fa-folder"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="modal-primary<?php echo $pj['id'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Preview Hasil Desain</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Profile Image -->
                                                <div class="card card-primary card-outline">
                                                    <div class="card-body box-profile">
                                                        <div class="text-center">
                                                            <img class="img-fluid img-square" src="<?= base_url('assets/images/project/') . $pj['gambar']; ?>">
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
                                                <a href="<?= base_url('Project/edit/') . $pj['id']; ?>" class="btn btn-outline-dark">Simpan Perubahan</a>
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
                                                <a href="<?= base_url('Project/hapus/') . $pj['id']; ?>" class="btn btn-outline-light">Simpan Perubahan</a>
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