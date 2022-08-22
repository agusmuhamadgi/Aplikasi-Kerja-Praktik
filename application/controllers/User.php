<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Informasi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function panduan()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Panduan Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['panduan'] = $this->db->get('tb_panduan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/panduan_proposal', $data);
        $this->load->view('templates/footer');
    }

    public function lakukan_download($id)
    {
        $data = $this->db->where('id', $id)->get('tb_koreksian')->row_array();

        force_download(FCPATH . 'assets/panduan/' . $data['nama_file'], null);
        redirect('user/rekap' . $id);
    }

    public function identitas()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Identitas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('File_model');

        //     // Ketua Pengabdi
        //     $this->form_validation->set_rules('nama_ketua_pengabdi', 'Nama_ketua_pengabdi', 'required');
        //     $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        //     $this->form_validation->set_rules('nidn', 'Nidn', 'required');
        //     $this->form_validation->set_rules('pendidikan_tertinggi', 'Pendidikan_tertinggi', 'required');
        //     $this->form_validation->set_rules('email', 'Email', 'required');
        //     $this->form_validation->set_rules('jabatan_fungsional', 'Jabatan_fungsional', 'required');
        //     $this->form_validation->set_rules('no_hp', 'No_hp', 'required');
        //     $this->form_validation->set_rules('bidang_ilmu', 'Bidang_ilmu', 'required');

        //     // Anggota 1
        //     $this->form_validation->set_rules('nama_anggota_satu', 'Nama_anggota_satu');
        //     $this->form_validation->set_rules('program_studi_satu', 'Program_studi_satu');
        //     $this->form_validation->set_rules('nidn_satu', 'Nidn_satu');
        //     $this->form_validation->set_rules('pendidikan_tertinggi_satu', 'Pendidikan_tertinggi_satu');
        //     $this->form_validation->set_rules('email_satu', 'Email_satu');
        //     $this->form_validation->set_rules('jabatan_fungsional_satu', 'Jabatan_fungsional_satu');
        //     $this->form_validation->set_rules('no_hp_satu', 'No_hp_satu');
        //     $this->form_validation->set_rules('bidang_ilmu_satu', 'Bidang_ilmu_satu');

        //     // Anggota 2
        //     $this->form_validation->set_rules('nama_anggota_dua', 'Nama_anggota_dua');
        //     $this->form_validation->set_rules('program_studi_dua', 'Program_studi_dua');
        //     $this->form_validation->set_rules('nidn_dua', 'Nidn_dua');
        //     $this->form_validation->set_rules('pendidikan_tertinggi_dua', 'Pendidikan_tertinggi_dua');
        //     $this->form_validation->set_rules('email_dua', 'Email_dua');
        //     $this->form_validation->set_rules('jabatan_fungsional_dua', 'Jabatan_fungsional_dua');
        //     $this->form_validation->set_rules('no_hp_dua', 'No_hp_dua');
        //     $this->form_validation->set_rules('bidang_ilmu_dua', 'Bidang_ilmu_dua');

        //     // Anggota 3
        //     $this->form_validation->set_rules('nama_anggota_tiga', 'Nama_anggota_tiga ');
        //     $this->form_validation->set_rules('program_studi_tiga', 'Program_studi_tiga');
        //     $this->form_validation->set_rules('nidn_tiga', 'Nidn_tiga');
        //     $this->form_validation->set_rules('pendidikan_tertinggi_tiga', 'Pendidikan_tertinggi_tiga');
        //     $this->form_validation->set_rules('email_tiga', 'Email_tiga');
        //     $this->form_validation->set_rules('jabatan_fungsional_tiga', 'Jabatan_fungsional_tiga');
        //     $this->form_validation->set_rules('no_hp_tiga', 'No_hp_tiga');
        //     $this->form_validation->set_rules('bidang_ilmu_tiga', 'Bidang_ilmu_tiga');

        //     // pertanyaan
        //     $this->form_validation->set_rules('pertanyaan_satu', 'Pertanyaan_satu', 'required');
        //     $this->form_validation->set_rules('pertanyaan_dua', 'Pertanyaan_dua', 'required');
        //     $this->form_validation->set_rules('pertanyaan_tiga', 'Pertanyaan_tiga', 'required');
        //     $this->form_validation->set_rules('pertanyaan_empat', 'Pertanyaan_empat', 'required');
        //     $this->form_validation->set_rules('pertanyaan_lima', 'Pertanyaan_lima', 'required');
        //     $this->form_validation->set_rules('pertanyaan_enam', 'Pertanyaan_enam', 'required');
        //     $this->form_validation->set_rules('pertanyaan_tujuh', 'Pertanyaan_tujuh', 'required');
        //     $this->form_validation->set_rules('pertanyaan_delapan', 'Pertanyaan_delapan', 'required');
        //     $this->form_validation->set_rules('pertanyaan_sembilan', 'Pertanyaan_sembilan', 'required');
        //     $this->form_validation->set_rules('pertanyaan_sepuluh', 'Pertanyaan_sepuluh', 'required');
        //     $this->form_validation->set_rules('pertanyaan_sebelas', 'Pertanyaan_sebelas', 'required');
        //     $this->form_validation->set_rules('pertanyaan_duabelas', 'Pertanyaan_duabelas', 'required');
        //     $this->form_validation->set_rules('pertanyaan_tigabelas', 'Pertanyaan_tigabelas', 'required');
        //     $this->form_validation->set_rules('pertanyaan_empatbelas', 'Pertanyaan_empatbelas', 'required');
        //     $this->form_validation->set_rules('pertanyaan_limabelas', 'Pertanyaan_limabelas', 'required');

        //     // form input

        //     //ketua
        //     $nama       = $this->input->post('nama_ketua_pengabdi');
        //     $prodi      = $this->input->post('program_studi');
        //     $nidn       = $this->input->post('nidn');
        //     $pendidikan = $this->input->post('pendidikan_tertinggi');
        //     $email      = $this->input->post('email');
        //     $jabatan    = $this->input->post('jabatan_fungsional');
        //     $no         = $this->input->post('no_hp');
        //     $bidang     = $this->input->post('bidang_ilmu');

        //     //anggota 1
        //     $nama_satu       = $this->input->post('nama_anggota_satu');
        //     $prodi_satu      = $this->input->post('program_studi_satu');
        //     $nidn_satu       = $this->input->post('nidn_satu');
        //     $pendidikan_satu = $this->input->post('pendidikan_tertinggi_satu');
        //     $email_satu      = $this->input->post('email_satu');
        //     $jabatan_satu    = $this->input->post('jabatan_fungsional_satu');
        //     $no_satu         = $this->input->post('no_hp_satu');
        //     $bidang_satu     = $this->input->post('bidang_ilmu_satu');

        //     //anggota 2
        //     $nama_dua       = $this->input->post('nama_anggota_dua');
        //     $prodi_dua      = $this->input->post('program_studi_dua');
        //     $nidn_dua       = $this->input->post('nidn_dua');
        //     $pendidikan_dua = $this->input->post('pendidikan_tertinggi_dua');
        //     $email_dua      = $this->input->post('email_dua');
        //     $jabatan_dua    = $this->input->post('jabatan_fungsional_dua');
        //     $no_dua         = $this->input->post('no_hp_dua');
        //     $bidang_dua      = $this->input->post('bidang_ilmu_dua');

        //     //anggota 3
        //     $nama_tiga       = $this->input->post('nama_anggota_tiga');
        //     $prodi_tiga      = $this->input->post('program_studi_tiga');
        //     $nidn_tiga       = $this->input->post('nidn_tiga');
        //     $pendidikan_tiga = $this->input->post('pendidikan_tertinggi_tiga');
        //     $email_tiga      = $this->input->post('email_tiga');
        //     $jabatan_tiga    = $this->input->post('jabatan_fungsional_tiga');
        //     $no_tiga         = $this->input->post('no_hp_tiga');
        //     $bidang_tiga     = $this->input->post('bidang_ilmu_tiga');

        //     if ($this->form_validation->run() == false) {

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/identitas', $data);
        $this->load->view('templates/footer');
        //     } else {

        //         $this->load->database();
        //         $this->db->trans_begin();

        //         $ketua =  $this->File_model->input_ketua(
        //             $nama,
        //             $prodi,
        //             $nidn,
        //             $pendidikan,
        //             $email,
        //             $jabatan,
        //             $no,
        //             $bidang
        //         );

        //         $anggota1 = $this->File_model->input_anggota1(
        //             $nama_satu,
        //             $prodi_satu,
        //             $nidn_satu,
        //             $pendidikan_satu,
        //             $email_satu,
        //             $jabatan_satu,
        //             $no_satu,
        //             $bidang_satu
        //         );

        //         $anggota2 = $this->File_model->input_anggota2(
        //             $nama_dua,
        //             $prodi_dua,
        //             $nidn_dua,
        //             $pendidikan_dua,
        //             $email_dua,
        //             $jabatan_dua,
        //             $no_dua,
        //             $bidang_dua
        //         );

        //         $anggota3 = $this->File_model->input_anggota3(
        //             $nama_tiga,
        //             $prodi_tiga,
        //             $nidn_tiga,
        //             $pendidikan_tiga,
        //             $email_tiga,
        //             $jabatan_tiga,
        //             $no_tiga,
        //             $bidang_tiga
        //         );
        //     }

        //     
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Identitas Berhasil diisi, silahkan lanjut isi form pengajuan</div>');
        //     redirect('user/Form_pengajuan');
        // }
    }
    public function Form_Pengajuan()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Form Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $ketua2 = $data['user']['id'];
        $this->load->model('File_model');

        $data['prodi'] = $this->db->get('tb_prodi')->result_array();
        $data['skim'] = $this->db->get('tb_skim')->result_array();



        // form validasi
        $this->form_validation->set_rules('judul_pengabdian', 'Judul_pengabdian', 'required');
        $this->form_validation->set_rules('dana', 'dana', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        // Ketua Pengabdi
        $this->form_validation->set_rules('nama_ketua_pengabdi', 'Nama_ketua_pengabdi', 'required');
        $this->form_validation->set_rules('program_studi', 'Program_studi', 'required');
        $this->form_validation->set_rules('nidn', 'Nidn', 'required');
        $this->form_validation->set_rules('pendidikan_tertinggi', 'Pendidikan_tertinggi', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('jabatan_fungsional', 'Jabatan_fungsional', 'required');
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required');
        $this->form_validation->set_rules('bidang_ilmu', 'Bidang_ilmu', 'required');

        // Anggota 1
        $this->form_validation->set_rules('nama_anggota_satu', 'Nama_anggota_satu');
        $this->form_validation->set_rules('program_studi_satu', 'Program_studi_satu');
        $this->form_validation->set_rules('nidn_satu', 'Nidn_satu');
        $this->form_validation->set_rules('pendidikan_tertinggi_satu', 'Pendidikan_tertinggi_satu');
        $this->form_validation->set_rules('email_satu', 'Email_satu');
        $this->form_validation->set_rules('jabatan_fungsional_satu', 'Jabatan_fungsional_satu');
        $this->form_validation->set_rules('no_hp_satu', 'No_hp_satu');
        $this->form_validation->set_rules('bidang_ilmu_satu', 'Bidang_ilmu_satu');

        // Anggota 2
        $this->form_validation->set_rules('nama_anggota_dua', 'Nama_anggota_dua');
        $this->form_validation->set_rules('program_studi_dua', 'Program_studi_dua');
        $this->form_validation->set_rules('nidn_dua', 'Nidn_dua');
        $this->form_validation->set_rules('pendidikan_tertinggi_dua', 'Pendidikan_tertinggi_dua');
        $this->form_validation->set_rules('email_dua', 'Email_dua');
        $this->form_validation->set_rules('jabatan_fungsional_dua', 'Jabatan_fungsional_dua');
        $this->form_validation->set_rules('no_hp_dua', 'No_hp_dua');
        $this->form_validation->set_rules('bidang_ilmu_dua', 'Bidang_ilmu_dua');

        // Anggota 3
        $this->form_validation->set_rules('nama_anggota_tiga', 'Nama_anggota_tiga ');
        $this->form_validation->set_rules('program_studi_tiga', 'Program_studi_tiga');
        $this->form_validation->set_rules('nidn_tiga', 'Nidn_tiga');
        $this->form_validation->set_rules('pendidikan_tertinggi_tiga', 'Pendidikan_tertinggi_tiga');
        $this->form_validation->set_rules('email_tiga', 'Email_tiga');
        $this->form_validation->set_rules('jabatan_fungsional_tiga', 'Jabatan_fungsional_tiga');
        $this->form_validation->set_rules('no_hp_tiga', 'No_hp_tiga');
        $this->form_validation->set_rules('bidang_ilmu_tiga', 'Bidang_ilmu_tiga');

        // pertanyaan
        $this->form_validation->set_rules('pertanyaan_satu', 'Pertanyaan_satu', 'required');
        $this->form_validation->set_rules('pertanyaan_dua', 'Pertanyaan_dua', 'required');
        $this->form_validation->set_rules('pertanyaan_tiga', 'Pertanyaan_tiga', 'required');
        $this->form_validation->set_rules('pertanyaan_empat', 'Pertanyaan_empat', 'required');
        $this->form_validation->set_rules('pertanyaan_lima', 'Pertanyaan_lima', 'required');
        $this->form_validation->set_rules('pertanyaan_enam', 'Pertanyaan_enam', 'required');
        $this->form_validation->set_rules('pertanyaan_tujuh', 'Pertanyaan_tujuh', 'required');
        $this->form_validation->set_rules('pertanyaan_delapan', 'Pertanyaan_delapan', 'required');
        $this->form_validation->set_rules('pertanyaan_sembilan', 'Pertanyaan_sembilan', 'required');
        $this->form_validation->set_rules('pertanyaan_sepuluh', 'Pertanyaan_sepuluh', 'required');
        $this->form_validation->set_rules('pertanyaan_sebelas', 'Pertanyaan_sebelas', 'required');
        $this->form_validation->set_rules('pertanyaan_duabelas', 'Pertanyaan_duabelas', 'required');
        $this->form_validation->set_rules('pertanyaan_tigabelas', 'Pertanyaan_tigabelas', 'required');
        $this->form_validation->set_rules('pertanyaan_empatbelas', 'Pertanyaan_empatbelas', 'required');
        $this->form_validation->set_rules('pertanyaan_limabelas', 'Pertanyaan_limabelas', 'required');

        // form input

        //ketua
        $nama       = $this->input->post('nama_ketua_pengabdi');
        $prodi      = $this->input->post('program_studi');
        $nidn       = $this->input->post('nidn');
        $pendidikan = $this->input->post('pendidikan_tertinggi');
        $email      = $this->input->post('email');
        $jabatan    = $this->input->post('jabatan_fungsional');
        $no         = $this->input->post('no_hp');
        $bidang     = $this->input->post('bidang_ilmu');

        //anggota 1
        $nama_satu       = $this->input->post('nama_anggota_satu');
        $prodi_satu      = $this->input->post('program_studi_satu');
        $nidn_satu       = $this->input->post('nidn_satu');
        $pendidikan_satu = $this->input->post('pendidikan_tertinggi_satu');
        $email_satu      = $this->input->post('email_satu');
        $jabatan_satu    = $this->input->post('jabatan_fungsional_satu');
        $no_satu         = $this->input->post('no_hp_satu');
        $bidang_satu     = $this->input->post('bidang_ilmu_satu');

        //anggota 2
        $nama_dua       = $this->input->post('nama_anggota_dua');
        $prodi_dua      = $this->input->post('program_studi_dua');
        $nidn_dua       = $this->input->post('nidn_dua');
        $pendidikan_dua = $this->input->post('pendidikan_tertinggi_dua');
        $email_dua      = $this->input->post('email_dua');
        $jabatan_dua    = $this->input->post('jabatan_fungsional_dua');
        $no_dua         = $this->input->post('no_hp_dua');
        $bidang_dua      = $this->input->post('bidang_ilmu_dua');

        //anggota 3
        $nama_tiga       = $this->input->post('nama_anggota_tiga');
        $prodi_tiga      = $this->input->post('program_studi_tiga');
        $nidn_tiga       = $this->input->post('nidn_tiga');
        $pendidikan_tiga = $this->input->post('pendidikan_tertinggi_tiga');
        $email_tiga      = $this->input->post('email_tiga');
        $jabatan_tiga    = $this->input->post('jabatan_fungsional_tiga');
        $no_tiga         = $this->input->post('no_hp_tiga');
        $bidang_tiga     = $this->input->post('bidang_ilmu_tiga');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/Form_pengajuan', $data);
            $this->load->view('templates/footer');
        } else {

            $this->load->database();
            $this->db->trans_begin();

            $ketua = $this->File_model->input_ketua(
                $ketua2,
                $nama,
                $prodi,
                $nidn,
                $pendidikan,
                $email,
                $jabatan,
                $no,
                $bidang
            );

            $anggota1 = $this->File_model->input_anggota1(
                $nama_satu,
                $prodi_satu,
                $nidn_satu,
                $pendidikan_satu,
                $email_satu,
                $jabatan_satu,
                $no_satu,
                $bidang_satu
            );

            $anggota2 = $this->File_model->input_anggota2(
                $nama_dua,
                $prodi_dua,
                $nidn_dua,
                $pendidikan_dua,
                $email_dua,
                $jabatan_dua,
                $no_dua,
                $bidang_dua
            );

            $anggota3 = $this->File_model->input_anggota3(
                $nama_tiga,
                $prodi_tiga,
                $nidn_tiga,
                $pendidikan_tiga,
                $email_tiga,
                $jabatan_tiga,
                $no_tiga,
                $bidang_tiga
            );


            $id_prodi = $this->input->post('program_studi');
            $cek_prodi = "SELECT * FROM tb_prodi WHERE id = $id_prodi";
            $id_prodi = $this->db->query($cek_prodi)->row_array();

            $id_kaprodi = $id_prodi['id_kaprodi'];
            $id_fakultas = $id_prodi['id_fakultas'];

            $cek_lppm = "SELECT * FROM tb_ketua_lppm";
            $id_lppm = $this->db->query($cek_lppm)->row_array();

            $id_lppm = $id_lppm['id'];
            $status = 1;



            //Upload Proposal
            $upload_proposal = $_FILES['proposal'];

            if ($upload_proposal) {
                $config['upload_path'] = 'assets/proposal';
                $config['allowed_types']        = 'pdf|docx|doc';


                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('proposal')) {

                    $proposal_baru = $this->upload->data('file_name');
                    $this->db->set('proposal', $proposal_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $judul_pengabdian   = $this->input->post('judul_pengabdian');
            $skim_pengabdian    = $this->input->post('skim_pengabdian');
            $dana               = $this->input->post('dana');
            $jumlah             = $this->input->post('jumlah');

            $pengajuan = $this->File_model->input_pengajuan(
                $ketua2,
                $judul_pengabdian,
                $skim_pengabdian,
                $dana,
                $jumlah,
                $ketua,
                $anggota1,
                $anggota2,
                $anggota3,
                $id_kaprodi,
                $id_fakultas,
                $id_lppm,
                $proposal_baru,
                $status
            );

            // F.1-2
            $data_pengajuan1 = [

                'id_pengajuan'           => $pengajuan,
                'pertanyaan_satu'        => $this->input->post('pertanyaan_satu'),
                'pertanyaan_dua'         => $this->input->post('pertanyaan_dua'),
                'pertanyaan_tiga'        => $this->input->post('pertanyaan_tiga'),
                'pertanyaan_empat'       => $this->input->post('pertanyaan_empat'),
                'pertanyaan_lima'        => $this->input->post('pertanyaan_lima'),
                'pertanyaan_enam'        => $this->input->post('pertanyaan_enam'),
                'pertanyaan_tujuh'       => $this->input->post('pertanyaan_tujuh'),
                'pertanyaan_delapan'     => $this->input->post('pertanyaan_delapan'),
                'pertanyaan_sembilan'    => $this->input->post('pertanyaan_sembilan'),
                'pertanyaan_sepuluh'     => $this->input->post('pertanyaan_sepuluh'),
                'pertanyaan_sebelas'     => $this->input->post('pertanyaan_sebelas'),
                'pertanyaan_duabelas'    => $this->input->post('pertanyaan_duabelas'),
                'pertanyaan_tigabelas'   => $this->input->post('pertanyaan_tigabelas'),
                'pertanyaan_empatbelas'  => $this->input->post('pertanyaan_empatbelas'),
                'pertanyaan_limabelas'   => $this->input->post('pertanyaan_limabelas')
            ];
            $this->db->insert('tb_pertanyaan', $data_pengajuan1);


            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                echo 'gagal input data';
            } else {
                $this->db->trans_commit();
                echo 'berhaisl input data';
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di input</div>');
            redirect('user/rekap');
        }
    }
    public function revisi()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['revisi'] = $this->db->get('tb_revisi')->result_array();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/revisi', $data);
        $this->load->view('templates/footer');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Revisi Berhasil di input</div>');
        redirect('user/rekap');
    }

    public function tambah_data()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $komentar = $this->input->post('komentar');
        $nama_file = $_FILES['nama_file'];
        $id_user = $data['user']['id'];


        if ($nama_file) {
            $config = array(
                'upload_path' => "assets/revisi",
                'allowed_types' => "pdf|docx",
                'max_size' => "5048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('nama_file')) {
                $proposal_upload = $this->upload->data('file_name');

                $data = array(

                    'tgl_revisi' => time(),
                    'id_user'    => $id_user,
                    'komentar'   => $komentar,
                    'nama_file'  => $proposal_upload
                );

                $this->db->insert('tb_revisi', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil di tambahkan!</div>');
                redirect('user/rekap');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data gagal di tambahkan!</div>');
                redirect('user/rekap');
            }
        }
    }

    public function editrevisi()
    {
        $this->load->model('File_model');

        $komentar = $this->input->post('komentar');
        $id = $this->input->post('id');

        $data = ['komentar' => $komentar];
        $where = ['id' => $id];



        $this->File_model->update_data($where, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Revisi berhasil di ubah!</div>');
        redirect('user/rekap');
    }

    public function hapusrevisi($id)
    {
        //hapus
        $this->load->model('File_model');
        $where = ['id' => $id];
        $this->File_model->hapusrevisi($where, 'tb_revisi');
        redirect('user/rekap');
    }

    public function rekap()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id_user = $data['user']['id'];

        // $ketua = "SELECT tb_ketua_pengabdi.id 
        // FROM tb_ketua_pengabdi, user
        // WHERE tb_ketua_pengabdi.id_user = user.id
        // AND user.id = $id_user";

        // $data['ketua1'] = $this->db->query($ketua)->row_array();
        // $id_ketua = $data['ketua1']['id'];
        // var_dump($id_ketua);
        // die;

        $sql = "SELECT tb_revisi.id, tb_revisi.tgl_revisi, tb_revisi.komentar, tb_revisi.nama_file
        FROM tb_revisi, USER 
        WHERE user.id = tb_revisi.id_user
        AND tb_revisi.id_user = $id_user";

        $data['revisi'] = $this->db->query($sql)->result_array();



        $query = "SELECT tb_pengajuan.id AS id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, dana, jumlah, proposal, `status`, komentar,
        nama_anggota_satu, nama_anggota_dua, nama_anggota_tiga, tb_skim.skim
	    FROM tb_pengajuan, tb_ketua_pengabdi, tb_pertanyaan, tb_anggota_satu,  tb_anggota_dua,  tb_anggota_tiga, user, tb_skim
	    WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
	    AND tb_pengajuan.id = tb_pertanyaan.id_pengajuan
	    AND tb_anggota_satu.id = tb_pengajuan.id_anggota_satu
	    AND tb_anggota_dua.id = tb_pengajuan.id_anggota_dua
	    AND tb_anggota_tiga.id = tb_pengajuan.id_anggota_tiga
	    AND user.id = tb_ketua_pengabdi.id_user
	    AND tb_pengajuan.id_skim = tb_skim.id
	    AND tb_pengajuan.id_user = $id_user ";


        $data['pengajuan'] = $this->db->query($query)->result();
        // var_dump($data);
        // exit;


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/rekap', $data);
        $this->load->view('templates/footer');
    }

    public function rekap2()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Rekap Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id_user = $data['user']['id'];

        $query = "SELECT tb_pengajuan.id AS id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, dana, jumlah, proposal, `status`, komentar,
        nama_anggota_satu, nama_anggota_dua, nama_anggota_tiga, tb_skim.skim, proposal
	    FROM tb_pengajuan, tb_ketua_pengabdi, tb_pertanyaan, tb_anggota_satu,  tb_anggota_dua,  tb_anggota_tiga, user, tb_skim
	    WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
	    AND tb_pengajuan.id = tb_pertanyaan.id_pengajuan
	    AND tb_anggota_satu.id = tb_pengajuan.id_anggota_satu
	    AND tb_anggota_dua.id = tb_pengajuan.id_anggota_dua
	    AND tb_anggota_tiga.id = tb_pengajuan.id_anggota_tiga
	    AND user.id = tb_ketua_pengabdi.id_user
	    AND tb_pengajuan.id_skim = tb_skim.id
        AND tb_pengajuan.id_user = $id_user 
        AND tb_pengajuan.status = 0 ";

        $id     = $this->input->post('id');
        $data['pengajuan1'] = $this->db->get_where('tb_pengajuan', ['id' => $id])->row_array();
        $data['pengajuan2'] = $this->db->query($query)->result();
        // var_dump($data);
        // exit;


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/rekap2', $data);
        $this->load->view('templates/footer');
    }

    public function detail2($id)
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Rekap';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query2 = "SELECT tb_pengajuan.id as id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, 
        nama_anggota_satu, nama_anggota_dua, nama_anggota_tiga, 
        nidn, nidn_satu, nidn_dua, nidn_tiga, 
        jabatan_fungsional, jabatan_fungsional_satu, jabatan_fungsional_dua, jabatan_fungsional_tiga, 
        email, email_satu, email_dua, email_tiga, 
        tb_prodi.nama_prodi,
        pendidikan_tertinggi, pendidikan_tertinggi_satu, pendidikan_tertinggi_dua, pendidikan_tertinggi_tiga, 
        no_hp, no_hp_satu, no_hp_dua, no_hp_tiga, 
        bidang_ilmu, bidang_ilmu_satu, bidang_ilmu_dua, bidang_ilmu_tiga,
        pertanyaan_satu, pertanyaan_dua, pertanyaan_tiga, pertanyaan_empat, pertanyaan_lima, pertanyaan_enam, 
        pertanyaan_tujuh, pertanyaan_delapan, pertanyaan_sembilan, pertanyaan_sepuluh, pertanyaan_sebelas,
        pertanyaan_duabelas, pertanyaan_tigabelas, pertanyaan_empatbelas, pertanyaan_limabelas,  
        proposal 
        FROM tb_pengajuan, tb_ketua_pengabdi, tb_anggota_satu, tb_anggota_dua, tb_anggota_tiga, tb_pertanyaan, tb_prodi
        WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
        AND tb_anggota_satu.id = tb_pengajuan.id_anggota_satu
        AND tb_anggota_dua.id = tb_pengajuan.id_anggota_dua
        AND tb_anggota_tiga.id = tb_pengajuan.id_anggota_tiga
        AND tb_pengajuan.id = tb_pertanyaan.id_pengajuan
        AND tb_prodi.id = tb_ketua_pengabdi.id_prodi
        AND tb_prodi.id = tb_anggota_satu.id_prodi
        AND tb_prodi.id = tb_anggota_dua.id_prodi
        AND tb_prodi.id = tb_anggota_tiga.id_prodi
        AND tb_pengajuan.id = $id";

        $data['detail2'] = $this->db->where('id', $id)->query($query2)->result();
        // var_dump($data);
        // exit;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail2', $data);
        $this->load->view('templates/footer');
    }

    public function download($id)
    {
        $data = $this->db->where('id', $id)->get('tb_pengajuan')->row_array();

        force_download(FCPATH . 'assets/proposal/' . $data['proposal'], null);
        redirect('user/rekap' . $id);
    }

    public function download1($id)
    {
        $data = $this->db->where('id', $id)->get('tb_koreksian')->row_array();

        force_download(FCPATH . 'assets/koreksi/' . $data['file_koreksi'], null);
        redirect('user/rekap' . $id);
    }

    public function detail_pengajuan($id)
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $detail = "SELECT tb_pengajuan.id as id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, 
        nama_anggota_satu, nama_anggota_dua, nama_anggota_tiga, 
        nidn, nidn_satu, nidn_dua, nidn_tiga, 
        jabatan_fungsional, jabatan_fungsional_satu, jabatan_fungsional_dua, jabatan_fungsional_tiga, 
        email, email_satu, email_dua, email_tiga, 
        tb_prodi.nama_prodi,
        pendidikan_tertinggi, pendidikan_tertinggi_satu, pendidikan_tertinggi_dua, pendidikan_tertinggi_tiga, 
        no_hp, no_hp_satu, no_hp_dua, no_hp_tiga, 
        bidang_ilmu, bidang_ilmu_satu, bidang_ilmu_dua, bidang_ilmu_tiga,
        pertanyaan_satu, pertanyaan_dua, pertanyaan_tiga, pertanyaan_empat, pertanyaan_lima, pertanyaan_enam, 
        pertanyaan_tujuh, pertanyaan_delapan, pertanyaan_sembilan, pertanyaan_sepuluh, pertanyaan_sebelas,
        pertanyaan_duabelas, pertanyaan_tigabelas, pertanyaan_empatbelas, pertanyaan_limabelas,  
        proposal 
        FROM tb_pengajuan, tb_ketua_pengabdi, tb_anggota_satu, tb_anggota_dua, tb_anggota_tiga, tb_pertanyaan, tb_prodi
        WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
        AND tb_anggota_satu.id = tb_pengajuan.id_anggota_satu
        AND tb_anggota_dua.id = tb_pengajuan.id_anggota_dua
        AND tb_anggota_tiga.id = tb_pengajuan.id_anggota_tiga
        AND tb_pengajuan.id = tb_pertanyaan.id_pengajuan
        AND tb_ketua_pengabdi.id_prodi = tb_prodi.id
        AND tb_anggota_satu.id_prodi = tb_prodi.id
        AND tb_anggota_dua.id_prodi = tb_prodi.id
        AND tb_anggota_tiga.id_prodi = tb_prodi.id
        AND tb_pengajuan.id = $id";

        $data['detail_pengajuan'] = $this->db->where('id', $id)->query($detail)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail_pengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function edit_pengajuan($id)
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Rekap Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('File_model');

        $where = array('id' => $id);
        $data['pengajuan'] =  $this->File_model->edit_pengajuan($where, 'tb_pengajuan')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/edit_pengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function update_pengajuan()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('File_model');

        $judul_pengabdian   = $this->input->post('judul_pengabdian');
        // $skim   = $this->input->post('skim_pengabdian');
        $dana               = $this->input->post('dana');
        $jumlah             = $this->input->post('jumlah');
        $id = $this->input->post('id');
        $status = 1;
        $pesan = 'sedang diproses';
        $nama_file  = $_FILES['proposal'];

        if ($nama_file) {
            $config = array(
                'upload_path' => "assets/proposal",
                'allowed_types' => "pdf|docx",
                'max_size' => "5048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('proposal')) {
                $proposal_upload = $this->upload->data('file_name');

                $data = [

                    'judul_pengabdian'  => $judul_pengabdian,
                    // 'skim_pengabdian'   => $skim,
                    'dana'              => $dana,
                    'jumlah'            => $jumlah,
                    'proposal'          => $proposal_upload,
                    'status'            => $status,
                    'komentar'          => $pesan

                ];


                // var_dump($data);
                // die;
            }
        }
        $where = ['id' => $id];
        $this->File_model->update_pengajuan($where, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengajuan Berhasil Diedit</div>');
        redirect('user/rekap');
    }

    public function pdf($id)
    {
        $this->load->library('dompdf_gen');

        $query2 = "SELECT tb_pengajuan.id as id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, 
        nama_anggota_satu, nama_anggota_dua, nama_anggota_tiga, tb_skim.skim,
        nidn, nidn_satu, nidn_dua, nidn_tiga, 
        jabatan_fungsional, jabatan_fungsional_satu, jabatan_fungsional_dua, jabatan_fungsional_tiga, 
        email, email_satu, email_dua, email_tiga, 
        tb_prodi.nama_prodi,
        pendidikan_tertinggi, pendidikan_tertinggi_satu, pendidikan_tertinggi_dua, pendidikan_tertinggi_tiga, 
        no_hp, no_hp_satu, no_hp_dua, no_hp_tiga, 
        bidang_ilmu, bidang_ilmu_satu, bidang_ilmu_dua, bidang_ilmu_tiga,
        proposal  
        FROM tb_pengajuan, tb_ketua_pengabdi, tb_anggota_satu, tb_anggota_dua, tb_anggota_tiga, tb_pertanyaan , tb_prodi, tb_skim
        WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
        AND tb_anggota_satu.id = tb_pengajuan.id_anggota_satu
        AND tb_anggota_dua.id = tb_pengajuan.id_anggota_dua
        AND tb_anggota_tiga.id = tb_pengajuan.id_anggota_tiga
        AND tb_prodi.id = tb_ketua_pengabdi.id_prodi
        AND tb_pengajuan.id_skim = tb_skim.id
        AND tb_pengajuan.id = $id";

        $sql = " SELECT  tb_dosen.nama_dosen, tb_ketua_lppm.lppm , tb_kaprodi.nama_kaprodi, tb_ketua_pengabdi.nama_ketua_pengabdi
        FROM tb_dosen, tb_pengajuan, tb_ketua_lppm, tb_prodi, tb_kaprodi, tb_ketua_pengabdi
        WHERE tb_dosen.id = tb_pengajuan.id_pihak_dua
        AND tb_ketua_lppm.id = tb_pengajuan.id_pihak_tiga
        AND tb_kaprodi.id = tb_pengajuan.id_pihak_satu
        AND tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
        AND tb_pengajuan.id = $id";

        $data['ttd']    = $this->db->where('id', $id)->query($sql)->result();
        $data['detail2']    = $this->db->where('id', $id)->query($query2)->result();
        // $data['pengajuan2'] = $this->db->where('id_pengajuan', $id)->query($query)->result();;

        $this->load->view('laporan', $data);

        $paper_size = 'F4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Form2.pdf", array('attachement' => 0));
    }

    public function pdf2($id)
    {
        $this->load->library('dompdf_gen');


        $query3 = "SELECT tb_pengajuan.id as id_pengajuan, judul_pengabdian, dana, jumlah, nama_ketua_pengabdi,  
        nidn, jabatan_fungsional, email, tb_prodi.nama_prodi, tb_skim.skim, pendidikan_tertinggi, no_hp, bidang_ilmu,
        pertanyaan_satu, pertanyaan_dua, pertanyaan_tiga, pertanyaan_empat, pertanyaan_lima, pertanyaan_enam, 
        pertanyaan_tujuh, pertanyaan_delapan, pertanyaan_sembilan, pertanyaan_sepuluh, pertanyaan_sebelas,
        pertanyaan_duabelas, pertanyaan_tigabelas, pertanyaan_empatbelas, pertanyaan_limabelas
        FROM tb_pengajuan, tb_ketua_pengabdi, tb_pertanyaan , tb_prodi, tb_skim
        WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
        AND tb_pengajuan.id = tb_pertanyaan.id_pengajuan
        AND tb_prodi.id = tb_ketua_pengabdi.id_prodi
        AND tb_pengajuan.id_skim = tb_skim.id
        AND tb_pengajuan.id = $id";


        $data['detail3']    = $this->db->where('id_pengajuan', $id)->query($query3)->result();

        $this->load->view('laporan2', $data);

        $paper_size = 'F4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Form2.pdf", array('attachement' => 0));
    }


    public function Profile()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Profile Saya';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id_user = $data['user']['id'];
        $query = "SELECT role
        FROM user, user_role 
        WHERE user_role.id = user.role_id
        AND user.id = $id_user";

        $data['role'] = $this->db->query($query)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/Profile', $data);
        $this->load->view('templates/footer');
    }

    public function editProfile()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Profile Saya';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $email = $this->input->post('email');

        $upload_image = $_FILES['image'];

        if ($upload_image) {
            $config['upload_path'] = 'assets/img/profile';
            $config['allowed_types'] = 'jpeg|gif|jpg|png';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $old_image = $data['user']['image'];

                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image)->where('email', $email)->update('user');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile Berhasil Diedit</div>');
                redirect('user/Profile');
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

    public function update_password()
    {

        $id = $this->input->post('id');

        $data_awal = $this->db->where('id', $id)->get('user')->row();
        $nama      = $data_awal->name;

        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $this->db->set('password', $password);
        $this->db->where('id', $id);
        $this->db->update('user');
        var_dump($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Akun Anda Telah Diubah</div>');
        redirect('user/Profile');
    }
}
