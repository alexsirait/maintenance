<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}
	
	public function equipment_list()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('equipment_list');
		$this->load->view('templates/footer');
	}

	public function add_equipment()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('add_equipment');
		$this->load->view('templates/footer');
	}

	public function preventive_maintenance()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('preventive_maintenance');
		$this->load->view('templates/footer');
	}

	public function add_maintenance()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('add_maintenance');
		$this->load->view('templates/footer');
	}
}
