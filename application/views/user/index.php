<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>

    <div class="container">
        <img class="img-fluid img-thumbnail float-left" src="<?php echo base_url('assets/img/prosedur/proses.jpg') ?>" widht="500">
    </div>
    <br>
    <div class="form-group">

        <p class="font-weight-bold"> Alur Proses Pengajuan Pengabdian Masyarakat</p>
        <p>Berikut ini adalah alur proses pengajuan pengabdian masyarakat :</p>

        <label for="prosedur1" class="col-sm-12 col-form-label">
            1. LPPM memberikan dan meneruskan informasi pengumuman usulan proposal melalui grup whatsapp LPPM untuk diteruskan ke dosen-dosen.
        </label>
        <label for="prosedur2" class="col-sm-12 col-form-label">
            2. Dosen yang akan mengajukan proposal, baik Ketua Pengabdi maupun anggota anggota Pengabdi harus memiliki NIDN.
        </label>
        <label for="prosedur3" class="col-sm-12 col-form-label">
            3. Dosen-dosen yang mengajukan usulan proposal wajib melengkapi dan menyerahkan:
            <br>
            <div class="form-group ml-3">
                a. Dua usulan proposal (tanpa dijilid) untuk di review oleh tim Reviewer Internal (Kaprodi dan Dekan).
                <br>
                b. Formulir F-1 yang berisi identitas Pengabdi dan pernyataan kerjasama antar Pengabdi, yang harus diketahui dan disetujui oleh
                Kaprodi, Dekan,serta ketua LPPM (dengan melampirkan proposal pengabdian).
                <br>
                c. Formulir F-2 yang berisi pernyataan bebas plagiat (bermaterai) yang telah diseujui oleh Ketua Program Studi dan Dekan sebagai control:
                <br>
                <div class="form-group ml-3">
                    - Plagiarisme.
                    <br>
                    - pemalsuan tanda tangan.
                </div>
            </div>
        </label>
        <label for="prosedur4" class="col-sm-12 col-form-label">
            4. Formulir F-1 dan F-2 yang sudah lengkap beserta Proposal tersebut diserahkan oleh dosen pengabdi kepada LPPM.
        </label>
        <label for="prosedur5" class="col-sm-12 col-form-label">
            5. LPPM menyerahkan proposal tersebut secara kolektif ke Tim Reviewer Internal.
        </label>
        <label for="prosedur6" class="col-sm-12 col-form-label">
            6. Hasil Review dari Tim Reviewer Internal dikembali ke LPPM untuk diserahkan kepada Dosen Pengabdi untuk ditindak lanjuti rekomendasinya.
        </label>
        <label for="prosedur7" class="col-sm-12 col-form-label">
            7. Hasil revisi proposal dan kelengkapan dokumen diserahkan oleh Dosen Pengabdi kepada Ketua LPPM, untuk dicek kelengkapan administrasinya.
        </label>
        <label for="prosedur8" class="col-sm-12 col-form-label">
            8. Pada saat Ketua Pengabdi melengkapi data administratif pada link SIMLITABMAS, akan ada intruksi untuk ‘cetak lembar pengesahan’,
            selanjutnya Ketua Pengabdi perlu mencetak dan mengajukan permohonan tanda tangan pada lembar pengesahan tersebut kepada Dekan dan Ketua LPPM.
        </label>
        <label for="prosedur9" class="col-sm-12 col-form-label">
            9. Ketua Pengabdi wajib mengumpulkan 3 eksemplar hardcopy proposal dengan tanda tangan asli semuanya, baik dari tanda tangan Ketua pengabdi, anggota-anggota pengabdi, Dekan dan Ketua LPPM serta mengumpulkan 1 keping CD softcopy ke LPPM.
        </label>
        <label for="prosedur10" class="col-sm-12 col-form-label">
            10. Proses pengajuan proposal pengabdian selesai
        </label>
        <br>
        <p>
            Silahkan mendowload file berikut sebagai acuan dalam pengajuan proposal pengabdian :
        </p>
        <a href="<?php echo base_url('user/lakukan_download'); ?>">

            Download File <i class="fa fa-download"></i>
        </a </div>
    </div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->