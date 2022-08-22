<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800">Koreksi Pengajuan</h5>
    <br>
    <div class="text-left">
        <a href="" class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#tambahkoreksiModal"><i class="fas fa-plus fa-sm"></i> Upload Koreksi</a>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>
    <div class="table-responsive">
        <div class="mx-4">
            <table class="table table-hover table-striped col-md-12" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Koreksi</th>
                        <th scope="col">Komentar</th>
                        <th scope="col">Proposal</th>
                        <th scope="col">Aksi</th>

                        <!-- <th scope="col">Status</th> -->

                    </tr>
                </thead>

                <?php $no = 1; ?>
                <?php foreach ($koreksi as $krs) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= date('d-F-Y', $krs['tgl_koreksi']); ?></td>
                        <td><?= $krs['komen_koreksi']; ?></td>
                        <td><?= $krs['file_koreksi']; ?></td>

                        <td>
                            <a href="" data-toggle="modal" data-target="#edit<?= $krs['id'] ?>" class="badge badge-info"><i class="fas fa-edit"></i></a>

                            <!-- Modal Edit-->
                            <div class="modal fade" id="edit<?= $krs['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editLabel">Edit Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= base_url('reviewer/editkoreksi'); ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Komentar</label>
                                                    <input type="text" class="form-control" id="komen_koreksi" name="komen_koreksi" value="<?= $krs['komen_koreksi'] ?>">
                                                    <input type="hidden" id="id" name="id" value="<?= $krs['id'] ?>">
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
                            <a class="badge badge-danger" onclick="javascript: return confirm ('Anda yakin ingin menghapus ?')" href="<?= base_url('reviewer/hapuskoreksi/' . $krs['id']) ?>"><i class="fas fa-trash "></i></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?><tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- /.container-fluid -->

<!-- End of Main Content -->
<!-- Modal tambah Koreksi-->
<div class="modal fade" id="tambahkoreksiModal" tabindex="-1" role="dialog" aria-labelledby="tambahkoreksiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahkoreksiModalLabel">Upload Koreksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('reviewer/tambah_koreksi'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label> Komentar </label>
                        <input type="text" class="form-control" id="komen_koreksi" name="komen_koreksi" placeholder="komentar koreksi">
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file_koreksi" name="file_koreksi" required>
                                <label for="file_koreksi" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
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