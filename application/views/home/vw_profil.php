<main id="main" data-aos="fade-center">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?= base_url('Home/') ?>">Home</a></li>
                <li><?= $title; ?></li>
            </ol>
            <h2><?= $judul; ?></h2>

        </div>

    </section><!-- End Breadcrumbs -->

    <div class="container">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center"><?= $user['nama']; ?></h3>

                                <p class="text-muted text-center"><?= $user['role']; ?></p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Date Created</b> <a class="float-right"><?= date('d-m-Y', $user['date_created']); ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Status</b> <a class="float-right"><?= $user['status']; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Role</b> <a class="float-right"><?= $user['role']; ?></a>
                                    </li>
                                </ul>

                                <a href="#" class="btn btn-primary btn-block disabled"><b>Info</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">

                        <div class="card card-primary">
                            <?= $this->session->flashdata('message'); ?>
                            <div class="card-header">
                                <h3 class="card-title">Setting</h3>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="settings">
                                        <form class="form-horizontal" action="<?= base_url('Home/edit/') . $user['id']; ?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nama" value="<?= $user['nama']; ?>" class="form-control" id="inputName" placeholder="Name">
                                                </div>
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="jenis_kelamin">
                                                        <option value="<?= $user['jenis_kelamin'] ?>"><?= $user['jenis_kelamin'] ?></option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                                <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" value="<?= $user['email']; ?>" class="form-control" id="inputEmail" placeholder="Email">
                                                </div>
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="alamat" value="<?= $user['alamat']; ?>" class="form-control" id="inputName" placeholder="Alamat">
                                                </div>
                                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Kota</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="kota" value="<?= $user['kota']; ?>" class="form-control" id="inputName" placeholder="Kota">
                                                </div>
                                                <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Nomor HP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="no_hp" value="<?= $user['no_hp']; ?>" class="form-control" id="inputName" placeholder="Nomor HP">
                                                </div>
                                                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">File Input</label>
                                                <div class="col-sm-10">
                                                    <div class="custom-file">
                                                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile"><?= $user['gambar']; ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <img src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <!-- Trigger -->
                                                    <button type="submit" class="btn btn-primary" onclick="myFunction()">
                                                        Update
                                                    </button>
                                                    <script>
                                                        function myFunction() {
                                                            var txt;
                                                            var r = confirm("Apakah anda yakin ingin mengubah data ?");
                                                            if (r == true) {
                                                                txt = "You pressed OK!";
                                                            } else {
                                                                txt = "You pressed Cancel!";
                                                            }
                                                            document.getElementById("demo").innerHTML = txt;
                                                        }
                                                    </script>
                                                    <button type="reset" class="btn btn-default">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.modal -->
                                    </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- Main content -->


    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">



        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->