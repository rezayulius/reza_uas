    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href=""><b>Yus</b>Perabot</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in untuk memulai sesi</p>
                    <?= $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= base_url('auth'); ?>">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" placeholder="Masukkan Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" value="<?= set_value('nama'); ?>" placeholder="Masukkan Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">

                            <!-- /.col -->
                            <div class="col-4 ">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div><br />
                        </div>
                        <div class="row justify-content-center">
                            <p class="mb-0 just">
                                <a class="text-center" href="<?= base_url(); ?>auth/registrasi">Daftar akun</a>
                            </p>
                        </div>
                    </form>

                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->