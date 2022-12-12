<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Argon_Gas extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('argon_gas');
		$this->load->view('templates/footer');
	}
}
