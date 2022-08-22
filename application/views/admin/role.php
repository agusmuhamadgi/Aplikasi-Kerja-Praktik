<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $aktif; ?></h1>

    <div class="row">

        <div class="col-lg-6">
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message') ?>
            <a href="" class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#roleModal"><i class="fas fa-plus fa-sm"></i> Tambah Role</a>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning">Access</a>
                                <a href="" data-toggle="modal" data-target="#edit<?= $r['id'] ?>" class="badge badge-info"><i class="fas fa-edit"></i></a>
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
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Keluar</button>
                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hapus-->
                                <a class="badge badge-danger" onclick="javascript: return confirm ('Anda yakin ingin menghapus ?')" href="<?= base_url('admin/hapusrole/' . $r['id']) ?>"><i class="fas fa-trash "></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Nama role">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-success btn-sm">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>