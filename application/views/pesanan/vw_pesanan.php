<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <?= $this->session->flashdata('message');
                    ?>
                    <!-- <div class="card-header">
                        <div class="col-md-6"><a href="<?= base_url(); ?>User/tambah" class="btn btn-info mb-2">Tambah User</a></div>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No Pemesanan</th>
                                    <th>Nama User</th>
                                    <th>Nama Paket</th>
                                    <th>Nomor HP</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pesanan as $psn) : ?>
                                    <tr>
                                        <td><?= $psn['no_pemesanan']; ?></td>
                                        <td>
                                            <?php foreach ($userdata as $ud) : ?>
                                                <?php if ($psn['id_user'] == $ud['id']) { ?>
                                                    <?= $ud['nama']; ?>
                                                <?php } ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($paket as $pk) : ?>
                                                <?php if ($psn['id_paket'] == $pk['id']) { ?>
                                                    <?= $pk['nama']; ?>
                                                <?php } ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td><?= $psn['no_hp']; ?></td>
                                        <td><?= date('d-m-Y', $psn['tgl_pesan']); ?></td>
                                        <td>
                                            <!-- Trigger Hapus -->
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger<?php echo $psn['id']; ?>">
                                                <i class="fas fa-trash"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-danger<?php echo $psn['id']; ?>">
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
                                                            <a href="<?= base_url('Pesanan/hapus/') . $psn['id']; ?>" class="btn btn-outline-light">Simpan Perubahan</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                            <!-- Trigger Detail -->
                                            <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-default<?php echo $psn['no_pemesanan'] ?>">Detail</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-default<?php echo $psn['no_pemesanan'] ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Detail Pesanan</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Profile Image -->
                                                            <div class="card card-primary card-outline">
                                                                <div class="card-body box-profile">

                                                                    <h3 class="profile-username text-center"><?php echo $psn['no_pemesanan']; ?></h3>

                                                                    <p class="text-muted text-center">Paket
                                                                        <?php foreach ($paket as $pk) : ?>
                                                                            <?php if ($psn['id_paket'] == $pk['id']) { ?>
                                                                                <?= $pk['nama']; ?>
                                                                            <?php } ?>
                                                                        <?php endforeach; ?>
                                                                    </p>

                                                                    <ul class="list-group list-group-unbordered mb-3">
                                                                        <li class="list-group-item">
                                                                            <b>Nama</b> <a class="float-right"><?= $psn['nama']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Nama Paket</b>
                                                                            <a class="float-right">
                                                                                <?php foreach ($paket as $pk) : ?>
                                                                                    <?php if ($psn['id_paket'] == $pk['id']) { ?>
                                                                                        <?= $pk['nama']; ?>
                                                                                    <?php } ?>
                                                                                <?php endforeach; ?>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Harga</b>
                                                                            <a class="float-right">
                                                                                <?php foreach ($paket as $pk) : ?>
                                                                                    <?php if ($psn['id_paket'] == $pk['id']) { ?>
                                                                                        <?= "Rp " . number_format($pk['harga'], 2, ',', '.'); ?>
                                                                                    <?php } ?>
                                                                                <?php endforeach; ?>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>No HP</b> <a class="float-right"><?= $psn['no_hp']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Pertanyaan 1</b> <a class="float-right"><?= $psn['pertanyaan1']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Pertanyaan 2</b> <a class="float-right"><?= $psn['pertanyaan2']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Pertanyaan 3</b> <a class="float-right"><?= $psn['pertanyaan3']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Pertanyaan 4</b> <a class="float-right"><?= $psn['pertanyaan4']; ?></a>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <b>Tanggal Pemesanan</b> <a class="float-right"><?= date('d-m-Y', $psn['tgl_pesan']); ?></a>
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
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No Pemesanan</th>
                                    <th>Nama User</th>
                                    <th>Nama Paket</th>
                                    <th>Nomor HP</th>
                                    <th>Tanggal Pemesanan</th>
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