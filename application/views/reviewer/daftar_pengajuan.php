<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800">Daftar Pengajuan</h5>

    <div class="row">
        <div class="col-lg-5 ml-1">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-success border-bottom-warning text-left">
            <h5 class="h3 mb-4 text-gray-100"></h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="mx-4">
                    <table class="table table-hover table-striped col-md-12" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Ketua Pengusul</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Judul</th>
                                <th scope="col">SKIM Pengabdian</th>
                                <th scope="col">Dana</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Proposal</th>
                                <th scope="col">Revisi</th>
                                <th scope="col">Acc</th>

                                <!-- <th scope="col">Status</th> -->

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pengajuan1 as $rkp) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $rkp->nama_ketua_pengabdi; ?></td>
                                    <td>
                                        <?php echo anchor('reviewer/detail/' . $rkp->id_pengajuan, '<div class="btn btn-outline-primary btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
                                    </td>
                                    <td><?= $rkp->judul_pengabdian; ?></td>
                                    <td><?= $rkp->skim; ?></td>
                                    <td><?= $rkp->dana; ?></td>
                                    <td>Rp <?= number_format($rkp->jumlah, 0, ',', '.'); ?></td>
                                    <td> <a href="<?php echo base_url('reviewer/download/' . $rkp->id_pengajuan); ?>">
                                            <div class="btn btn-outline-dark btn-sm"><i class="fa fa-download"></i></div>
                                        </a>
                                    </td>

                                    <!-- revisi -->
                                    <td>
                                        <form action="<?php echo base_url() . 'reviewer/revisi1'; ?>" method="post" enctype="multipart/form-data">
                                            <div class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $rkp->id_pengajuan  ?>">
                                                <i class="fa fa-edit"></i>
                                            </div>


                                            <div class="modal fade" id="exampleModal<?= $rkp->id_pengajuan  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Catatan Revisi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <input type="hidden" name="id" class="form-control" value="<?php echo $rkp->id_pengajuan ?>">
                                                                <textarea rows="7" class="form-control" id="komentar" name="komentar" placeholder="ketik disini..."></textarea>
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
                                                        <center>

                                                            <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-outline-success btn-sm">Kirim</button>
                                                            <br>
                                                        </center>
                                        </form>
                                        <br>
                                    </td>

                                    <!-- terbit -->
                                    <?php if ($user['id_jabatan'] == 2) { ?>
                                        <td>
                                            <div class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal<?= $rkp->id_pengajuan  ?>">
                                                <i class="fas fa-vote-yea"></i>
                                            </div>


                                            <div class="modal fade" id="modal<?= $rkp->id_pengajuan  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">ACC</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="<?php echo base_url() . 'reviewer/selesai'; ?>" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group row">
                                                                    <input type="hidden" name="id" class="form-control" value="<?= $rkp->id_pengajuan ?>">
                                                                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $user['id'] ?>">
                                                                    <label for="name" class="col-sm-12 col-form-label">Apakah anda yakin untuk mengesahkan pengajuan ini?</label>
                                                                    <!-- <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="tgl_koreksi" name="tgl_koreksi" value="<?= date("d-M-Y") ?>" readonly>
                                                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">

                                                                <center>

                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-outline-success btn-sm">Accepted</button>
                                                                    <br>
                                                                </center>
                                                            </div>
                                                        </form>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    <?php } ?>
                                    <?php if ($user['id_jabatan'] == 1) { ?>
                                        <td>
                                            <div class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modall<?= $rkp->id_pengajuan  ?>">
                                                <i class="fas fa-vote-yea"></i>
                                            </div>


                                            <div class="modal fade" id="modall<?= $rkp->id_pengajuan  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">ACC</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="<?php echo base_url() . 'reviewer/selesai'; ?>" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group row">
                                                                    <input type="hidden" name="id" class="form-control" value="<?= $rkp->id_pengajuan ?>">
                                                                    <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?= $user['id'] ?>">
                                                                    <label for="name" class="col-sm-12 col-form-label">Ubah Dana Pengajuan</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" class="form-control" id="dana" name="dana" value="<?= $rkp->jumlah ?>">
                                                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                    </div>
                                                                    <br>
                                                                    <label for="name" class="col-sm-12 col-form-label">Apakah anda yakin untuk mengesahkan pengajuan ini?</label>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">

                                                                <center>

                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-outline-success btn-sm">Accepted</button>
                                                                    <br>
                                                                </center>
                                                            </div>
                                                        </form>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
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
<!-- /.container-fluid -->

<!-- End of Main Content -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>