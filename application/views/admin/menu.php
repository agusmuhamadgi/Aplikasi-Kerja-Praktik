<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 ml-1 text-gray-800">Daftar Menu</h5>

    <div class="row">
        <div class="col-lg ml-1">
            <?= form_error('admin/tambah_menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message') ?>
            <div class="card shadow">
                <div class="card-header bg-success border-bottom-warning text-right">
                    <a href="" class="btn btn-outline-warning btn-sm mb-3" data-toggle="modal" data-target="#menuModal"><i class="fas fa-plus fa-sm"></i> Tambah Menu</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $m['menu']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#edit<?= $m['id'] ?>" class="badge badge-info"><i class="fas fa-edit"></i></a>

                                            <!-- Modal Edit-->
                                            <div class="modal fade" id="edit<?= $m['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editLabel">Edit Menu</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?= base_url('admin/editmenu'); ?>" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="menu" name="menu" value="<?= $m['menu'] ?>">
                                                                    <input type="hidden" id="id" name="id" value="<?= $m['id'] ?>">
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="form-check">
                                                                        <input class=" form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                                                        <label class="form-check-label" for="is_active">
                                                                            Aktif?
                                                                        </label>
                                                                    </div>
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
                                            <a href="" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#hapus2<?= $m['id']  ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>

                                            <div class="modal fade" id="hapus2<?= $m['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="hapus2ModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="hapus2ModalLabel">Hapus Menu</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <p>Apakah anda yakin untuk menghapus menu <?= $m['menu']  ?> ?</p>
                                                        </div>

                                                        <div class="modal-footer"></div>
                                                        <center>
                                                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                                                            <?php echo anchor('admin/hapus/' . $m['id'], '<div class="btn btn-outline-danger">Hapus</div>') ?>
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
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="menuModalLabel">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/tambah_menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama menu">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Aktif?
                            </label>
                        </div>
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