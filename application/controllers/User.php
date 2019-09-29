<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __Construct()
	{
		parent::__Construct();
		if (!$this->session->userdata('email')) {
			redirect('Auth');
			# code...
		}
		if ($this->session->userdata('role_id') != 2 ) {
			redirect('Admin');
			die();
			# code...
		}	
	}
	public function index()
	{
		$data['title'] = 'Halaman Utama';
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->session->userdata('role_id');
		$this->load->view('thamplate/header', $data);
		$this->load->view('thamplate/sidebar', $data);
		$this->load->view('thamplate/topbar', $data);
		$this->load->view('user/index');
		$this->load->view('thamplate/footer');
	}
	public function upload_profile()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Halaman Profile';
		$this->load->view('thamplate/header', $data);
		$this->load->view('thamplate/sidebar');
		$this->load->view('thamplate/topbar', $data);
		$this->load->view('user/upload');
		$this->load->view('thamplate/footer');
	}
}