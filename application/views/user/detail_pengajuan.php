<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800">Detail Pengajuan</h5>

    <!-- /.container-fluid -->
    <div class="card shadow">
        <div class="card-header bg-success border-bottom-warning text-left">
            <h5 class="h3 mb-4 text-gray-100"></h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table table-striped col-lg-11 ml-5">

                <?php $no = 1; ?>
                <?php foreach ($detail_pengajuan as $detailP) : ?>
                    <tr>
                        <th>Nama Ketua Pengusul</th>
                        <td><?php echo $detailP->nama_ketua_pengabdi ?></td>
                    </tr>

                    <tr>

                        <th>NIDN</th>
                        <td><?php echo $detailP->nidn ?></td>
                    </tr>
                    <tr>

                        <th>Pendidikan Tertinggi (S1/S2/S3)</th>
                        <td><?php echo $detailP->pendidikan_tertinggi ?></td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td><?php echo $detailP->nama_prodi ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $detailP->email ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan Fungsional</th>
                        <td><?php echo $detailP->jabatan_fungsional ?></td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td><?php echo $detailP->no_hp ?></td>
                    </tr>
                    <tr>
                        <th>Bidang Ilmu</th>
                        <td><?php echo $detailP->bidang_ilmu ?></td>
                    </tr>

                    <tr>
                        <th>Anggota 1</th>
                        <td><?php echo $detailP->nama_anggota_satu ?></td>
                    </tr>
                    <tr>

                        <th>NIDN</th>
                        <td><?php echo $detailP->nidn_satu ?></td>
                    </tr>
                    <tr>

                        <th>Pendidikan Tertinggi (S1/S2/S3)</th>
                        <td><?php echo $detailP->pendidikan_tertinggi_satu ?></td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td><?php echo $detailP->nama_prodi ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $detailP->email_satu ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan Fungsional</th>
                        <td><?php echo $detailP->jabatan_fungsional_satu ?></td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td><?php echo $detailP->no_hp_satu ?></td>
                    </tr>
                    <tr>
                        <th>Bidang Ilmu</th>
                        <td><?php echo $detailP->bidang_ilmu_satu ?></td>
                    </tr>

                    <tr>
                        <th>Anggota 2</th>
                        <td><?php echo $detailP->nama_anggota_dua ?></td>
                    </tr>
                    <tr>

                        <th>NIDN</th>
                        <td><?php echo $detailP->nidn_dua ?></td>
                    </tr>
                    <tr>

                        <th>Pendidikan Tertinggi (S1/S2/S3)</th>
                        <td><?php echo $detailP->pendidikan_tertinggi_dua ?></td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td><?php echo $detailP->nama_prodi ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $detailP->email_dua ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan Fungsional</th>
                        <td><?php echo $detailP->jabatan_fungsional_dua ?></td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td><?php echo $detailP->no_hp_dua ?></td>
                    </tr>
                    <tr>
                        <th>Bidang Ilmu</th>
                        <td><?php echo $detailP->bidang_ilmu_dua ?></td>
                    </tr>

                    <tr>
                        <th>Anggota 3</th>
                        <td><?php echo $detailP->nama_anggota_tiga ?></td>
                    </tr>
                    <tr>

                        <th>NIDN</th>
                        <td><?php echo $detailP->nidn_tiga ?></td>
                    </tr>
                    <tr>

                        <th>Pendidikan Tertinggi (S1/S2/S3)</th>
                        <td><?php echo $detailP->pendidikan_tertinggi_tiga ?></td>
                    </tr>
                    <tr>
                        <th>Program Studi</th>
                        <td><?php echo $detailP->nama_prodi ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $detailP->email_tiga ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan Fungsional</th>
                        <td><?php echo $detailP->jabatan_fungsional_tiga ?></td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td><?php echo $detailP->no_hp_tiga ?></td>
                    </tr>
                    <tr>
                        <th>Bidang Ilmu</th>
                        <td><?php echo $detailP->bidang_ilmu_tiga ?></td>
                    </tr>

                    <!-- <p class="ml-5">FORM F-1.1</p> -->

                    <tr>
                        <th>1. Apakah proposal Pengabdian / makalah yang diajukan merupakan karya Saudara sendiri ?</th>
                        <td><?php echo $detailP->pertanyaan_satu ?></td>
                    </tr>
                    <tr>
                        <th>2. Apakah hasil Pengabdian tersebut akan Saudara Publikasikan ?</th>
                        <td><?php echo $detailP->pertanyaan_dua ?></td>
                    </tr>
                    <tr>
                        <th>3. Apabila jawaban Saudara di atas menyebutkan YA, hasil Pengabdian akan dipublikasikan dimana? (sebutkan Jurnal/Seminar nama publikasi lainnya)!</th>
                        <td><?php echo $detailP->pertanyaan_tiga ?></td>
                    </tr>
                    <tr>
                        <th>4. Apakah Pengabdian tersebut dilakukan secara tim ?</th>
                        <td><?php echo $detailP->pertanyaan_empat ?></td>
                    </tr>
                    <tr>
                        <th>5. Jika Pengabdian dilaksanakan oleh tim, apakah semua tim sudah bersedia ?</th>
                        <td><?php echo $detailP->pertanyaan_lima ?></td>
                    </tr>
                    <tr>
                        <th>6. Apakah Saudara bersedia mengikuti ketentuan yang ditetapkan oleh pemberi dana / hibah atas proposal Pengabdian / makalah yang diajukan ?</th>
                        <td><?php echo $detailP->pertanyaan_enam ?></td>
                    </tr>
                    <tr>
                        <th>7. Apakah Saudara bersedia mengikuti ketentuan yang ditetapkan oleh pemberi dana / hibah, maka apakah Saudara bersedia mengikuti ketentuan yang berlaku di Universitas Teknologi Yogyakarta ?</th>
                        <td><?php echo $detailP->pertanyaan_tujuh ?></td>
                    </tr>
                    <tr>
                        <th>8. Apakah Pengabdian tersebut bebas dari plagiarisme ?</th>
                        <td><?php echo $detailP->pertanyaan_delapan ?></td>
                    </tr>
                    <tr>
                        <th>9. Apakah proposal Pengabdian yang diajukan tersebut sudah pernah Saudara teliti ?</th>
                        <td><?php echo $detailP->pertanyaan_sembilan ?></td>
                    </tr>
                    <tr>
                        <th>10. Apakah Pengabdian tersebut Saudara lakukan secara mandiri(bukan tim) ?</th>
                        <td><?php echo $detailP->pertanyaan_sepuluh ?></td>
                    </tr>
                    <tr>
                        <th> 11. Apakah proposal Pengabdian / makalah yang Saudara ajukan adalah karya teman sejawat atau orang lain </th>
                        <td><?php echo $detailP->pertanyaan_sebelas ?></td>
                    </tr>
                    <tr>
                        <th>12. Apakah proposal Pengabdian / makalah yang Saudara ajukan sudah pernah didanai oleh instansi atau pihak lain ?</th>
                        <td><?php echo $detailP->pertanyaan_duabelas ?></td>
                    </tr>
                    <tr>
                        <th>13. Apakah proposal Pengabdian / makalah yang Saudara ajukan adalah karya/skripsi/thesis mahasiswa bimbingan Saudara ?</th>
                        <td><?php echo $detailP->pertanyaan_tigabelas ?></td>
                    </tr>
                    <tr>
                        <th>14. Apakah proposal Pengabdian / makalah yang Saudara ajukan adalah karya/skripsi/thesis mahasiswa bukan bimbingan Saudara ?</th>
                        <td><?php echo $detailP->pertanyaan_empatbelas ?></td>
                    </tr>
                    <tr>
                        <th>15. Apakah proposal Pengabdian sudah pernah diajukan ke instansi / pihak lain tetapi tidak disetujui ?</th>
                        <td><?php echo $detailP->pertanyaan_limabelas ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<div class="modal-footer">
    <table align="right">
        <tr>
            <td>
                <a href="<?php echo base_url('user/rekap'); ?>" class="btn btn-outline-success btn-sm">Kembali</a>
            </td>
        </tr>
    </table>
</div>
<br>
<br>
<br>
<br>

</div>
<!-- End of Main Content -->