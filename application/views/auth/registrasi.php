    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href=""><b>Yus</b>Perabot</a>
            </div>

            <div class="card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Daftar akun baru</p>

                    <form method="post" action="<?= base_url('auth/registrasi'); ?>">
                    
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>  
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" placeholder="Masukkan nama lengkap">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="input-group mb-3">
                            <select class="form-control text-black-50" name="jenis_kelamin">
                                <option disabled selected value>Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-venus-mars"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="alamat" value="<?= set_value('alamat'); ?>" placeholder="Masukkan alamat">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-map-marked-alt"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="kota" value="<?= set_value('kota'); ?>" placeholder="Masukkan kota sekarang">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-map-marker-alt"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" placeholder="Masukkan email valid">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="no_hp" value="<?= set_value('no_hp'); ?>" placeholder="Masukkan No Whatsapp">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone-square"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password1" value="<?= set_value('password'); ?>" placeholder="Masukkan Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password2" placeholder="Masukkan Ulang Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <a href="<?= base_url(); ?>auth" class="text-center">Saya sudah memiliki akun</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->