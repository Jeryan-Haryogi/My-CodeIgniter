<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Bas_model');
	}
	public function index()
	{
		$data['title'] = 'Halaman Login';
		$this->load->view('thamplate/auth_header', $data);
		$this->load->view('admin/login');
		$this->load->view('thamplate/auth_footer');
	}
	public function Ck_login()
	{
		$data['title'] = 'Halaman Login';
			$this->form_validation->set_rules('username', 'username', 'required|trim');
			$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('thamplate/auth_header', $data);
			$this->load->view('admin/login');
			$this->load->view('thamplate/auth_footer');
		}else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$query = $this->db->get_where('users', ['name' => $username])->row_array();
			if ($query == TRUE) {
				if ($query['is_active'] == 1) {
					if (password_verify($password,$query['password'])) {
						$data = ['username' => $query['name'],'role_id' => $query['role_id']];
						$this->session->set_userdata($data);
						if ($query['role_id'] == 1) {
							redirect('admin');
						} else {
							$this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Anda Bukan Administrator</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>');
						redirect('Control');
						}

					}else {
						$this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>password Anda Salah</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>');
						redirect('Control');	
					}
				}else {
					$this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Anda Belum Teraktivasi</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
					redirect('Control');	
				}
			} else {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Anda Bukan Admin</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('Control');
			}
		}
	}
	public function logout()
	{
		$this->session->set_userdata('email');
		$this->session->set_userdata('role_id');
		$this->session->set_flashdata('flash', '<div class="alert alert-succes alert-dismissible fade show" role="alert">
			<strong>Anda Berhasil Logout</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('Control');
	}
}