<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Form F-1.1 & F-1.2</h1>
</div>
<!-- /.container-fluid -->

<table class="table table-hover col-lg-8 ml-5">
    <tr>
        <th>Nama Ketua Pengusul</th>
        <td><?php echo $detail->nama_ketua_pengabdi ?></td>
    </tr>
    <tr>
        <th>Program Studi</th>
        <td><?php echo $detail->nama_prodi ?></td>
    </tr>
    <tr>

        <th>NIDN</th>
        <td><?php echo $detail->nidn ?></td>
    </tr>
    <tr>

        <th>Pendidikan Tertinggi (S1/S2/S3)</th>
        <td><?php echo $detail->pendidikan_tertinggi ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $detail->email ?></td>
    </tr>
    <tr>
        <th>Jabatan Fungsional</th>
        <td><?php echo $detail->jabatan_fungsional ?></td>
    </tr>
    <tr>
        <th>No HP</th>
        <td><?php echo $detail->no_hp ?></td>
    </tr>
    <tr>
        <th>Bidang Ilmu</th>
        <td><?php echo $detail->bidang_ilmu ?></td>
    </tr>
    <tr>
        <th>Pihak Manandatangani (1)</th>
        <td><?php echo $detail->nama_kaprodi ?></td>
    </tr>
    <!-- <tr>
        <th>Jabatan Pihak Manandatangani (1)</th>
        <td><?php echo $detail->jabatan_pihak_satu ?></td>
    </tr> -->
    <tr>
        <th>Pihak Manandatangani (2)</th>
        <td><?php echo $detail->nama_dekan ?></td>
    </tr>
    <!-- <tr>
        <th>Jabatan Pihak Manandatangani (2)</th>
        <td><?php echo $detail->jabatan_pihak_dua ?></td>
    </tr> -->

    <!-- <?php
            if ($detail->pihak_tiga == NULL) {
            } else {
            ?>
        <tr>
            <th>Pihak Manandatangani (3)</th>
            <td><?php echo $detail->pihak_tiga ?></td>
        </tr>
        <tr>
            <th>Jabatan Pihak Manandatangani (3)</th>
            <td><?php echo $detail->jabatan_pihak_tiga ?></td>
        </tr>
    <?php } ?>
    <tr>
        <th>Daftar Penerima</th>
        <td>
            <a href="<?php echo base_url('user/download1/' . $detail->id); ?>">
                <?php echo $detail->data_penerima ?>
                <div class="btn btn-success btn-sm"><i class="fa fa-download"></i></div>
            </a>
        </td>
    </tr>
    <tr>
        <th>Desain Sertifikat</th>
        <!-- <td><?php echo $detail->desain ?></td> -->
    <td>
        <a href="<?php echo base_url('user/download2/' . $detail->id); ?>">
            <?php echo $detail->desain ?>
            <div class="btn btn-success btn-sm"><i class="fa fa-download"></i></div>
        </a>
    </td>
    </tr>
    <?php if ($user['kode_penyelenggara']  == 5 || $user['kode_penyelenggara'] == 6) { ?>
        <tr>
            <th>Scan Formulir</th>
            <td>
                <a href="<?php echo base_url('user/download3/' . $detail->id); ?>">
                    <?php echo $detail->scan_formulir ?>
                    <div class="btn btn-success btn-sm"><i class="fa fa-download"></i></div>
                </a>
            </td>
        </tr>
    <?php } ?> -->
</table>
<br>
<div class="tombol">
    <a href="<?php echo base_url('user/rekap'); ?>" class="btn btn-primary">Kembali</a>
</div>
<br>
<br>
<br>

</div>
<!-- End of Main Content -->