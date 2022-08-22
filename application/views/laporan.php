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
            width: 50%;
        }

        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>
    <title>Form F-1.1</title>
</head><body>
<table style="width: 100%;" class="dua table table-hover col-md-12 ml-5" border="1">
        <tr>
            <td rowspan="4"><img src="assets/img/logo/logo.png" style="position: absolute; width: 90px; height: 80px; margin-left: 40px; margin-top: 20px;"></td>
            <td rowspan="2"><strong><center><br>FORMULIR</center></strong></td>
            <td><strong>No</strong></td>
            <td><strong><center>F-1.1</center></strong></td>
        </tr>
        <tr>
        <td><strong>Berlaku</strong></td>
        <td><strong><center>10 Januari 2021</center></strong></td>
        </tr>
        <tr>
            <td rowspan="2"><strong><center>INDENTITAS PENGABDIAN</center></strong></td>
            <td><strong>Revisi</strong></td>
            <td><strong><center>-</center></strong></td>
        </tr>
        <tr>
            <td><strong>Unit</strong></td>
            <td><strong><center>LPPM</center></strong></td>
        </tr>
    </table>
    <br>Saya/Kami (Ketua dan Anggota Pengabdi) mengajukan :
    <table>
    <body>
        <?php
        foreach ($detail2 as $dtl) : ?>
        <?php endforeach; ?>
            <tr>
                <td> <strong>Judul Pengabdian</strong> </td>
                <td>: <?php echo $dtl->judul_pengabdian ?></td>
            </tr>
            <tr>
                <td><strong>SKIM Pengabdian</strong> </td>
                <td>: <?php echo $dtl->skim ?></td>
            </tr>
    </body>
    </table>
    <br>
    <p style="text-align:justify;">Dalam rangka pengajuan usulan proposal Pengabdian ini, saya/kami* yang bertanda-tangan dibawah ini menyatakan dengan sebenarnya bahwa : </p>
    <br>1. Isian data dibawah ini adalah benar
    <?php
    ($detail2)?> 
    <br style="text-align:justify;">2. Dalam hal Pengabdian dilaksanakan secara Tim, maka kami (Ketua dan Anggota pengabdian) bersepakat untuk bekerjasama dalam pelaksanaan pengabdian ini. Dan tidak ada unsur keterpaksaan peminjaman nama. <p/>
    <br>
    <br><?php echo $dtl->nama_ketua_pengabdi; ?> (Ketua Pengabdi, paraf)
    <br><?php echo  $dtl->nama_anggota_satu; ?> (Anggota Pengabdi I, paraf)
    <br><?php echo $dtl->nama_anggota_dua; ?> (Anggota Pengabdi II, paraf)
    <br><?php echo $dtl->nama_anggota_tiga; ?> (Anggota Pengabdi III, paraf)
    <?php ?>
    <br>
    <br>
    <table class="satu table table-hover col-md-12 ml-5">
    <thead>
                <tr>
                    <td scope="col"><strong>1</strong></td>
                    <td scope="col"><strong>Ketua Pengabdi</strong><</td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                 </tr>
    </thead>
    <tbody>
    <?php   
    foreach ($detail2 as $dtl) : ?><?php endforeach; ?>
                 <tr>
                 <td></td>
                    <td> <strong>Nama</strong></td>
                    <td>: <?php echo $dtl->nama_ketua_pengabdi ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>NIDN</strong></td>
                    <td>: <?php echo $dtl->nidn ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Jabatan Fungsional</strong></td>
                    <td>: <?php echo $dtl->jabatan_fungsional ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Email</strong></td>
                    <td>: <?php echo $dtl->email ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Program Studi</strong></td>
                    <td>: <?php echo $dtl->nama_prodi ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Pendidikan Tertinggi</strong></td>
                    <td>: <?php echo $dtl->pendidikan_tertinggi ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>No Hp</strong></td>
                    <td>: <?php echo $dtl->no_hp ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Bidang Ilmu</strong></td>
                    <td>: <?php echo $dtl->bidang_ilmu ?></td>
                    <td></td>
                </tr>
    </tbody>
    </table>
    <?php ?>
          <br>
          <br>
          <br>
    <table class="satu table table-hover col-md-12 ml-5">
    <thead>
                <tr>
                    <td scope="col">2</td>
                    <td scope="col"><strong>Anggota 1</strong><</td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                 </tr>
    </thead>
    <tbody>
    <?php   
    foreach ($detail2 as $dtl) : ?><?php endforeach; ?>
                <tr>
                <td></td>
                    <td> <strong>Nama</strong></td>
                    <td>: <?php echo $dtl->nama_anggota_satu ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>NIDN</strong></td>
                    <td>: <?php echo $dtl->nidn_satu ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Jabatan Fungsional</strong></td>
                    <td>: <?php echo $dtl->jabatan_fungsional_satu ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Email</strong></td>
                    <td>: <?php echo $dtl->email_satu ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Program Studi</strong></td>
                    <td>: <?php echo $dtl->nama_prodi ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Pendidikan Tertinggi</strong></td>
                    <td>: <?php echo $dtl->pendidikan_tertinggi_satu ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>No Hp</strong></td>
                    <td>: <?php echo $dtl->no_hp_satu ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Bidang Ilmu</strong></td>
                    <td>: <?php echo $dtl->bidang_ilmu_satu ?></td>
                    <td></td>
                </tr>
        </tbody>
    </table>
            <?php?>
    <br>
    <br>
    <br>
    <br>
    <table class="satu table table-hover col-md-12 ml-5">
    <thead>
                <tr>
                    <td scope="col"><strong>3</strong><</td>
                    <td scope="col"><strong>Anggota 2</strong><</td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                 </tr>
    </thead>
        <tbody>
        <?php   
    foreach ($detail2 as $dtl) : ?><?php endforeach; ?>
                <tr>
                <td></td>
                    <td> <strong>Nama</strong></td>
                    <td>: <?php echo $dtl->nama_anggota_dua ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>NIDN</strong></td>
                    <td>: <?php echo $dtl->nidn_dua ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Jabatan Fungsional</strong></td>
                    <td>: <?php echo $dtl->jabatan_fungsional_dua ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Email</strong></td>
                    <td>: <?php echo $dtl->email_dua ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Program Studi</strong></td>
                    <td>: <?php echo $dtl->nama_prodi ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Pendidikan Tertinggi</strong></td>
                    <td>: <?php echo $dtl->pendidikan_tertinggi_dua ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>No Hp</strong></td>
                    <td>: <?php echo $dtl->no_hp_dua ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Bidang Ilmu</strong></td>
                    <td>: <?php echo $dtl->bidang_ilmu_dua ?></td>
                    <td></td>
                </tr>
        </tbody>
    </table>
            <?php?>
    <br>
    <br>
    <br>
    <br>
    <table class="satu table table-hover col-md-12 ml-5">
    <thead>
                <tr>
                    <td scope="col"><strong>4</strong><</td>
                    <td scope="col"><strong>Anggota 3</strong></td>
                    <td scope="col"></td>
                    <td scope="col"></td>
                 </tr>
    </thead>
        <tbody>
        <?php   
    foreach ($detail2 as $dtl) : ?><?php endforeach; ?>
               
                <tr>
                <td></td>
                    <td> <strong>Nama</strong></td>
                    <td>: <?php echo $dtl->nama_anggota_tiga ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>NIDN</strong></td>
                    <td>: <?php echo $dtl->nidn_tiga ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Jabatan Fungsional</strong></td>
                    <td>: <?php echo $dtl->jabatan_fungsional_tiga ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Email</strong></td>
                    <td>: <?php echo $dtl->email_tiga ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Program Studi</strong></td>
                    <td>: <?php echo $dtl->nama_prodi ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Pendidikan Tertinggi</strong></td>
                    <td>: <?php echo $dtl->pendidikan_tertinggi_tiga ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>No Hp</strong></td>
                    <td>: <?php echo $dtl->no_hp_tiga ?></td>
                    <td></td>
                </tr>
                <tr>
                <td></td>
                    <td><strong>Bidang Ilmu</strong></td>
                    <td>: <?php echo $dtl->bidang_ilmu_tiga ?></td>
                    <td></td>
                </tr>
    </table>
            <?php?>
            <br>
            <br>
            <br>
            <p style="text-align:center;">Mengetahui dan Menyetujui:</p>  
            <br>
            <br>
            <table class="dua table table-hover col-lg-7" border="1" align="center" >
                <thead>
                <tr>
                    <th  scope="col" style="width: 150px;" ><strong>Kaprodi</strong></th>
                    <th scope="col" style="width: 150px;"  ><strong> Dekan  </strong></td>
                    <td scope="col" style="width: 150px;" align="center" ><strong>Ketua LPPM</strong></td>
                 </tr>
                 </thead>
        <tbody>
        <?php   
             foreach ($ttd as $ttd) : ?> <?php endforeach; ?>
               <tr>
               <td style="text-align: center;" >
               <br>
               <br>Tanda Tangan
               <br>
               <br>
               <br>
               </td>
               <td style="text-align: center;">
               <br>
               <br>Tanda Tangan
               <br>
               <br>
               <br>
               </td>
               <td style="text-align: center;">
               <br>
               <br>Tanda Tangan
               <br>
               <br>
               <br>
               </td>
               </tr>

               <tr>
                    <td style="text-align: center;" ><?= $ttd->nama_kaprodi; ?>
                    <br>
                    <br>
                    </td>
                    <td style="text-align: center;"><?= $ttd->nama_dosen; ?>
                    <br>
                    <br>
                    </td>
                    <td style="text-align: center;"><?= $ttd->lppm; ?>
                    <br>
                    <br>
                    </td>
               </tr>

               <tr>
               <td>Tgl</td>
               <td>Tgl</td>
               <td>Tgl</td>
               </tr>
               
        </tbody>
            </table>  
        
</body></html>