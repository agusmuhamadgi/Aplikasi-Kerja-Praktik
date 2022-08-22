<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Daftar Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $data['menu'] = $this->db->get('user_menu')->result_array();

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambah</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['tittle'] = 'LPPM UTY';
        $data['aktif'] = 'Daftar Sub Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['submenu'] = $this->menu->getSubmenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('tittle', 'Tittle', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data =  [
                'tittle' => $this->input->post('tittle'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu berhasil ditambah</div>');
            redirect('menu/submenu');
        }
    }
    // public function status_submenu()
    // {
    //     $id     = $this->input->post('id');
    //     $is_active = $this->input->post('$is_active');

    //     $data = [
    //         'id'   => $id,
    //         'is_active' => $is_active
    //     ];

    //     $status_submenu = $this->db->where('id', $id)->get('user_sub_menu')->row();
    //     $nama_submenu   = $status_submenu->title;
    //     $status_submenu = $status_submenu->status;

    //     if ($status_submenu == 1) {
    //         $submenu_status = "Non-Aktifkan";
    //     } else {
    //         $submenu_status = "Aktifkan";
    //     }

    //     $this->db->where('id', $id);
    //     $this->db->update('user_sub_menu', $data);
    //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu ' . $nama_submenu . ' Berhasil Di' . $submenu_status . '</div>');
    //     redirect('menu/submenu');
    // }

    public function hak_akses()
    {
        $data['title'] = 'LPPM UTY';
        $data['aktif'] = 'Hak Akses Menu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT uam.id as id_akses, role_id, menu_id, ur.role, um.menu, ur.id, um.id
                        FROM user_access_menu uam, user_menu um, user_role ur
                     WHERE um.id = uam.menu_id
                     AND ur.id = uam.role_id";
        $data['hak_akses'] = $this->db->query($query)->result_array();
        $data['user_role'] = $this->db->get('user_role')->result_array();
        $data['user_menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/hak_akses', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_hak_akses()
    {
        $menu   = $this->input->post('menu');

        $data = [
            'role_id' => $this->input->post('role'),
            'menu_id' => $this->input->post('menu')
        ];

        $this->db->insert('user_access_menu', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hak Akses Berhasil Ditambahkan</div>');
        redirect('menu/hak_akses');
    }

    public function edit_hak_akses()
    {
        $id      = $this->input->post('id');
        $role_id = $this->input->post('role');
        $menu_id = $this->input->post('menu');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $this->db->where('id', $id);
        $this->db->update('user_access_menu', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hak Akses Berhasil Diedit </div>');
        redirect('menu/hak_akses');
    }

    public function hapus_hak_akses($id)
    {
        $this->load->model('Menu_model');
        $where = array('id' => $id);

        $menu = $this->db->where($where)->get('user_access_menu')->row();

        $this->Menu_model->hapus_hak_akses($where, 'user_access_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hak Akses Telah Dihapus</div>');
        redirect('menu/hak_akses');
    }
    public function editmenu()
    {
        $this->load->model('Menu_model');

        $menu = $this->input->post('menu');
        $id = $this->input->post('id');


        $data = ['menu' => $menu];
        $where = ['id' => $id];

        $this->Menu_model->update_data($where, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Menu berhasil di ubah!</div>');
        redirect('menu');
    }

    public function hapus($id)
    {
        //hapus
        $this->load->model('Menu_model');
        $where = ['id' => $id];
        $this->Menu_model->hapus_data($where, 'user_menu');
        redirect('menu');
    }

    public function editsub()
    {
        $this->load->model('Menu_model');
        //editSubmenu
        $data['editsub'] = $this->Menu_model->getSubmenu();
        $tittle = $this->input->post('tittle');
        $id = $this->input->post('id');
        $menu_id = $this->input->post('menu_id');
        $url = $this->input->post('url');
        $icon = $this->input->post('icon');
        $is_active = $this->input->post('is_active');

        $data = [
            'tittle' => $tittle,
            'menu_id' => $menu_id,
            'url' => $url,
            'icon' => $icon,
            'is_active' => $is_active
        ];
        $where = ['id' => $id];

        $this->Menu_model->editsub($where, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Sub Menu berhasil di ubah!</div>');
        redirect('menu/submenu');
    }
    public function hapus_sub($id)
    {
        $this->load->model('Menu_model');
        //hapus_sub
        $where = ['id' => $id];
        $this->Menu_model->hapus_sub($where, 'user_sub_menu');
        redirect('menu/submenu');
    }
}
