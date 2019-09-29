<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bas_model extends CI_Model {
	public function registrasi()
	{
		$data = [
			'name' =>  htmlspecialchars($this->input->post('username', TRUE)),
			'email' => htmlspecialchars( $this->input->post('email', TRUE)),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'image' => 'default.png',
			'role_id' => 2,
			'is_active' => 1,
			'date_created' => time()
		];
		$this->db->insert('users', $data);
	}
	public function getAllData()
	{
		$query = $this->db->get('data');
		return $query->result_array();
	}
}