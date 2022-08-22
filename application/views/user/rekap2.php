<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 ml-1 text-gray-800">Rekap Pengajuan</h5>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>PERHATIAN!!</strong> Silahkan download berkas yang telah disahkan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
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
                                <th scope="col">Detail</th>
                                <th scope="col">Formulir</th>
                                <th scope="col">File Proposal</th>
                                <!-- <th scope="col">Status</th> -->

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pengajuan2 as $rkp) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td>
                                        <?php echo anchor('user/detail2/' . $rkp->id_pengajuan, '<div class="btn btn-outline-primary btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
                                    </td>
                                    <td><a href="<?php echo base_url('user/pdf/' . $rkp->id_pengajuan); ?>">
                                            <div class="btn btn-outline-success btn-sm"><i class="fa fa-file-pdf"></i></div>
                                        </a>
                                        <a href="<?php echo base_url('user/pdf2/' . $rkp->id_pengajuan); ?>">
                                            <div class="btn btn-outline-success btn-sm"><i class="fa fa-file-pdf"></i></div>
                                    </td>
                                    <td> <a href="<?php echo base_url('user/download/' . $rkp->id_pengajuan); ?>">
                                            <div class="btn btn-outline-dark btn-sm"><i class="fa fa-download"></i></div>
                                        </a>
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

<!-- /.container-fluid -->

<!-- End of Main Content -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>