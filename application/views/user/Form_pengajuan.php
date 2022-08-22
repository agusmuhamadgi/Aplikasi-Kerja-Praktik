<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800">Form Pengajuan</h5>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>PERHATIAN!!</strong> Harap isi dengan benar.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-success border-bottom-warning text-left">
            <h5 class="h3 mb-4 text-gray-100"></h5>
        </div>

        <div class="col-lg">

            <!-- formulir f-1.1 -->
            <!-- <?= form_open_multipart('user/Form_pengajuan'); ?> -->
            <form action="Form_pengajuan" method="post" enctype="multipart/form-data" id="regForm">

                <div class="tab">
                    <p>*Ketua Pengabdian</p>
                    <div class="form-group row">
                        <label for="judul_pengabdian" class="col-sm-3 col-form-label">Judul Pengabdian</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="judul_pengabdian" name="judul_pengabdian" value="<?= set_value('judul_pengabdian'); ?>">
                            <?= form_error('judul_pengabdian', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="skim_pengabdian" class="col-sm-3 col-form-label">SKIM Pengabdian</label>
                        <div class="col-sm-6">
                            <select name="skim_pengabdian" class="form-control" id="skim_pengabdian">
                                <option selected disabled value="">SKIM</option>
                                <?php foreach ($skim as $skm) : ?>
                                    <option value="<?= $skm['id'] ?>"><?= $skm['skim'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!-- <input type="text" class="form-control" id="skim_pengabdian" name="skim_pengabdian" value="<?= set_value('skim_pengabdian'); ?>"> -->
                            <?= form_error('skim_pengabdian', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dana" class="col-sm-3 col-form-label">Dana Dari</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="dana" name="dana" value="<?= set_value('dana'); ?>">
                            <?= form_error('dana', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Dana</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= set_value('jumlah'); ?>">
                            <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ketua_pengabdi" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_ketua_pengabdi" name="nama_ketua_pengabdi" value="<?= set_value('nama_ketua_pengabdi'); ?>">
                            <?= form_error('nama_ketua_pengabdi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="program_studi" class="col-sm-3 col-form-label">Program Studi</label>
                        <div class="col-sm-6">
                            <select name="program_studi" class="form-control" id="program_studi">
                                <option selected disabled value="">---Pilih Prodi---</option>
                                <?php foreach ($prodi as $prd) : ?>
                                    <option value="<?= $prd['id'] ?>"><?= $prd['nama_prodi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('program_studi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nidn" class="col-sm-3 col-form-label">NIDN</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nidn" name="nidn" value="<?= set_value('nidn'); ?>">
                            <?= form_error('nidn', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pendidikan_tertinggi" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="pendidikan_tertinggi" name="pendidikan_tertinggi" value="<?= set_value('pendidikan_tertinggi'); ?>">
                            <?= form_error('pendidikan_tertinggi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="jabatan_fungsional" class="col-sm-3 col-form-label">Jabatan Fungsional</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="jabatan_fungsional" name="jabatan_fungsional" value="<?= set_value('jabatan_fungsional'); ?>">
                            <?= form_error('jabatan_fungsional', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="no_hp" class="col-sm-3 col-form-label">No HP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= set_value('no_hp'); ?>">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="bidang_ilmu" class="col-sm-3 col-form-label">Bidang Ilmu</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="bidang_ilmu" name="bidang_ilmu" value="<?= set_value('bidang_ilmu'); ?>">
                            <?= form_error('bidang_ilmu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label for="proposal" class="col-sm-3 col-form-label">Proposal pengabdian</label>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="proposal" name="proposal">
                                <label class="custom-file-label" for="proposal">Choose file</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab">

                    <p>*Anggota Pengabdi 1</p>
                    <div class="form-group row">
                        <label for="nama_anggota_satu" class="col-sm-3 col-form-label">Nama </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_anggota_satu" name="nama_anggota_satu" value="<?= set_value('nama_anggota_satu'); ?>">
                            <?= form_error('nama_anggota_satu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="program_studi_satu" class="col-sm-3 col-form-label">Program Studi</label>
                        <div class="col-sm-6">
                            <select name="program_studi_satu" class="form-control" id="program_studi_satu">
                                <option selected disabled value="">---Pilih Prodi---</option>
                                <?php foreach ($prodi as $prd) : ?>
                                    <option value="<?= $prd['id'] ?>"><?= $prd['nama_prodi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('program_studi_satu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nidn_satu" class="col-sm-3 col-form-label">NIDN</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nidn_satu" name="nidn_satu" value="<?= set_value('nidn_satu'); ?>">
                            <?= form_error('nidn_satu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pendidikan_tertinggi_satu" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="pendidikan_tertinggi_satu" name="pendidikan_tertinggi_satu" value="<?= set_value('pendidikan_tertinggi_satu'); ?>">
                            <?= form_error('pendidikan_tertinggi_satu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="email_satu" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email_satu" name="email_satu" value="<?= set_value('email_satu'); ?>">
                            <?= form_error('email_satu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="jabatan_fungsional_satu" class="col-sm-3 col-form-label">Jabatan Fungsional</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="jabatan_fungsional_satu" name="jabatan_fungsional_satu" value="<?= set_value('jabatan_fungsional_satu'); ?>">
                            <?= form_error('jabatan_fungsional_satu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="no_hp_satu" class="col-sm-3 col-form-label">No HP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="no_hp_satu" name="no_hp_satu" value="<?= set_value('no_hp_satu'); ?>">
                            <?= form_error('no_hp_satu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="bidang_ilmu_satu" class="col-sm-3 col-form-label">Bidang Ilmu</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="bidang_ilmu_satu" name="bidang_ilmu_satu" value="<?= set_value('bidang_ilmu_satu'); ?>">
                            <?= form_error('bidang_ilmu_satu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                </div>
                <div class="tab">

                    <p>*Anggota Pengabdi 2</p>
                    <div class="form-group row">
                        <label for="nama_anggota_dua" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_anggota_dua" name="nama_anggota_dua" value="<?= set_value('nama_anggota_dua'); ?>">
                            <?= form_error('nama_anggota_dua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="program_studi_dua" class="col-sm-3 col-form-label">Program Studi</label>
                        <div class="col-sm-6">
                            <select name="program_studi_dua" class="form-control" id="program_studi_dua">
                                <option selected disabled value="">---Pilih Prodi---</option>
                                <?php foreach ($prodi as $prd) : ?>
                                    <option value="<?= $prd['id'] ?>"><?= $prd['nama_prodi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('program_studi_dua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nidn_dua" class="col-sm-3 col-form-label">NIDN</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nidn_dua" name="nidn_dua" value="<?= set_value('nidn_dua'); ?>">
                            <?= form_error('nidn_dua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pendidikan_tertinggi_dua" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="pendidikan_tertinggi_dua" name="pendidikan_tertinggi_dua" value="<?= set_value('pendidikan_tertinggi_dua'); ?>">
                            <?= form_error('pendidikan_tertinggi_dua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="email_dua" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email_dua" name="email_dua" value="<?= set_value('email_dua'); ?>">
                            <?= form_error('email_dua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="jabatan_fungsional_dua" class="col-sm-3 col-form-label">Jabatan Fungsional</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="jabatan_fungsional_dua" name="jabatan_fungsional_dua" value="<?= set_value('jabatan_fungsional_dua'); ?>">
                            <?= form_error('jabatan_fungsional_dua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="no_hp_dua" class="col-sm-3 col-form-label">No HP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="no_hp_dua" name="no_hp_dua" value="<?= set_value('no_hp_dua'); ?>">
                            <?= form_error('no_hp_dua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="bidang_ilmu_dua" class="col-sm-3 col-form-label">Bidang Ilmu</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="bidang_ilmu_dua" name="bidang_ilmu_dua" value="<?= set_value('bidang_ilmu_dua'); ?>">
                            <?= form_error('bidang_ilmu_dua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                </div>
                <div class="tab">

                    <p>*Anggota Pengabdi 3</p>
                    <div class="form-group row">
                        <label for="nama_anggota_tiga" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_anggota_tiga" name="nama_anggota_tiga" value="<?= set_value('nama_anggota_tiga'); ?>">
                            <?= form_error('nama_anggota_tiga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="program_studi_tiga" class="col-sm-3 col-form-label">Program Studi</label>
                        <div class="col-sm-6">
                            <select name="program_studi_tiga" class="form-control" id="program_studi_tiga">
                                <option selected disabled value="">---Pilih Prodi---</option>
                                <?php foreach ($prodi as $prd) : ?>
                                    <option value="<?= $prd['id'] ?>"><?= $prd['nama_prodi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('program_studi_tiga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nidn_tiga" class="col-sm-3 col-form-label">NIDN</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nidn_tiga" name="nidn_tiga" value="<?= set_value('nidn_tiga'); ?>">
                            <?= form_error('nidn_tiga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pendidikan_tertinggi_tiga" class="col-sm-3 col-form-label">Pendidikan Tertinggi</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="pendidikan_tertinggi_tiga" name="pendidikan_tertinggi_tiga" value="<?= set_value('pendidikan_tertinggi_tiga'); ?>">
                            <?= form_error('pendidikan_tertinggi_tiga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="email_tiga" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email_tiga" name="email_tiga" value="<?= set_value('email_tiga'); ?>">
                            <?= form_error('email_tiga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="jabatan_fungsional_tiga" class="col-sm-3 col-form-label">Jabatan Fungsional</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="jabatan_fungsional_tiga" name="jabatan_fungsional_tiga" value="<?= set_value('jabatan_fungsional_tiga'); ?>">
                            <?= form_error('jabatan_fungsional_tiga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="no_hp_tiga" class="col-sm-3 col-form-label">No HP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="no_hp_tiga" name="no_hp_tiga" value="<?= set_value('no_hp_tiga'); ?>">
                            <?= form_error('no_hp_tiga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="bidang_ilmu_tiga" class="col-sm-3 col-form-label">Bidang Ilmu</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="bidang_ilmu_tiga" name="bidang_ilmu_tiga" value="<?= set_value('bidang_ilmu_tiga'); ?>">
                            <?= form_error('bidang_ilmu_tiga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                </div>

                <!-- formulir f-1.2 -->
                <div class="tab">

                    <div class="form-group row">
                        <label for="pertanyaan_satu" class="col-sm-10 col-form-label">
                            1. Apakah proposal Pengabdian / makalah yang diajukan merupakan karya Saudara sendiri?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_satu" class="form-control" id="pertanyaan_satu">
                                <option selected disabled value="">Jawab</option>

                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>

                            </select>
                            <?= form_error('pertanyaan_satu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_dua" class="col-sm-10 col-form-label">
                            2. Apakah hasil Pengabdian tersebut akan Saudara Publikasikan?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_dua" class="form-control" id="pertanyaan_dua">
                                <option selected disabled value="">Jawab</option>

                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>

                            </select>
                            <?= form_error('pertanyaan_dua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_tiga" class="col-sm-10 col-form-label">
                            3. Apabila jawaban Saudara di atas menyebutkan YA, hasil Pengabdian akan dipublikasikan dimana? (sebutkan Jurnal/Seminar nama publikasi lainnya)!
                        </label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="pertanyaan_tiga" name="pertanyaan_tiga" value="<?= set_value('pertanyaan_tiga'); ?>">
                            <?= form_error('pertanyaan_tiga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_empat" class="col-sm-10 col-form-label">
                            4. Apakah Pengabdian tersebut dilakukan secara tim?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_empat" class="form-control" id="pertanyaan_empat">
                                <option selected disabled value="">Jawab</option>

                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>

                            </select>
                            <?= form_error('pertanyaan_empat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_lima" class="col-sm-10 col-form-label">
                            5. Jika Pengabdian dilaksanakan oleh tim, apakah semua tim sudah bersedia?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_lima" class="form-control" id="pertanyaan_lima">
                                <option selected disabled value="">Jawab</option>

                                <option value="sudah">Sudah</option>
                                <option value="belum">Belum</option>

                            </select>
                            <?= form_error('pertanyaan_lima', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_enam" class="col-sm-10 col-form-label">
                            6. Apakah Saudara bersedia mengikuti ketentuan yang ditetapkan oleh pemberi dana / hibah atas proposal Pengabdian / makalah yang diajukan?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_enam" class="form-control" id="pertanyaan_enam">
                                <option selected disabled value="">Jawab</option>

                                <option value="bersedia">Bersedia</option>
                                <option value="tidak_bersedia">Tidak Bersedia</option>
                            </select>
                            <?= form_error('pertanyaan_enam', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_tujuh" class="col-sm-10 col-form-label">
                            7. Apakah Saudara bersedia mengikuti ketentuan yang ditetapkan oleh pemberi dana / hibah, maka apakah Saudara bersedia mengikuti ketentuan yang berlaku di Universitas Teknologi Yogyakarta?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_tujuh" class="form-control" id="pertanyaan_tujuh">
                                <option selected disabled value="">Jawab</option>

                                <option value="bersedia">Bersedia</option>
                                <option value="tidak_bersedia">Tidak Bersedia</option>

                            </select>
                            <?= form_error('pertanyaan_tujuh', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                </div>
                <div class="tab">

                    <div class="form-group row">
                        <label for="pertanyaan_delapan" class="col-sm-10 col-form-label">
                            8. Apakah Pengabdian tersebut bebas dari plagiarisme?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_delapan" class="form-control" id="pertanyaan_delapan">
                                <option selected disabled value="">Jawab</option>

                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>

                            </select>
                            <?= form_error('pertanyaan_delapan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_sembilan" class="col-sm-10 col-form-label">
                            9. Apakah proposal Pengabdian yang diajukan tersebut sudah pernah Saudara teliti?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_sembilan" class="form-control" id="pertanyaan_sembilan">
                                <option selected disabled value="">Jawab</option>

                                <option value="sudah">Sudah</option>
                                <option value="belum">Belum</option>

                            </select>
                            <?= form_error('pertanyaan_sembilan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_sepuluh" class="col-sm-10 col-form-label">
                            10. Apakah Pengabdian tersebut Saudara lakukan secara mandiri(bukan tim)?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_sepuluh" class="form-control" id="pertanyaan_sepuluh">
                                <option selected disabled value="">Jawab</option>

                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>

                            </select>
                            <?= form_error('pertanyaan_sepuluh', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_sebelas" class="col-sm-10 col-form-label">
                            11. Apakah proposal Pengabdian / makalah yang Saudara ajukan adalah karya teman sejawat atau orang lain?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_sebelas" class="form-control" id="pertanyaan_sebelas">
                                <option selected disabled value="">Jawab</option>

                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>

                            </select>
                            <?= form_error('pertanyaan_sebelas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_duabelas" class="col-sm-10 col-form-label">
                            12. Apakah proposal Pengabdian / makalah yang Saudara ajukan sudah pernah didanai oleh instansi atau pihak lain?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_duabelas" class="form-control" id="pertanyaan_duabelas">
                                <option selected disabled value="">Jawab</option>

                                <option value="sudah">Sudah</option>
                                <option value="belum">Belum</option>

                            </select>
                            <?= form_error('pertanyaan_duabelas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_tigabelas" class="col-sm-10 col-form-label">
                            13. Apakah proposal Pengabdian / makalah yang Saudara ajukan adalah karya/skripsi/thesis mahasiswa bimbingan Saudara?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_tigabelas" class="form-control" id="pertanyaan_tigabelas">
                                <option selected disabled value="">Jawab</option>

                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>

                            </select>
                            <?= form_error('pertanyaan_tigabelas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_empatbelas" class="col-sm-10 col-form-label">
                            14. Apakah proposal Pengabdian / makalah yang Saudara ajukan adalah karya/skripsi/thesis mahasiswa bukan bimbingan Saudara?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_empatbelas" class="form-control" id="pertanyaan_empatbelas">
                                <option selected disabled value="">Jawab</option>

                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>

                            </select>
                            <?= form_error('pertanyaan_empatbelas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pertanyaan_limabelas" class="col-sm-10 col-form-label">
                            15. Apakah proposal Pengabdian sudah pernah diajukan ke instansi / pihak lain tetapi tidak disetujui?
                        </label>
                        <div class="col-sm-2">
                            <select name="pertanyaan_limabelas" class="form-control" id="pertanyaan_limabelas">
                                <option selected disabled value="">Jawab</option>

                                <option value="sudah">Sudah</option>
                                <option value="belum">Belum</option>
                            </select>
                            <?= form_error('pertanyaan_limabelas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                </div>


                <div style="overflow:auto;">
                    <div style="float:center;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>

                </div>
            </form>
        </div>

        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
                //... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").innerHTML = "Submit";
                } else {
                    document.getElementById("nextBtn").innerHTML = "Next";
                }
                //... and run a function that will display the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName("tab");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
                // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false
                        valid = false;
                    }
                }

                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
                //... and adds the "active" class on the current step:
                x[n].className += " active";
            }
        </script>
        <!-- <br>
    <p>*kosongkan jika tidak ada</p> -->

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->