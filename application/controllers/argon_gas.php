<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Argon_Gas extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('argon_gas', $data);
		$this->load->view('templates/footer');
	}
}
