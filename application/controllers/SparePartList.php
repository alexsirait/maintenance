<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SparePartList extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('pr_data');
		$this->load->view('templates/footer');
	}

	public function po_data()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('po_data');
		$this->load->view('templates/footer');
	}

	public function payment()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('payment');
		$this->load->view('templates/footer');
	}
}
