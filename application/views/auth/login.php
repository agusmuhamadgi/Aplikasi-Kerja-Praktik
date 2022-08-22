    <div class="container">

        <div id="showtime"></div>
        <div class="col-lg-4 col-lg-offset-4">
            <div class="lock-screen">
                <h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
                <p>UNLOCK</p>

                <!-- <?= $this->session->flashdata('message'); ?> -->
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <div class="text-center">
                                        <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="" height="50px" style="margin-bottom: 10px;">
                                    </div>
                                    <h3 class="modal-title">Lembaga Penelitian & Pengabdian Masyarakat</h3>
                                </div>
                                <div class="modal-body">
                                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <br>
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Sandi">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="modal-footer centered">
                                    <button data-dismiss="modal" class="btn btn-theme02" type="reset">Batal</button>
                                    <button class="btn btn-theme03" type="submit">Login</button>
                                </div>
                                <a class="small" href="<?= base_url(); ?>auth/registrasi">Create an Account!</a>

                            </div>
                        </div>
                    </div>
                </form>

                <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                    <div aria-hidden="true" aria-labelledby="regModalLabel" role="dialog" tabindex="-1" id="regModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h3 class="modal-title">Buat Akun</h3>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <br>
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <br>
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <br>
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                                <div class="modal-footer centered">
                                    <button class="btn btn-theme03" type="submit">Register Account</button>
                                </div>
                                <a class="small" href="<?= base_url(); ?>auth">Already have an account? Login!</a>

                            </div>
                        </div>
                    </div>
                </form>



            </div>
            <! --/lock-screen -->
        </div><!-- /col-lg-4 -->

    </div><!-- /container -->