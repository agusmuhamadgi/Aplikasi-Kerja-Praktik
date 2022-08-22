<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-4 text-gray-800">Identitas</h5>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>PERHATIAN!!</strong> Harap isi dengan benar.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <br>

    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>
    <h1> Form F-1.1 & F-1.2</h1>
    <div class="col-lg">

        <!-- formulir f-1.1 -->
        <!-- <?= form_open_multipart('user/identitas'); ?> -->
        <form action="Form_pengajuan" method="post" enctype="multipart/form-data" id="regForm">

            <div class="tab">
                <p>*Ketua Pengabdian</p>
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
                // if (y[i].value == "") {
                //     // add an "invalid" class to the field:
                //     y[i].className += " invalid";
                //     // and set the current valid status to false
                //     valid = false;
                // }
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }
            // If the valid status is true, mark the step as finished and valid:
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->