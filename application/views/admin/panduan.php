<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 ml-1 text-gray-800">File Panduan</h5>

    <div class="row">
        <div class="col-lg ml-1
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>">
            <?= $this->session->flashdata('message');  ?>

            <div class="card shadow">
                <div class="card-header bg-success border-bottom-warning text-right">
                    <a href="" class="btn btn-outline-warning btn-sm mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fa-sm"></i> Tambah File Panduan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-lg">

                            <table class="table table-bordered table-hover table-striped" id="dataTable">
                                <thead>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama panduan</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($file as $fl) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $fl['panduan'] ?></td>
                                            <!-- <td><?= $fl['nama_file'] ?></td> -->

                                            <td>
                                                <a href="<?php echo base_url('admin/download1/' . $fl['id']); ?>">
                                                    <?php echo $fl['nama_file'] ?>
                                                </a>
                                            </td>

                                            <td>
                                                <div class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal<?= $fl['id']  ?>">
                                                    <i class="fa fa-edit"></i>
                                                </div>

                                                <div class="modal fade" id="modal<?= $fl['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Panduan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <form action="<?php echo base_url() . 'admin/edit_panduan'; ?>" method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                    <label for="name" class="col-sm-12 col-form-label"><b>Nama Panduan</b></label>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-12">
                                                                            <input type="hidden" name="id" class="form-control" value="<?= $fl['id'] ?>">
                                                                            <input type="hidden" class="form-control" id="id_pengupload" name="id_pengupload" value="<?= $user['id'] ?>">
                                                                            <input type="text" class="form-control" id="panduan" name="panduan" value="<?= $fl['panduan'] ?>" required>
                                                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <label for="name" class="col-sm-12 col-form-label"><b>File Panduan (pdf)</b></label>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-11 ml-3">
                                                                            <input type="file" class="custom-file-input" id="nama_file" name="nama_file" required>
                                                                            <label for="nama_file" class="custom-file-label">Choose File</label>
                                                                        </div>
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


                                            <td>
                                                <div class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal2<?= $fl['id']  ?>">
                                                    <i class="fa fa-trash"></i>
                                                </div>

                                                <div class="modal fade" id="modal2<?= $fl['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Panduan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <p>Apakah anda yakin untuk menghapus panduan ?</p>
                                                            </div>

                                                            <div class="modal-footer"></div>
                                                            <center>
                                                                <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                                                <?php echo anchor('admin/hapus_panduan/' . $fl['id'], '<div class="btn btn-outline-danger btn-sm">Hapus</div>') ?>
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
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah File Panduan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="tambah_panduan" method="post" enctype="multipart/form-data">

                <div class="modal-body">
                    <label for="name" class="col-sm-8 col-form-label"><b> Nama Panduan</b></label>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="hidden" class="form-control" id="id_pengupload" name="id_pengupload" value="<?= $user['id'] ?>">
                            <input type="text" class="form-control" id="panduan" name="panduan" required>
                        </div>
                    </div>

                    <label for="name" class="col-sm-8 mr-5 col-form-label"><b>File Panduan (pdf) </b></label>
                    <div class="form-group row">
                        <div class="col-sm-11 ml-3">
                            <input type="file" class="custom-file-input" id="nama_file" name="nama_file" required>
                            <label for="nama_file" class="custom-file-label">Choose File</label>
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