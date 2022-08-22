<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 ml-1 text-gray-800">Panduan Pengajuan</h5>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>PERHATIAN!!</strong> Silahkan mendowload file berikut sebagai acuan dalam pengajuan proposal pengabdian
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-success border-bottom-warning text-left">
            <h5 class="h3 mb-4 text-gray-100"></h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-lg-12">
                    <table class="table table-hover table-stripedcol-lg ml-1" id="DataTable">
                        <thead>
                            <th scope="col">No</th>
                            <th scope="col">Panduan</th>
                            <th scope="col">Download File</th>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($panduan as $fn) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $fn['panduan'] ?></td>

                                    <td>
                                        <a href="<?php echo base_url('user/download/' . $fn['id']); ?>">
                                            <div class="btn btn-outline-dark btn-sm"><i class="fa fa-download"></i></div>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
</div>
<!-- End of Main Content -->