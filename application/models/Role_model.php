<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    //update_role
    public function update_data($where, $data)
    {
        $this->db->where($where);
        $this->db->update('user_role', $data);
    }
    //hapus_role
    public function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('user_role');
    }
}
