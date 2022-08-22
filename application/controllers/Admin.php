<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()

	{
		$data['tittle'] = 'LPPM UTY';
		$data['aktif'] = 'Role';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('role', 'Role', 'required');
		$data['role'] = $this->db->get('user_role')->result_array();

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('templates/footer');
		} else {

			$this->db->insert('user_role', ['role' => $this->input->post('role')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role berhasil ditambah</div>');
			redirect('admin');
		}
	}


	public function panduan()
	{
		$data['tittle'] = 'LPPM UTY';
		$data['aktif'] = 'File Panduan';
		$data['user']  = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['file'] = $this->db->get('tb_panduan')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar_admin', $data);
		$this->load->view('admin/panduan', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_panduan()
	{
		$data['tittle'] = 'LPPM UTY';
		$data['aktif'] = 'File Panduan';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$id_user = $data['user']['id'];

		$panduan  = $this->input->post('panduan');
		$file_panduan = $_FILES['nama_file'];

		if ($file_panduan) {
			$config = array(
				'upload_path' => "assets/panduan",
				'allowed_types' => "pdf",
			);
			$this->upload->initialize($config);
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('nama_file')) {
				$panduan_upload = $this->upload->data('file_name');

				$data = array(
					'id_pengupload' => $id_user,
					'panduan'   => $panduan,
					'nama_file'  => $panduan_upload,
					'waktu' => time(),
				);

				$this->db->insert('tb_panduan', $data);
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Panduan gagal di tambahkan!</div>');
				redirect('admin/panduan');
			}
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> panduan berhasil di tambah!</div>');
		redirect('admin/panduan');
	}

	public function edit_panduan()
	{
		$data['tittle'] = 'LPPM UTY';
		$data['aktif'] = 'File Panduan';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$id = $this->input->post('id');
		$data['panduan'] = $this->db->get_where('tb_panduan', ['id' => $id])->row_array();
		$this->load->model('File_model');


		$panduan = $this->input->post('panduan');
		$file_panduan = $this->input->post('id_pengupload');
		// $id_user = $data['user']['id'];

		if ($file_panduan) {
			$config = array(
				'upload_path' => "assets/panduan",
				'allowed_types' => "pdf",
				'max_size' => "3048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			);
			$this->upload->initialize($config);
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('nama_file')) {
				$panduan_upload1 = $this->upload->data('file_name');

				$data = array(
					'id_pengupload' => $id,
					'panduan'   => $panduan,
					'nama_file'  => $panduan_upload1,
					'waktu' => time(),
				);

				$this->db->where('id', $id);
				$this->db->update('tb_panduan', $data);
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> panduan gagal di edit!</div>');
				redirect('admin/panduan');
			}
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> panduan berhasil di edit!</div>');
		redirect('admin/panduan');
	}

	public function hapus_panduan($id)
	{

		$this->load->model('File_model');
		//hapus_panduan
		$where = ['id' => $id];
		$this->File_model->hapus_panduan($where, 'tb_panduan');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Panduan berhasil di hapus!</div>');
		redirect('admin/panduan');
	}

	public function timreviewer()
	{
		$data['tittle'] = 'LPPM UTY';
		$data['aktif'] = 'Tim Reviewer';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->model('File_model');

		$role = array(
			'role_id !=' => 1
		);
		$data['reviewer'] = $this->db->where($role)->get('user')->result_array();
		// $data['lppm'] = $this->db->get('tb_ketua_lppm')->result_array();
		// $data['j_member'] = $this->db->get('jenis_penyelenggara')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/timreviewer', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_reviewer()
	{
		$nama  = htmlspecialchars($this->input->post('nama', true));

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email telah terdaftar'
		]);
		$this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!', 'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal : Email telah terdaftar</div>');
			redirect('admin/timreviewer');
		} else {

			$data = [
				'nama'               => strtoupper(htmlspecialchars($this->input->post('name', true))),
				'email'              => htmlspecialchars($this->input->post('email', true)),
				'image'              => 'default.jpg',
				'password'           => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'            => $this->input->post('role'),
				'is_active'			=> 1
			];

			$this->db->insert('user', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun ' . $nama . ' Berhasil Dibuat</div>');
			redirect('admin/timreviewer');
		}
	}

	public function roleAccess($role_id)
	{
		$data['tittle'] = 'LPPM UTY';
		$data['aktif'] = 'Role';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get('user_role', ['id' => $role_id])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar_admin', $data);
		$this->load->view('admin/roleaccess', $data);
		$this->load->view('templates/footer');
	}
	public function editrole()
	{
		$this->load->model('Role_model');

		$role = $this->input->post('role');
		$id = $this->input->post('id');


		$data = ['role' => $role];
		$where = ['id' => $id];

		$this->Role_model->update_data($where, $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Role berhasil di ubah!</div>');
		redirect('admin');
	}
	public function hapusrole($id)
	{
		//hapus
		$this->load->model('Role_model');
		$where = ['id' => $id];
		$this->Role_model->hapus_data($where, 'user_role');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Role berhasil di hapus!</div>');
		redirect('admin');
	}
	public function tambah_menu()
	{
		$data['tittle'] = 'LPPM UTY';
		$data['aktif'] = 'Daftar Menu';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


		$this->form_validation->set_rules('menu', 'Menu', 'required');
		$data['menu'] = $this->db->get('user_menu')->result_array();

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/menu', $data);
			$this->load->view('templates/footer');
		} else {
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu berhasil ditambah</div>');
			redirect('admin/tambah_menu');
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
			$this->load->view('templates/topbar_admin', $data);
			$this->load->view('admin/submenu', $data);
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
			redirect('admin/submenu');
		}
	}

	public function hak_akses()
	{
		$data['tittle'] = 'LPPM UTY';
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
		$this->load->view('admin/hak_akses', $data);
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
		redirect('admin/hak_akses');
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
		redirect('admin/hak_akses');
	}

	public function hapus_hak_akses($id)
	{
		$this->load->model('Menu_model');
		$where = array('id' => $id);

		$menu = $this->db->where($where)->get('user_access_menu')->row();

		$this->Menu_model->hapus_hak_akses($where, 'user_access_menu');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hak Akses Telah Dihapus</div>');
		redirect('admin/hak_akses');
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
		redirect('admin/tambah_menu');
	}

	public function hapus($id)
	{
		//hapus
		$this->load->model('Menu_model');
		$where = ['id' => $id];
		$this->Menu_model->hapus_data($where, 'user_menu');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Menu berhasil di hapus!</div>');
		redirect('admin/tambah_menu');
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
		redirect('admin/submenu');
	}
	public function hapus_sub($id)
	{
		$this->load->model('Menu_model');
		//hapus_sub
		$where = ['id' => $id];
		$this->Menu_model->hapus_sub($where, 'user_sub_menu');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Sub Menu berhasil di hapus!</div>');
		redirect('admin/submenu');
	}
}
