<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_Water extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('company_water');
		$this->load->view('templates/footer');
	}
}
