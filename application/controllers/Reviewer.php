<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Reviewer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
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
        $this->load->view('templates/topbar_reviewer', $data);
        $this->load->view('reviewer/profile', $data);
        $this->load->view('templates/footer');
    }

    public function daftar_pengajuan()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Daftar Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id_jabatan = $data['user']['id_jabatan'];

        //kaprodi
        if ($id_jabatan == 2) {
            $query = "SELECT tb_pengajuan.id AS id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, jumlah, proposal, `status`, dana, tb_skim.skim
            FROM tb_pengajuan, tb_ketua_pengabdi,  tb_skim, tb_pertanyaan, user
            WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
            AND tb_pengajuan.id = tb_pertanyaan.id_pengajuan
            AND user.id = tb_ketua_pengabdi.id_user
            AND tb_pengajuan.id_skim = tb_skim.id
            AND tb_pengajuan.status = 1 ";

            $data['pengajuan1'] = $this->db->query($query)->result();
        } elseif ($id_jabatan == 1) {
            $query = "SELECT tb_pengajuan.id AS id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, jumlah, proposal, `status`, dana, tb_skim.skim
            FROM tb_pengajuan, tb_ketua_pengabdi,  tb_skim, tb_pertanyaan, user
            WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
            AND tb_pengajuan.id = tb_pertanyaan.id_pengajuan
            AND user.id = tb_ketua_pengabdi.id_user
            AND tb_pengajuan.id_skim = tb_skim.id
            AND tb_pengajuan.status = 0 ";

            $data['pengajuan1'] = $this->db->query($query)->result();
        }
        // var_dump($id_jabatan);
        // var_dump($data['pengajuan1']);
        // exit;


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_reviewer', $data);
        $this->load->view('reviewer/daftar_pengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Daftar Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pengajuan.id as id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, `status`, nama_prodi,
        nama_anggota_satu, nama_anggota_dua, nama_anggota_tiga, 
        nidn, nidn_satu, nidn_dua, nidn_tiga, 
        jabatan_fungsional, jabatan_fungsional_satu, jabatan_fungsional_dua, jabatan_fungsional_tiga, 
        email, email_satu, email_dua, email_tiga, 
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
        AND tb_pengajuan.id = $id";

        $data['detail'] = $this->db->where('id', $id)->query($query)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_reviewer', $data);
        $this->load->view('reviewer/detail', $data);
        $this->load->view('templates/footer');
    }

    public function rekap_reviewer()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Rekap Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $id_jabatan = $data['user']['id_jabatan'];

        if ($id_jabatan == 2) {
            $query = "SELECT tb_pengajuan.id AS id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, jumlah, proposal, `status`, dana, tb_skim.skim
                    FROM tb_pengajuan, tb_ketua_pengabdi,  tb_skim
                    WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
                    AND tb_pengajuan.id_skim = tb_skim.id
                    AND tb_pengajuan.status = 0";

            $data['rekap2'] = $this->db->query($query)->result();
        } elseif ($id_jabatan == 1) {
            $query = "SELECT tb_pengajuan.id AS id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, jumlah, proposal, `status`, dana, tb_skim.skim
                    FROM tb_pengajuan, tb_ketua_pengabdi,  tb_skim
                    WHERE tb_ketua_pengabdi.id = tb_pengajuan.id_ketua_pengabdi
                    AND tb_pengajuan.id_skim = tb_skim.id
                    AND tb_pengajuan.status = 3";

            $data['rekap2'] = $this->db->query($query)->result();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_reviewer', $data);
        $this->load->view('reviewer/rekap_reviewer', $data);
        $this->load->view('templates/footer');
    }
    public function detail_rekap($id)
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Rekap Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pengajuan.id as id_pengajuan, judul_pengabdian, nama_ketua_pengabdi, status, 
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
        AND tb_pengajuan.id = $id";

        $data['detail1'] = $this->db->where('id', $id)->query($query)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_reviewer', $data);
        $this->load->view('reviewer/detail_rekap', $data);
        $this->load->view('templates/footer');
    }

    public function selesai()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Rekap Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('File_model');

        $id_jabatan = $data['user']['id_jabatan'];

        $id     = $this->input->post('id');
        if ($id_jabatan == 2) {
            $status = 0;
            $komentar = "Pengajuan telah disahkan oleh kaprodi";
            $data = array(

                'status' => $status,
                'komentar'  => $komentar
            );
        } elseif ($id_jabatan == 1) {
            $status = 3;
            $dana = $this->input->post('dana');
            $komentar = "Pengajuan telah disahkan";
            $data = array(
                'jumlah' => $dana,
                'status' => $status,
                'komentar'  => $komentar
            );
        }


        // $data['pengajuan1'] = $this->db->get_where('tb_pengajuan', ['id' => $id])->row_array();


        $where =  array(
            'id' => $id
        );

        $this->load->database();
        $this->db->trans_begin();

        $this->db->where($where);
        $this->db->update('tb_pengajuan', $data);


        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo 'gagal input data';
        } else {
            $this->db->trans_commit();
            echo 'berhasil';
        }


        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Pengajuan telah disahkan</div>');
        redirect('reviewer/daftar_pengajuan');
    }

    public function revisi1()
    {
        $this->load->model('File_model');
        $status = 2;
        $id     = $this->input->post('id');
        $komentar  = $this->input->post('komentar');
        $file_koreksi = $_FILES['file_koreksi'];

        $data['pengajuan1'] = $this->db->get_where('tb_pengajuan', ['id' => $id])->row_array();

        $data = array(

            'status' => $status,
            'komentar'  => $komentar
        );

        $where =  array(
            'id' => $id
        );

        $this->load->database();
        $this->db->trans_begin();

        $this->db->where($where);
        $this->db->update('tb_pengajuan', $data);

        $this->tambah_koreksi($id, $komentar, $file_koreksi);


        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo 'gagal input data';
        } else {
            $this->db->trans_commit();
            echo 'berhasil';
        }


        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pengajuan telah dikembalikan kepada Ketua pengusul</div>');
        redirect('reviewer/daftar_pengajuan');
    }


    public function koreksi_pengajuan()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Koreksi Pengajuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['koreksi'] = $this->db->get('tb_koreksian')->result_array();

        // $id_user = $data['user']['id'];

        // $ketua = "SELECT tb_ketua_pengabdi.id 
        // FROM tb_ketua_pengabdi, USER
        // WHERE tb_ketua_pengabdi.id_user = user.id
        // AND user.id = $id_user";

        // $data['ketua1'] = $this->db->query($ketua)->row_array();
        // $id_ketua = $data['ketua1']['id'];
        // // var_dump($id_ketua);
        // // die;
        // $sql = "SELECT tb_koreksian.id, tb_koreksian.tgl_koreksi, tb_koreksian.komen_koreksi, tb_koreksian.file_koreksi
        // FROM tb_koreksian, USER 
        // WHERE user.id = tb_koreksian.id_user
        // AND tb_koreksian.id_user = $id_user";



        // $data['pengajuan'] = $this->db->query($sql)->result();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar_reviewer', $data);
        $this->load->view('reviewer/koreksi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_koreksi($id, $komentar, $file_koreksi)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        if ($file_koreksi) {
            $config = array(
                'upload_path' => "assets/koreksi",
                'allowed_types' => "pdf|docx",
                'max_size' => "5048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            );
            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_koreksi')) {
                $proposal_upload = $this->upload->data('file_name');

                $data = array(
                    'id_pengajuan' => $id,
                    'tgl_koreksi' => time(),
                    'komentar_koreksi'   => $komentar,
                    'file_koreksi'  => $proposal_upload,
                );
                $this->db->insert('tb_koreksian', $data);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Pesan Revisi gagal di tambahkan!</div>');
                redirect('reviewer/koreksi_pengajuan');
            }
        }
    }
    public function editkoreksi()
    {
        $this->load->model('File_model');

        $komentar = $this->input->post('komentar');
        $id = $this->input->post('id');

        $data = ['komentar' => $komentar];
        $where = ['id' => $id];



        $this->File_model->update_koreksi($where, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Revisi berhasil di ubah!</div>');
        redirect('reviewer/koreksi_pengajuan');
    }

    public function hapuskoreksi($id)
    {
        //hapus
        $this->load->model('File_model');
        $where = ['id' => $id];
        $this->File_model->hapuskoreksi($where, 'tb_koreksian');
        redirect('reviewer/koreksi_pengajuan');
    }

    public function download($id)
    {
        $data = $this->db->where('id', $id)->get('tb_pengajuan')->row_array();

        force_download(FCPATH . 'assets/proposal/' . $data['proposal'], null);
        redirect('reviewer/daftar_pengajuan' . $id);
    }


    public function editProfile()
    {
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
                redirect('reviewer/index');
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
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Akun Anda Telah Diubah</div>');
        redirect('reviewer/index');
    }
}
