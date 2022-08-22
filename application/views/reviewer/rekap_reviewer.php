<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800">Rekap Pengajuan Telah Diterima</h5>

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
                                <th scope="col">Judul</th>
                                <th scope="col">SKIM Pengabdian</th>
                                <th scope="col">Dana</th>
                                <th scope="col">Jumlah</th>
                                <!-- <th scope="col">Tanggal Acc</th> -->
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($rekap2 as $rkp) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $rkp->nama_ketua_pengabdi; ?></td>
                                    <td><?= $rkp->judul_pengabdian; ?></td>
                                    <td><?= $rkp->skim; ?></td>
                                    <td><?= $rkp->dana; ?></td>
                                    <td>Rp <?= number_format($rkp->jumlah, 0, ',', '.'); ?></td>
                                    <!-- <td><?= $rkp->tgl_koreksi; ?></td> -->
                                    <td>
                                        <?php echo anchor('reviewer/detail_rekap/' . $rkp->id_pengajuan, '<div class="btn btn-outline-primary btn-sm"><i class="fa fa-search-plus"></i></div>') ?>
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