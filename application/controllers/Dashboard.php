<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["equipment_form"] = $this->DashboardModel->buatangka();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
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

	public function save_equipment()
  	{
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$machine_description = $this->input->post('machine_description');
		$family_name = $this->input->post('family_name');
		$type_of_machine = $this->input->post('type_of_machine');
		$model = $this->input->post('model');
		$serial = $this->input->post('serial');
		$capacity = $this->input->post('capacity');
		$product = $this->input->post('product');
		$year = $this->input->post('year');
		$location = $this->input->post('location');
		$status = $this->input->post('status');
		$group = $this->input->post('group');
		$pic = $this->input->post('pic');
		
		$data = Array(
			"id" => $id,
			"code" => $code,
			"machine_description" => $machine_description,
			"family_name" => $family_name,
			"type_of_machine" => $type_of_machine,
			"model" => $model,
			"serial" => $serial,
			"capacity" => $capacity,  
			"product" => $product,
			"year" => $year,
			"location" => $location,
			"status" => $status,
			"group" => $group,
			"pic" => $pic,																	
		);

		$this->form_validation->set_rules('code', 'Code', 'required');
		$this->form_validation->set_rules('machine_description', 'Applicable Machine Description', 'required');
		$this->form_validation->set_rules('family_name', 'Family Name Required', 'required');
		$this->form_validation->set_rules('type_of_machine', 'Type of Machine', 'required');
		$this->form_validation->set_rules('model', 'Model','required');
		$this->form_validation->set_rules('serial', 'Serial / Control', 'required');
		$this->form_validation->set_rules('capacity', 'Required Capacity');
		$this->form_validation->set_rules('product', 'Product', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');		
		$this->form_validation->set_rules('location', 'Location', 'required');		
		$this->form_validation->set_rules('status', 'Status', 'required');		
		$this->form_validation->set_rules('group', 'Group', 'required');		
		$this->form_validation->set_rules('pic', 'Pic', 'required');		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('ubah_equipment',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->DashboardModel->addequipment($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Data added successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return redirect('Dashboard/checkreport_equipment');
		}

		// $this->DashboardModel->addequipment($data);
		// $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Data added successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		// return redirect('Dashboard/checkreport_equipment');
  	}

	public function checkreport_equipment()
	{
		$data["equipment_form"] = $this->DashboardModel->getEquipmentForm();		  

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('equipment_list',$data);
		$this->load->view('templates/footer');
	}
	  
	public function deleteReport($id)
	{		
		$id = $this->DashboardModel->hapus($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Deleted Succesfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Dashboard/checkreport_equipment');
	}

	public function ubah_equipment($id)
	{
		$data["equipment_form"] = $this->DashboardModel->edit_equipment($id);

		$this->form_validation->set_rules('code', 'Code', 'required');
		$this->form_validation->set_rules('machine_description', 'Applicable Machine Description', 'required');
		$this->form_validation->set_rules('family_name', 'Family Name Required', 'required');
		$this->form_validation->set_rules('type_of_machine', 'Type of Machine', 'required');
		$this->form_validation->set_rules('model', 'Model','required');
		$this->form_validation->set_rules('serial', 'Serial / Control', 'required');
		$this->form_validation->set_rules('capacity', 'Required Capacity');
		$this->form_validation->set_rules('product', 'Product', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');		
		$this->form_validation->set_rules('location', 'Location', 'required');		
		$this->form_validation->set_rules('status', 'Status', 'required');		
		$this->form_validation->set_rules('group', 'Group', 'required');		
		$this->form_validation->set_rules('pic', 'Pic', 'required');		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('ubah_equipment',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->DashboardModel->editequipment();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Edit data success!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return  redirect('Dashboard/checkreport_equipment');
		}
	}
}
