<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_Back_User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Login_model');
		$this->load->model('User_model');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('security');
	}

	public function index()
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('navbar_user');
			$this->load->view('user/header_user', $data);
			$this->load->view('footer');
			//   $this->load->view('index');
		}
	}

	public function dashboard()
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('header_user', $data);
			$this->load->view('navbar_user');
			$this->load->view('footer');
			//   $this->load->view('index');
		}
	}

	public function data_kos($id)
	{
		$this->load->helper('text');
		$data['sql'] = $this->User_model->info_kos($id);
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('header', $data);
			$this->load->view('menu_user', $data);
			$this->load->view('footer');
			$this->load->view('view_kos', $data);
		}
	}

	public function data_user($id)
	{
		$this->load->helper('text');
		$data['sql'] = $this->User_model->info_user($id);
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			// $this->load->view('header',$data);
			$this->load->view('navbar_user', $data);
			$this->load->view('view_profile', $data);
		}
	}

	function edit_user($id)
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$where = array('id_user' => $id);
		$data['user'] = $this->User_model->edit_data_user($where, 'tb_user')->result();

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('navbar_user', $data);
			// $this->load->view('menu_user');
			$this->load->view('v_edit_user_pengguna');
		}
	}

	function proses_update_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$jk = $this->input->post('jk');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$id_role = $this->input->post('id_role');
		$id = $this->input->post('id_user');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'fullname' => $fullname,
			'jk' => $jk,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'id_role' => $id_role
		);

		$where = array(
			'id_user' => $id
		);

		$this->User_model->update_data_user($where, $data, 'tb_user');
		redirect('Main_Back_User/data_user/' . $this->session->userdata('id_user'));
	}

	public function save_kos()
	{
		if ($_POST) {
			date_default_timezone_set('Asia/Jakarta');
			$this->load->helper('url');
			$this->load->library('Image_lib');
			$this->load->library('upload');

			$id_user 	= $this->session->userdata('id_user');
			$id_kos 	= $this->input->post('id_kos');
			$nama 		= $this->input->post('nama');
			$tipe		= $this->input->post('tipe');
			$deskripsi	= $this->input->post('deskripsi');
			$alamat		= $this->input->post('alamat');
			$kota		= $this->input->post('kota');
			$harga		= $this->input->post('harga');
			$status		= $this->input->post('status');
			$stat		= $this->input->post('stat');

			$slug		= url_title($nama, 'dash', TRUE);
			$date       = date('Y-m-d H:i:s');
			$time       = date('H:i:s');

			if ($stat == 'new') {

				if ($_FILES['image_header']['name'] != "") {
					$config['upload_path'] = 'file/kos_image';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '2000';
					$config['remove_spaces'] = true;
					$config['overwrite'] = false;
					$config['encrypt_name'] = false;
					$config['max_width']  = '';
					$config['max_height']  = '';
					$this->load->library('upload', 'image_lib', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image_header')) {
						print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
						exit();
					} else {
						$image = $this->upload->data();

						if ($image['file_name']) {
							$data['file1'] = $image['file_name'];
						}
						$image_header = $data['file1'];
					}
				}

				$data = array(
					'date'		=> $date,
					'time'		=> $time,
					'image_header' => $image_header,
					'status'		=> $status,
					'slug'		=> $slug,
					'nama'		=> $nama,
					'tipe'		=> $tipe,
					'deskripsi' 	=> $deskripsi,
					'alamat'		=> $alamat,
					'kota'		=> $kota,
					'harga'		=> $harga,
					'id_user'		=> $id_user
				);
				$this->User_model->insertdata('tbl_kos', $data);
				redirect('Main_Back_User');
			} else {
				$this->db->where('id_kos', $id_kos);
				$query  = $this->db->get('tbl_kos');
				$row  = $query->row();

				unlink("./file/kos_image/$row->image_header");

				if ($_FILES['image_header']['name'] != "") {
					$config['upload_path'] = 'file/kos_image';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '2000';
					$config['remove_spaces'] = true;
					$config['overwrite'] = false;
					$config['encrypt_name'] = false;
					$config['max_width']  = '';
					$config['max_height']  = '';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image_header')) {
						print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
						exit();
					} else {
						$image = $this->upload->data();
						if ($image['file_name']) {
							$data['file1'] = $image['file_name'];
						}
						$image_header = $data['file1'];
					}
				}

				$data = array(
					'date'		=> $date,
					'time'		=> $time,
					'image_header'		=> $image_header,
					'status'		=> $status,
					'id_user'		=> $id_user,
					'slug'		=> $slug,
					'nama'		=> $nama,
					'tipe'		=> $tipe,
					'deskripsi' 	=> $deskripsi,
					'alamat'		=> $alamat,
					'kota'		=> $kota,
					'harga'		=> $harga,
				);

				$this->User_model->updatedata('tbl_kos', $data, array('id_kos' => $id_kos));
				redirect('Main_Back_User');
			}
		} else {
			echo "Page Not Found";
		}
	}

	public function tambah_kos()
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data2 = array(
			//'id_user'	=> '',
			'id_kos'	=> '',
			'status'	=> '',
			'slug'		=> '',
			'nama'		=> '',
			'image'		=> '',
			'tipe'		=> '',
			'deskripsi' => '',
			'alamat'	=> '',
			'kota'		=> '',
			'harga'		=> '',
			'stat'		=> 'new',

		);

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('header', $data);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('v_tambah_kos', $data2);
		}
	}

	function edit_kos($id)
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$where = array('id_kos' => $id);
		$data['kos'] = $this->User_model->edit_data_user($where, 'tbl_kos')->result();

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('header', $data);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('v_edit_kos');
		}
	}


	function proses_update_kos()
	{
		$this->load->helper('url');
		$this->load->library('Image_lib');
		$this->load->library('upload');

		$id_user 	= $this->session->userdata('id_user');
		$id_kos 	= $this->input->post('id_kos');
		$nama 		= $this->input->post('nama');
		$tipe		= $this->input->post('tipe');
		$deskripsi	= $this->input->post('deskripsi');
		$alamat		= $this->input->post('alamat');
		$kota		= $this->input->post('kota');
		$harga		= $this->input->post('harga');
		$status		= $this->input->post('status');
		$stat		= $this->input->post('stat');

		$slug		= url_title($nama, 'dash', TRUE);
		$date       = date('Y-m-d H:i:s');
		$time       = date('H:i:s');

		$this->db->where('id_kos', $id_kos);
		$query  = $this->db->get('tbl_kos');
		$row  = $query->row();

		unlink("./file/kos_image/$row->image_header");

		if ($_FILES['image_header']['name'] != "") {
			$config['upload_path'] = 'file/kos_image';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2000';
			$config['remove_spaces'] = true;
			$config['overwrite'] = false;
			$config['encrypt_name'] = false;
			$config['max_width']  = '';
			$config['max_height']  = '';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image_header')) {
				print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
				exit();
			} else {
				$image = $this->upload->data();
				if ($image['file_name']) {
					$data['file1'] = $image['file_name'];
				}
				$image_header = $data['file1'];
			}
		}

		$data = array(
			'date'		=> $date,
			'time'		=> $time,
			'image_header'		=> $image_header,
			'status'		=> $status,
			'id_user'		=> $id_user,
			'slug'		=> $slug,
			'nama'		=> $nama,
			'tipe'		=> $tipe,
			'deskripsi' 	=> $deskripsi,
			'alamat'		=> $alamat,
			'kota'		=> $kota,
			'harga'		=> $harga,
		);

		$this->User_model->updatedata('tbl_kos', $data, array('id_kos' => $id_kos));
		redirect('Main_Back_User');
	}

	public function delete_kos($id_kos = 0)
	{

		$this->db->where('id_kos', $id_kos);
		$query = $this->db->get('tbl_kos');
		$row = $query->row();

		unlink("./file/kos_image/$row->image_header");
		$hasil = $this->User_model->deldata('tbl_kos', array('id_kos' => $id_kos));
		redirect('Main_Back_User/data_kos/' . $this->session->userdata('id_user'));
	}

	public function daftar_user()
	{
		$this->load->view('v_daftar_user');
	}

	public function proses_daftar_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		// $foto = $this->input->post('foto');
		$jk = $this->input->post('jk');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$id_role = $this->input->post('id_role');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'fullname' => $fullname,
			// 'foto' => $foto,
			'jk' => $jk,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'id_role' => $id_role,
		);
		$this->User_model->input_data_user($data, 'tb_user');
		$this->session->set_flashdata('suksesdaftar', '<font color ="green">Anda berhasil daftar, Silahkan login.</font>');
		redirect('Login');
	}



	public function semua_kos($page = 0)
	{
		//config
		$config['base_url'] = site_url('Main_Back_User/semua_kos');
		$config['total_rows'] = $this->User_model->countAllkos();
		$config['per_page'] = 3;


		$data['sql'] = $this->User_model->info_beberapa_kos($config['per_page'], $page);
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));

		//Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		//inisial
		$this->pagination->initialize($config);

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('navbar_user', $data);
			$this->load->view('user/search', $data);
		}
	}

	public function kos_putra()
	{
		$data['sql'] = $this->User_model->info_kos_putra();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {

			$this->load->view('header', $data);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('kategorikos_user/putra', $data);
		}
	}

	public function kos_putri()
	{
		$data['sql'] = $this->User_model->info_kos_putri();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {

			$this->load->view('header', $data);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('kategorikos_user/putri', $data);
		}
	}

	public function kos_campur()
	{
		$data['sql'] = $this->User_model->info_kos_campur();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('header', $data);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('kategorikos_user/campur', $data);
		}
	}

	public function kos_jakarta()
	{
		$data['sql'] = $this->User_model->info_kos_jakarta();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('navbar_user');
			$this->load->view('user/jakarta_user', $data);
		}
	}

	public function kos_yogyakarta()
	{
		$data['sql'] = $this->User_model->info_kos_yogyakarta();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('navbar_user');
			$this->load->view('user/yogyakarta_user', $data);
		}
	}

	public function kos_surabaya()
	{
		$data['sql'] = $this->User_model->info_kos_surabaya();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('navbar_user');
			$this->load->view('user/surabaya_user', $data);
		}
	}

	public function view_konten_kos($slug = '')
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));

		$this->load->helper('text');
		date_default_timezone_set('Asia/Jakarta');
		$data_kos = $this->User_model->getKos("where slug = '$slug'")->result_array();

		$data2 = array(
			'nama'	=> strip_tags($data_kos[0]['nama']),
			'id_user'			=> $data_kos[0]['id_user'],
			'deskripsi'			=> $data_kos[0]['deskripsi'],
			'alamat'			=> $data_kos[0]['alamat'],
			'slug'				=> $data_kos[0]['slug'],
			'date'				=> $data_kos[0]['date'],
			'time'				=> $data_kos[0]['time'],
			'kota'				=> $data_kos[0]['kota'],
			'harga'				=> $data_kos[0]['harga'],
			'no_hp'				=> $data_kos[0]['no_hp'],
			'fullname'				=> $data_kos[0]['fullname'],
			'tipe'				=> $data_kos[0]['tipe'],
			'image_header'		=> $data_kos[0]['image_header']
		);

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('navbar_user');
			$this->load->view('user/detail_kos', $data2, $data);
		}
	}


	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['sql'] = $this->User_model->get_keyword($keyword);
		$this->load->view('navbar_user', $data);
		// $this->load->view('user/menu');
		$this->load->view('user/search', $data);
		//   $this->load->view('footer');
	}

	public function filter()
	{
		$kota = $this->input->post('kota');
		$tipe = $this->input->post('tipe');
		$data['sql'] = $this->User_model->filter($kota, $tipe)->result();
		$this->load->view('navbar', $data);
		$this->load->view('user/search', $data);
	}
}
