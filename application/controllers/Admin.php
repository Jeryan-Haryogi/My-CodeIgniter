<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Bas_model');
		if (!$this->session->userdata('username')) {
			redirect('Control');
			# code...
		}
		if ($this->session->userdata('role_id') != 1 ) {
			redirect('user');
			# code...
		}
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['name' => $this->session->userdata('username')])->row_array();
		$data['title'] = 'Halaman Admin';
		$data['data'] = $this->Bas_model->getAllData();
		$this->load->view('thamplate/header_admin', $data);
		$this->load->view('thamplate/sidebar_admin');
		$this->load->view('thamplate/topbar', $data);
		$this->load->view('admin/index',$data);
	}
}