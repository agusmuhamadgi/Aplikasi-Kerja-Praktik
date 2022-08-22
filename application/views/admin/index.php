<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4  ml-1 text-gray-800">Role</h5>

    <div class="row">
        <div class="col-lg ml-1">
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message') ?>
            <div class="card shadow">
                <div class="card-header bg-success border-bottom-warning text-right">
                    <a href="" class="btn btn-outline-warning btn-sm mb-3" data-toggle="modal" data-target="#roleModal" class="badge badge-info"><i class="fas fa-plus fa-sm"></i> Tambah Role</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($role as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $r['role']; ?></td>
                                        <td>
                                            <!-- <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning">Access</a> -->
                                            <a href="" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#edit<?= $r['id'] ?>" class="badge badge-info"><i class="fas fa-edit"></i></a>

                                            <!-- Modal Role Edit-->
                                            <div class="modal fade" id="edit<?= $r['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editLabel">Edit data</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url('admin/editrole'); ?>" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="role" name="role" value="<?= $r['role'] ?>">
                                                                    <input type="hidden" id="id" name="id" value="<?= $r['id'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"></div>
                                                            <center>
                                                                <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
                                                            </center>
                                                            <br>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                        </td>

                                        <!-- Hapus-->
                                        <td>
                                            <a href="" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $r['id']  ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                                            <div class="modal fade" id="hapus<?= $r['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="card-header bg-success border-bottom-warning text-left">
                                                                <a href="" class="btn btn-outline-warning btn-sm mb-3" data-toggle="modal" data-target="#roleModal" class="badge badge-info"><i class="fas fa-plus fa-sm"></i> Tambah Role</a>
                                                            </div>
                                                            <h5 class="modal-title" id="hapusModalLabel">Hapus Role</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <p>Apakah anda yakin ingin menghapus role <?= strtoupper($r['role'])  ?>?</p>
                                                        </div>

                                                        <div class="modal-footer"></div>
                                                        <center>
                                                            <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                                            <?php echo anchor('admin/hapusrole/' . $r['id'], '<div class="btn btn-outline-danger btn-sm">Hapus</div>') ?>
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
<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModalLabel">Tambah Role </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/index'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">

                        <input type="text" class="form-control" id="role" name="role" placeholder="Nama role">
                    </div>
                </div>
                <div class="modal-footer"> </div>
                <center>
                    <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-outline-success btn-sm">Tambah</button>
                </center>
                <br>
            </form>
        </div>
    </div>
</div>