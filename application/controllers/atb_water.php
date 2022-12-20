<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atb_Water extends CI_Controller {
	
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
		$this->load->view('atb_water', $data);
		$this->load->view('templates/footer');
	}
}
