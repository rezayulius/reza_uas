<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <?= $this->session->flashdata('message');
                    ?>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($userdata as $us) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td>
                                            <div class="col-md-8">
                                                <div class="thumbnail">
                                                    <img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $us['nama']; ?></td>
                                        <td><?= $us['email']; ?></td>
                                        <td>
                                            <form action="<?= base_url('User/update_role/') . $us['id']; ?>" method="post">
                                                <input name="id" type="hidden" value="<?= $us['id']; ?>" />
                                                <select class="form-control" size="1" name="role" onchange="this.form.submit()">
                                                    <?php if ($_SESSION['email'] == $us['email']) { ?>
                                                        <option disabled selected value="<?= $us['role']; ?>"><?= $us['role']; ?></option>
                                                    <?php } else { ?>
                                                        <option disabled selected value="<?= $us['role']; ?>"><?= $us['role']; ?></option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Desainer">Desainer</option>
                                                        <option value="User">User</option>
                                                    <?php } ?>
                                                </select>
                                            </form>
                                        </td>
                                        <td>


                                            <?php if ($us['status'] == 'Active') { ?>
                                                <?php if ($_SESSION['email'] == $us['email']) { ?>
                                                    <a href="<?php echo base_url(); ?>user/update_status/<?php echo $us['id']; ?>/<?php echo $us['status']; ?>" class="btn btn-success btn-sm disabled">Active</a>
                                                <?php } else { ?>
                                                    <a href="<?php echo base_url(); ?>user/update_status/<?php echo $us['id']; ?>/<?php echo $us['status']; ?>" class="btn btn-success btn-sm">Active</a>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <a href="<?php echo base_url(); ?>user/update_status/<?php echo $us['id']; ?>/<?php echo $us['status']; ?>" class="btn btn-warning btn-sm">Inactive</a>
                                            <?php } ?>


                                        <td>
                                            <?php if ($_SESSION['email'] == $us['email']) { ?>
                                                <!-- Trigger Hapus -->
                                                <button type="button" class="btn btn-danger btn-sm disabled" data-toggle="modal" data-target="#modal-danger<?php echo $us['id']; ?>">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            <?php } else { ?>
                                                <!-- Trigger Hapus -->
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger<?php echo $us['id']; ?>">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            <?php } ?>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-danger<?php echo $us['id']; ?>">
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
                                                            <a href="<?= base_url('User/hapus/') . $us['id']; ?>" class="btn btn-outline-light">Simpan Perubahan</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                            <!-- Trigger Detail -->
                                            <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-default<?php echo $us['id'] ?>">Detail</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-default<?php echo $us['id'] ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Detail User</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Profile Image -->
                                                            <div class="card card-primary card-outline">
                                                                <div class="card-body box-profile">
                                                                    <div class="text-center">
                                                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>" alt="User profile picture">
                                                                    </div>

                                                                    <h3 class="profile-username text-center"><?php echo $us['nama']; ?></h3>

                                                                    <p class="text-muted text-center"><?= $us['email']; ?></p>

                                                                    <ul class="list-group list-group-unbordered mb-3">
                                                                        <li class="list-group-item">
                                                                            <b>Jenis Kelamin</b> <a class="float-right"><?= $us['jenis_kelamin']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Alamat</b> <a class="float-right"><?= $us['alamat']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Kota</b> <a class="float-right"><?= $us['kota']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>No HP</b> <a class="float-right"><?= $us['no_hp']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Role</b> <a class="float-right"><?= $us['role']; ?> | <?= $us['status']; ?></a>
                                                                        </li>
                                                                    </ul>
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
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
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