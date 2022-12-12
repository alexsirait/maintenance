<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atb_Water extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('atb_water');
		$this->load->view('templates/footer');
	}
}
