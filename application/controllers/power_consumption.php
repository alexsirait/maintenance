<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Power_Consumption extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('power_consumption');
		$this->load->view('templates/footer');
	}
}
