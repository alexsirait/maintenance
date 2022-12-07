<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data["equipment_form"] = $this->DashboardModel->buatangka();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
	
	// public function equipment_list()
	// {
	// 	$this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
	// 	$this->load->view('equipment_list');
	// 	$this->load->view('templates/footer');
	// }

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

		$this->DashboardModel->addequipment($data);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Data added successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		return redirect('Dashboard/checkreport_equipment');
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
}
