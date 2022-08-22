<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 ml-1 text-gray-800">Pengajuan</h5>

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
                                <th scope="col">Judul Pengabdian</th>
                                <th scope="col">SKIM Pengabdian</th>
                                <th scope="col">Dana</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">File Revisi</th>
                                <th scope="col">Status</th>
                                <!-- <th scope="col">Status</th> -->

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pengajuan as $rkp) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $rkp->nama_ketua_pengabdi; ?></td>
                                    <td>
                                        <?php echo anchor('user/detail_pengajuan/' . $rkp->id_pengajuan, '<div class="btn btn-outline-primary btn-sm"><i class="fa fa-search-plus"></i></div>'); ?>
                                    </td>
                                    <td><?= $rkp->judul_pengabdian; ?></td>
                                    <td><?= $rkp->skim; ?></td>
                                    <td><?= $rkp->dana; ?></td>
                                    <td>Rp<?= number_format($rkp->jumlah, 0, ',', '.'); ?></td>
                                    <?php if ($rkp->status == 2) { ?>
                                        <td>
                                            <a href="<?php echo base_url('user/download1/' . $rkp->id_pengajuan); ?>">
                                                <div class="btn btn-outline-dark btn-sm"><i class="fa fa-download"></i></div>
                                            </a>
                                        </td>
                                    <?php } else { ?>
                                        <td>
                                            <a href="">
                                                <div class="btn btn-outline-dark btn-sm"><i class="fa fa-download"></i></div>
                                            </a>
                                        </td>
                                    <?php } ?>

                                    <td>
                                        <?php
                                        if ($rkp->status == 1) {
                                        ?>
                                            <div class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?= $rkp->id_pengajuan  ?>">
                                                Tahap Review Kaprodi
                                            </div>
                                        <?php
                                        } else if ($rkp->status  == 2) {
                                        ?>
                                            <div class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $rkp->id_pengajuan  ?>">
                                                Revisi
                                            </div>

                                        <?php
                                        } else if ($rkp->status  == 0) {
                                        ?>
                                            <div class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?= $rkp->id_pengajuan  ?>">
                                                Tahap Review Dekan
                                            </div>

                                        <?php
                                        } else if ($rkp->status  == 3) {
                                        ?>
                                            <div class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal<?= $rkp->id_pengajuan  ?>">
                                                Selesai
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </td>

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
                                                        <?php echo $rkp->komentar; ?>
                                                    </div>
                                                </div>

                                                <!-- <div class="modal-body">
                                                    <div class="form-group">
                                                        <a href="<?php echo base_url('user/download1/' . $rkp->id_pengajuan); ?>">
                                                            <div class="btn btn-outline-dark"><i class="fa fa-download"></i></div>
                                                        </a>

                                                    </div>
                                                </div> -->
                                                <div class="modal-footer"></div>

                                                <center>
                                                    <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal">Tutup</button>
                                                    <?php
                                                    if ($rkp->status == 2) {
                                                        echo anchor('user/edit_pengajuan/' . $rkp->id_pengajuan, '<div class="btn btn-outline-danger btn-sm">Edit Pengajuan</div>');
                                                    }
                                                    ?>
                                                    <br>
                                                    <br>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
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
<!-- /.container-fluid -->

<!-- End of Main Content -->