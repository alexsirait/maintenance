<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_WO extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('form_wo2');
		$this->load->view('templates/footer');
	}
}
