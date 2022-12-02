<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SparePartList extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('sparepartlist');
		$this->load->view('templates/footer');
	}
}
