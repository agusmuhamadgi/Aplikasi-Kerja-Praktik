<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800">Profil Saya</h5>

    <div class="row">
        <div class="col-lg-5 ml-3">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>

    <div class="card mb-3" style="max-width: 550px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><?= $role->role; ?></p>

                </div>
            </div>
        </div>
    </div>
    <a href="" class="btn btn-outline-success btn-sm mb-3" data-toggle="modal" data-target="#exampleModal">Edit Profile</a>
    <a href="" class="btn btn-outline-info  btn-sm mb-3" data-toggle="modal" data-target="#exampleModal1">Ganti Password</a>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Foto Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?php echo base_url() . 'reviewer/editProfile'; ?>" method="post" enctype="multipart/form-data">

                <div class="modal-body">
                    <label for="name" class="col-sm-8 col-form-label"><b> Foto Profil (jpg/jpeg/png)</b></label>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="hidden" id="email" name="email" value="<?= $user['email']; ?>">
                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                <label for="image" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <table align="center">
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-dark btn-sm " data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
                            </td>
                        </tr>
                    </table>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="<?php echo base_url() . 'reviewer/update_password'; ?>" method="post">

                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-12">

                            <input type="hidden" name="id" class="form-control" value="<?= $user['id']; ?>">
                            <input type="password" name="password" class="form-control" placeholder="password baru">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <table align="center">
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
                            </td>
                        </tr>
                    </table>
                </div>

            </form>
        </div>
    </div>
</div>