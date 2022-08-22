<?php

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $role_id = intval($role_id);
        $controler = $ci->uri->segment(1);

        // $queryMenu = $ci->db->get_where('user_menu', ['menu' => $controler])->row_array();
        // $menu_id = $queryMenu['id'];

        // $userAccess = $ci->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id]);

        if ($controler == 'admin' && $role_id == 2) {
            redirect('auth/blocked');
        } elseif ($controler == 'user' && $role_id == 1) {
            redirect('auth/blocked');
        } elseif ($controler == 'reviewer' && $role_id == 1) {
            redirect('auth/blocked');
        } elseif ($controler == 'admin' && $role_id == 3) {
            redirect('auth/blocked');
        } elseif ($controler == 'user' && $role_id == 3) {
            redirect('auth/blocked');
        } elseif ($controler == 'reviewer' && $role_id == 2) {
            redirect('auth/blocked');
        }
    }
}
