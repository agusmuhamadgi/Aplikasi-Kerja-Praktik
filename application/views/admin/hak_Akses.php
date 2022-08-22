<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 ml-1 text-gray-800">Hak Akses Menu</h5>

    <div class="row">
        <div class="col-lg ml-1">
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message') ?>
            <div class="card shadow">
                <div class="card-header bg-success border-bottom-warning text-right">
                    <a href="" class="btn btn-outline-warning btn-sm mb-3 ml-2" data-toggle="modal" data-target="#exampleModal" class="badge badge-info"><i class="fas fa-plus fa-sm"></i> Tambah Hak Akses</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" id="dataTable">
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Role</th>
                                <th scope="col">Hak Akses</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Hapus</th>
                            </thead>
                            <tbody>
                                <?php $i = 1;


                                foreach ($hak_akses as $hak) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= strtoupper($hak['role']) ?></td>
                                        <td><?= $hak['menu'] ?></td>
                                        <td>
                                            <a href="" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#modal<?= $hak['id_akses']  ?>" class="badge badge-info"><i class="fas fa-edit"></i></a>

                                            <div class="modal fade" id="modal<?= $hak['id_akses']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Hak Akses</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="<?php echo base_url() . 'admin/edit_hak_akses'; ?>" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group row">
                                                                    <input type="hidden" name="id" class="form-control" value="<?= $hak['id_akses'] ?>">

                                                                    <label for="jenis" class="col-sm-4 col-form-label">Role User</label>
                                                                    <div class="col-sm-8">
                                                                        <select class="form-control" id="role" name="role">
                                                                            <?php foreach ($user_role as $role) : ?>
                                                                                <option value="<?= $role['id'] ?>">
                                                                                    <?= $role['role'] ?>
                                                                                </option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="menu" class="col-sm-4 col-form-label">Hak Akses</label>
                                                                    <div class="col-sm-8">
                                                                        <select class="form-control" id="menu" name="menu">
                                                                            <?php foreach ($user_menu as $menu) : ?>
                                                                                <option value="<?= $menu['id'] ?>">
                                                                                    <?= $menu['menu'] ?>
                                                                                </option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                    </div>
                                                                </div>

                                                                <center>

                                                                    <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
                                                                    <br>
                                                                </center>
                                                        </form>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                        <td>
                                            <a href="" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal2<?= $hak['id']  ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                                            <div class="modal fade" id="modal2<?= $hak['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Hak Akses</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <p>Apakah anda yakin untuk menghapus hak <?= strtoupper($hak['role'])  ?> untuk mengakses <?= $hak['menu'] ?>?</p>
                                                        </div>

                                                        <div class="modal-footer"></div>
                                                        <center>
                                                            <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                                            <?php echo anchor('admin/hapus_hak_akses/' . $hak['id_akses'], '<div class="btn btn-outline-danger btn-sm">Hapus</div>') ?>
                                                        </center>
                                                        <br>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Hak Akses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="tambah_hak_akses" method="post" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-4 col-form-label">Role User</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="role" name="role">
                                <?php foreach ($user_role as $role) : ?>
                                    <option value="<?= $role['id'] ?>">
                                        <?= $role['role'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="menu" class="col-sm-4 col-form-label">Hak Akses</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="menu" name="menu">
                                <?php foreach ($user_menu as $menu) : ?>
                                    <option value="<?= $menu['id'] ?>">
                                        <?= $menu['menu'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <table align="center">
                        <tr>
                            <td>
                                <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-outline-success btn-sm">Tambah</button>
                            </td>
                        </tr>
                    </table>
                </div>

            </form>

        </div>
    </div>
</div>