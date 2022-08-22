<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table.satu {
            border: 1px solid black;
            width: 100%;
        }
        table.dua {
            border-collapse: collapse;
            width: 100%;
        }

        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>
    <title>Form F-1.2</title>
</head><body>
<table style="width: 100%;" class="dua table table-hover col-md-12 ml-5" border="1">
        <tr>
            <td rowspan="4"><img src="assets/img/logo/logo.png" style="position: absolute; width: 90px; height: 80px; margin-left: 40px; margin-top: 20px;"></td>
            <td rowspan="2"><strong><center><br>FORMULIR</center></strong></td>
            <td><strong>No</strong></td>
            <td><strong><center>F-1.2</center></strong></td>
        </tr>
        <tr>
        <td><strong>Berlaku</strong></td>
        <td><strong><center>10 Januari 2021</center></strong></td>
        </tr>
        <tr>
            <td rowspan="2"><strong><center>PENGAJUAN PROPOSAL PENGABDIAN</center></strong></td>
            <td><strong>Revisi</strong></td>
            <td><strong><center>-</center></strong></td>
        </tr>
        <tr>
            <td><strong>Unit</strong></td>
            <td><strong><center>LPPM</center></strong></td>
        </tr>
    </table>
    <p></p>
    <table class="dua table table-hover col-md-12 ml-5" border="1">
    <thead>
                <tr>
                    <th scope="col">a.</th>
                    <th scope="col">Data Dosen (Ketua Pengusul)</th>
                    <th scope="col"></th>
                 </tr>
    </thead>
    <body>
        
        <?php
        foreach ($detail3 as $dtl) : ?> <?php endforeach; ?>
                <tr>
                    <td></td>
                    <td> <strong>- Nama</strong></td>
                    <td> <?php echo $dtl->nama_ketua_pengabdi ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><strong>- Email</strong></td>
                    <td> <?php echo $dtl->email ?></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>- NIDN</strong></td>
                    <td> <?php echo $dtl->nidn ?></td>
                </tr>
                <tr>
                     <td></td>
                    <td><strong>- Jabatan Fungsional</strong></td>
                    <td> <?php echo $dtl->jabatan_fungsional ?></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>- Bidang Keahlian</strong></td>
                    <td> <?php echo $dtl->bidang_ilmu ?></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>- Jurusan/Fakultas</strong></td>
                    <td> <?php echo $dtl->nama_prodi ?></td>
                </tr>
            <tr>
                <td><strong>b.</strong></td>
                <td> <strong>Judul Pengabdian</strong> </td>
                <td> <?php echo $dtl->judul_pengabdian ?></td>
            </tr>
            <tr>
                <td><strong>c.</strong></td>
                <td><strong>SKIM Pengabdian</strong> </td>
                <td> <?php echo $dtl->skim ?></td>
            </tr>
            <tr>
                <td><strong>d.</strong></td>
                <td><strong>Dana Dari:</strong> </td>
                <td> <?php echo $dtl->dana ?></td>
            </tr>
            <tr>
                <td><strong>e.</strong></td>
                <td><strong>Jumlah Dana:</strong> </td>
                <td> Rp <?= number_format($dtl->jumlah, 0, ',', '.'); ?></td>
        </tr>
    </body>
    </table>
    <br>
    <br>Dosen (Ketua Pengusul) menjawab pertanyaan-pertanyaan dibawah ini :
    <table class="dua table table-hover col-md-12 ml-5" border="1">
    <thead>
                <tr>
                    <th scope="col">Butir Pertanyaan</th>
                    <th scope="col">Jawaban</th>
                    <th scope="col">Paraf</th>
                 </tr>
    </thead>
    <body>
        
    
        <?php
        foreach ($detail3 as $dtl) : ?><?php endforeach; ?>
        <tr>
                    <td> Apakah proposal Pengabdian / makalah yang diajukan merupakan karya Saudara sendiri?</td>
                    <td> <?= $dtl->pertanyaan_satu ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Apakah hasil Pengabdian tersebut akan Saudara Publikasikan?</td>
                    <td> <?= $dtl->pertanyaan_dua ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Apabila jawaban Saudara di atas menyebutkan YA, hasil Pengabdian akan dipublikasikan dimana? (sebutkan Jurnal/Seminar nama publikasi lainnya)!</td>
                    <td> <?= $dtl->pertanyaan_tiga ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Apakah Pengabdian tersebut dilakukan secara tim?</td>
                    <td> <?= $dtl->pertanyaan_empat ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jika Pengabdian dilaksanakan oleh tim, apakah semua tim sudah bersedia?</td>
                    <td> <?= $dtl->pertanyaan_lima ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Apakah Saudara bersedia mengikuti ketentuan yang ditetapkan oleh pemberi dana / hibah atas proposal Pengabdian / makalah yang diajukan?</td>
                    <td> <?= $dtl->pertanyaan_enam ?></td>
                    <td></td>
                </tr>
            <tr>
                <td>Apakah Saudara bersedia mengikuti ketentuan yang ditetapkan oleh pemberi dana / hibah, maka apakah Saudara bersedia mengikuti ketentuan yang berlaku di Universitas Teknologi Yogyakarta?</td>
                
                <td> <?= $dtl->pertanyaan_tujuh ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Apakah Pengabdian tersebut bebas dari plagiarisme?</td>
                <td> <?= $dtl->pertanyaan_delapan ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Apakah proposal Pengabdian yang diajukan tersebut sudah pernah Saudara teliti?</td>
                <td> <?= $dtl->pertanyaan_sembilan ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Apakah Pengabdian tersebut Saudara lakukan secara mandiri(bukan tim)?</td>
                <td> <?= $dtl->pertanyaan_sepuluh  ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Apakah proposal Pengabdian / makalah yang Saudara ajukan adalah karya teman sejawat atau orang lain?</td>
                <td> <?= $dtl->pertanyaan_sebelas  ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Apakah proposal Pengabdian / makalah yang Saudara ajukan sudah pernah didanai oleh instansi atau pihak lain?</td>
                <td> <?= $dtl->pertanyaan_duabelas  ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Apakah proposal Pengabdian / makalah yang Saudara ajukan adalah karya/skripsi/thesis mahasiswa bimbingan Saudara?</td>
                <td> <?= $dtl->pertanyaan_tigabelas  ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Apakah proposal Pengabdian / makalah yang Saudara ajukan adalah karya/skripsi/thesis mahasiswa bukan bimbingan Saudara?</td>
                <td> <?= $dtl->pertanyaan_empatbelas  ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Apakah proposal Pengabdian sudah pernah diajukan ke instansi / pihak lain tetapi tidak disetujui?</td>
                <td> <?= $dtl->pertanyaan_limabelas  ?></td>
                <td></td>
            </tr>
        </body>

    </table>
    <p style="text-align:justify;">Bersama ini saya menyatakan bahwa informasi yang saya sampaikan diatas sesuai dengan fakta yang sebenarnya, dan apabila ada informasi
    yang tidak sesuai maka saya akan bertanggung-jawab dan bersedia menerima sanksi dengan ketentuan yang berlaku.</p>
    <br>
    <br>
    <!-- <p style="text-align:center;">Yogyakarta, <?php echo date('d F Y'); ?> </p>
    <p style="text-align:center;">Ketua Pengabdi,</p>
<br>
<br>
<p style="text-align:center;">Materai 6000</p>
<br>
<br>
<p style="text-align:center;"> <?php echo $dtl->nama_ketua_pengabdi; ?></p>
<p style="text-align:center;">NIK:<?php echo $dtl->nidn; ?></p> -->

<!-- <table class="satu table table-hover col-md-12 ml-5">
    <thead>
                <tr>
                    <td scope="col"></td>
                    <td scope="col">Mengetahui:</td>
                    <td scope="col"></td>
                 </tr>
    </thead>
    <tbody>
    <?php   
    foreach ($ttd as $ttd) : ?>
    <tr>
    <td>Ketua Program Studi <?php echo $ttd->nama_prodi; ?></td>
    <td></td>
    <td>Dekan </td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td></td>
    </tr>

    <tr>
    <td>NIK </td>
    <td></td>
    <td></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table> -->
</body></html>