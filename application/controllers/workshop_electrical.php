<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workshop_Electrical extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('workshop_electrical');
		$this->load->view('templates/footer');
	}
}
