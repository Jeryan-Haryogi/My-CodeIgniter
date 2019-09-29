<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Bas_model');
	}
	public function index()
	{
		$data['title'] = 'Halaman Login';
		$this->load->view('thamplate/Auth_header', $data);
		$this->load->view('auth/index');
		$this->load->view('thamplate/Auth_footer');

	}
	public function Ck_Login()
	{
		
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$data['title'] = 'Halaman Login';
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('thamplate/Auth_header', $data);
			$this->load->view('auth/index');
			$this->load->view('thamplate/Auth_footer');
		}
		else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);
		$query = $this->db->get_where('users', array('email' => $email))->row_array();
		if ($query == TRUE) {
			if ($query['is_active'] == 1) {
				# code...
				if (password_verify($password, $query['password'])) {
					$data = [
						'email' => $query['email'],
						'role_id' => $query['role_id'] 
					];
					$this->session->set_userdata($data);
					if ($query['role_id'] == 2) {
						redirect('User');
					} else {
						$this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Silahkan Buat akun Terlebih dahalu</strong> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							</div>');
						redirect('Auth');	
					}
				}else {
					$this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Password Anda Salah</strong> 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
					redirect('Auth');
				}
			}
			else {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Anda Belum Verifikasi Email</strong> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('Auth');
			}
		}
		else {
			$this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Mendaftar Akun</strong> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('Auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Anda Telah Berhasil Logout</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>');
		redirect('Auth');	
	}

	public function Registrasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Valid Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]|exact_length[8]', [
			'matches' => 'Password Not matches',
			'exact_length' => 'Password Not Long'
		]);
		$this->form_validation->set_rules('password2', 'Confrimasi Password', 'required|trim|matches[password1]');

		$data['title'] = 'Halaman Registrasi';
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('thamplate/Auth_header', $data);
			$this->load->view('auth/registrasi');
			$this->load->view('thamplate/Auth_footer');
	# code...
		}
		else {
			$this->Bas_model->registrasi();
			$this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Anda Telah Mendaftar Akun</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('Auth');
		}
	}
}
