<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800">Revisi Pengajuan</h5>

    <div class="row">
        <div class="col-lg-10">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-success border-bottom-warning text-left">
            <h5 class="h3 mb-4 text-gray-100"></h5>
        </div>

        <div class="col-lg">
            <br>
            <?php foreach ($pengajuan as $pn) : ?>

                <form action="<?php echo base_url() . 'user/update_pengajuan'; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Judul Pengabdian</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $pn->id ?>">
                            <input type="text" class="form-control" id="judul_pengabdian" name="judul_pengabdian" value="<?= $pn->judul_pengabdian; ?>">
                            <?= form_error('judul_pengabdian', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                    <label for="skim" class="col-sm-4 col-form-label">SKIM</label>
                    <div class="col-sm-8">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $pn->id ?>">
                        <input type="text" class="form-control" id="skim_pengabdian" name="skim_pengabdian" value="<?= $pn->skim; ?>">
                        <?= form_error('skim_pengabdian', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div> -->

                    <div class="form-group row">
                        <label for="dana" class="col-sm-4 col-form-label">Dana dari</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $pn->id ?>">
                            <input type="text" class="form-control" id="dana" name="dana" value="<?= $pn->dana; ?>">
                            <?= form_error('dana', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-4 col-form-label">Jumlah dana</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="id" class="form-control" value="<?php echo $pn->id ?>">
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $pn->jumlah; ?>">
                            <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="proposal" class="col-sm-4 col-form-label">proposal</label>
                        <div class="col-sm-8">
                            <div class="custom-file">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $pn->id ?>">
                                <input type="file" class="custom-file-input" id="proposal" name="proposal" value="<?= $pn->proposal; ?>">
                                <?= form_error('proposal', '<small class="text-danger pl-3">', '</small>'); ?>
                                <label for="proposal" class="custom-file-label">Choose File</label>
                            </div>

                        </div>
                    </div>
                    <br>
                <?php endforeach; ?>
                <table align="right">
                    <tr>
                        <td>
                            <a href="<?php echo base_url('user/rekap'); ?>" class="btn btn-outline-dark btn-sm">Kembali</a>
                            <button type="submit" class=" btn btn-outline-success btn-sm">Simpan</a>
                        </td>
                    </tr>
                </table>

                </form>
        </div>

        <br>
        <p> *kosongkan jika tidak ada</p>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->