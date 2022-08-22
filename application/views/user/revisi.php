<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800">Revisi</h5>
    <div class="text-left">

    </div>
    <div class="row">
    </div>
    <div class="card shadow">
        <div class="card-header bg-success border-bottom-warning text-left">
            <a href="" class="btn btn-outline-warning btn-sm mb-3" data-toggle="modal" data-target="#menuModal"><i class="fas fa-plus fa-sm"></i> Upload Revisi</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="mx-4">
                    <table class="table table-hover table-striped col-md-12" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal Revisi</th>
                                <th scope="col">Komentar</th>
                                <th scope="col">Proposal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($revisi as $rvs) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= date('d-F-Y', $rvs['tgl_revisi']); ?></td>
                                    <td><?= $rvs['komentar']; ?></td>
                                    <td><?= $rvs['nama_file']; ?></td>

                                    <td>
                                        <a href="" data-toggle="modal" data-target="#edit<?= $rvs['id'] ?>" class="badge badge-info"><i class="fas fa-edit"></i></a>

                                        <!-- Modal Edit-->
                                        <div class="modal fade" id="edit<?= $rvs['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editLabel">Edit Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('user/editrevisi'); ?>" method="post">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label>Komentar</label>
                                                                <input type="text" class="form-control" id="komentar" name="komentar" value="<?= $rvs['komentar'] ?>">
                                                                <input type="hidden" id="id" name="id" value="<?= $rvs['id'] ?>">
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
                                        <a class="badge badge-danger" onclick="javascript: return confirm ('Anda yakin ingin menghapus ?')" href="<?= base_url('user/hapusrevisi/' . $rvs['id']) ?>"><i class="fas fa-trash "></i></a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="menuModalLabel">Upload Revisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user/tambah_data'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Komentar </label>
                        <input type="text" class="form-control" id="komentar" name="komentar" placeholder="komentar">
                    </div>

                    <div class="form-group">
                        <label>Proposal</label>
                        <input type="file" class="form-control" id="nama_file" name="nama_file" required>
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