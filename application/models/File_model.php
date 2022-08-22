<?php

defined('BASEPATH') or exit('No direct script access allowed');

class File_model extends CI_Model

{

    public function input_ketua(
        $ketua2,
        $nama,
        $prodi,
        $nidn,
        $pendidikan,
        $email,
        $jabatan,
        $no,
        $bidang
    ) {
        $data = array(
            'id_user'               => $ketua2,
            'nama_ketua_pengabdi'  => $nama,
            'id_prodi'        => $prodi,
            'nidn'                 => $nidn,
            'pendidikan_tertinggi' => $pendidikan,
            'email'                => $email,
            'jabatan_fungsional'   => $jabatan,
            'no_hp'                => $no,
            'bidang_ilmu'          => $bidang
        );

        $this->db->insert('tb_ketua_pengabdi', $data);
        return $this->db->insert_id();
    }

    public function input_anggota1(
        $nama_satu,
        $prodi_satu,
        $nidn_satu,
        $pendidikan_satu,
        $email_satu,
        $jabatan_satu,
        $no_satu,
        $bidang_satu
    ) {
        $data = array(
            'nama_anggota_satu'         => $nama_satu,
            'id_prodi'        => $prodi_satu,
            'nidn_satu'                 => $nidn_satu,
            'pendidikan_tertinggi_satu' => $pendidikan_satu,
            'email_satu'                => $email_satu,
            'jabatan_fungsional_satu'   => $jabatan_satu,
            'no_hp_satu'                => $no_satu,
            'bidang_ilmu_satu'          => $bidang_satu
        );

        $this->db->insert('tb_anggota_satu', $data);
        return $this->db->insert_id();
    }

    public function input_anggota2(
        $nama_dua,
        $prodi_dua,
        $nidn_dua,
        $pendidikan_dua,
        $email_dua,
        $jabatan_dua,
        $no_dua,
        $bidang_dua
    ) {
        $data = array(
            'nama_anggota_dua'  => $nama_dua,
            'id_prodi'        => $prodi_dua,
            'nidn_dua'                 => $nidn_dua,
            'pendidikan_tertinggi_dua' => $pendidikan_dua,
            'email_dua'                => $email_dua,
            'jabatan_fungsional_dua'   => $jabatan_dua,
            'no_hp_dua'                => $no_dua,
            'bidang_ilmu_dua'          => $bidang_dua
        );

        $this->db->insert('tb_anggota_dua', $data);
        return $this->db->insert_id();
    }

    public function input_anggota3(
        $nama_tiga,
        $prodi_tiga,
        $nidn_tiga,
        $pendidikan_tiga,
        $email_tiga,
        $jabatan_tiga,
        $no_tiga,
        $bidang_tiga
    ) {
        $data = array(
            'nama_anggota_tiga'         => $nama_tiga,
            'id_prodi'        => $prodi_tiga,
            'nidn_tiga'                 => $nidn_tiga,
            'pendidikan_tertinggi_tiga' => $pendidikan_tiga,
            'email_tiga'                => $email_tiga,
            'jabatan_fungsional_tiga'   => $jabatan_tiga,
            'no_hp_tiga'                => $no_tiga,
            'bidang_ilmu_tiga'          => $bidang_tiga
        );

        $this->db->insert('tb_anggota_tiga', $data);
        return $this->db->insert_id();
    }

    public function input_pengajuan(
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
        $id_dekan,
        $id_lppm,
        $proposal_baru,
        $status

    ) {

        $data = array(
            'id_user'           => $ketua2,
            'judul_pengabdian'  => $judul_pengabdian,
            'id_skim'           => $skim_pengabdian,
            'dana'              => $dana,
            'jumlah'            => $jumlah,
            'id_ketua_pengabdi' => $ketua,
            'id_anggota_satu'   => $anggota1,
            'id_anggota_dua'    => $anggota2,
            'id_anggota_tiga'   => $anggota3,
            'id_pihak_satu'     => $id_kaprodi,
            'id_pihak_dua'      => $id_dekan,
            'id_pihak_tiga'     => $id_lppm,
            'proposal'          => $proposal_baru,
            'status'            => $status
        );
        $this->db->insert('tb_pengajuan', $data);
        return $this->db->insert_id();
    }
    public function edit_pengajuan($where)
    {
        return $this->db->get_where('tb_pengajuan', $where);
    }

    public function hapus_reviewer($where)
    {
        $this->db->where($where);
        $this->db->delete('user');
    }

    public function update_pengajuan($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tb_pengajuan', $data);
    }


    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function tambah_koreksi($koreksi, $table)
    {
        $this->db->insert($table, $koreksi);
    }

    // edit Panduan
    public function edit_panduan($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tb_panduan', $data);
    }

    //hapus Panduan
    public function hapus_panduan($where)
    {
        $this->db->where($where);
        $this->db->delete('tb_panduan');
    }

    //edit Koreksi
    public function update_koreksi($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tb_koreksian', $data);
    }

    //edit revisi
    public function update_data($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tb_revisi', $data);
    }

    //editrevisi
    public function editrevisi($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tb_revisi', $data);
    }
    //hapusRevisi
    public function hapusrevisi($where)
    {
        $this->db->where($where);
        $this->db->delete('tb_revisi');
    }

    //editkoreksi
    public function editkoreksi($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tb_koreksian', $data);
    }

    //hapus koreksi
    public function hapuskoreksi($where)
    {
        $this->db->where($where);
        $this->db->delete('tb_koreksian');
    }

    //edit pengajuan
    public function revisi1($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tb_pengajuan', $data);
    }
}
