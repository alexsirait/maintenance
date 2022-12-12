<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_WO extends CI_Controller {
	public function index()
	{
		$this->load->model('M_WO');
		$data['dataReport'] = $this->M_WO->tampil_data()->result();

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('report_wo', $data);
		$this->load->view('templates/footer');
	}
}
