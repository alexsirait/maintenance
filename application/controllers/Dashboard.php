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
		$data["preventive_maintenance_form"] = $this->DashboardModel->buatangkapreventive();

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

	public function add_maintenance()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('add_maintenance');
		$this->load->view('templates/footer');
	}

	// Masterlist of the Equipment
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
			$this->load->view('add_equipment',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->DashboardModel->addequipment($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Masterlist of the Equipment Data added successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
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
        $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Masterlist of the Equipment Data Deleted Succesfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
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
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Masterlist of the Equipment Edit data success!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return  redirect('Dashboard/checkreport_equipment');
		}
	}

	// Planned Preventive Maintenance
	public function save_preventive()
  	{
		$id = $this->input->post('id');
		$machine = $this->input->post('machine');
		$description = $this->input->post('description');
		$section = $this->input->post('section');
		$ww01 = $this->input->post('ww01');
		$ww02 = $this->input->post('ww02');
		$ww03 = $this->input->post('ww03');
		$ww04 = $this->input->post('ww04');
		$ww05 = $this->input->post('ww05');
		$ww06 = $this->input->post('ww06');
		$ww07 = $this->input->post('ww07');
		$ww08 = $this->input->post('ww08');
		$ww09 = $this->input->post('ww09');
		$ww10= $this->input->post('ww10');
		$ww10_1 = $this->input->post('ww10_1');
		$ww11 = $this->input->post('ww11');
		$ww12 = $this->input->post('ww12');
		$ww13 = $this->input->post('ww13');
		$ww14 = $this->input->post('ww14');
		$ww14_1 = $this->input->post('ww14_1');
		$ww15 = $this->input->post('ww15');
		$ww16 = $this->input->post('ww16');
		$ww17 = $this->input->post('ww17');
		$ww18 = $this->input->post('ww18');
		$ww18_1 = $this->input->post('ww18_1');
		$ww19 = $this->input->post('ww19');
		$ww20 = $this->input->post('ww20');
		$ww21 = $this->input->post('ww21');
		$ww22 = $this->input->post('ww22');
		$ww23 = $this->input->post('ww23');
		$ww23_1 = $this->input->post('ww23_1');
		$ww24 = $this->input->post('ww24');
		$ww25 = $this->input->post('ww25');
		$ww26 = $this->input->post('ww26');
		$ww27 = $this->input->post('ww27');
		$ww27_1 = $this->input->post('ww27_1');
		$ww28 = $this->input->post('ww28');
		$ww29 = $this->input->post('ww29');
		$ww30 = $this->input->post('ww30');
		$ww31 = $this->input->post('ww31');
		$ww32 = $this->input->post('ww32');
		$ww33 = $this->input->post('ww33');
		$ww34 = $this->input->post('ww34');
		$ww35 = $this->input->post('ww35');
		$ww36 = $this->input->post('ww36');
		$ww37 = $this->input->post('ww37');
		$ww38 = $this->input->post('ww38');
		$ww39 = $this->input->post('ww39');
		$ww40 = $this->input->post('ww40');
		$ww40_1 = $this->input->post('ww40_1');
		$ww41 = $this->input->post('ww41');
		$ww42 = $this->input->post('ww42');
		$ww43 = $this->input->post('ww43');
		$ww44 = $this->input->post('ww44');
		$ww45 = $this->input->post('ww45');
		$ww45_1 = $this->input->post('ww45_1');
		$ww46 = $this->input->post('ww46');
		$ww47 = $this->input->post('ww47');
		$ww48 = $this->input->post('ww48');
		$ww49 = $this->input->post('ww49');
		$ww49_1 = $this->input->post('ww49_1');
		$ww50 = $this->input->post('ww50');
		$ww51 = $this->input->post('ww51');
		$ww52 = $this->input->post('ww52');
		$ww53 = $this->input->post('ww53');
		
		
		$data = Array(
			"id" => $id,
			"machine" => $machine,
			"description" => $description,
			"section" => $section,
			"ww01" => $ww01,
			"ww02" => $ww02,
			"ww03" => $ww03,
			"ww04" => $ww04,
			"ww05" => $ww05,
			"ww06" => $ww06,
			"ww07" => $ww07,
			"ww08" => $ww08,
			"ww09" => $ww09,
			"ww10" => $ww10,
			"ww10_1" => $ww10_1,
			"ww11" => $ww11,
			"ww12" => $ww12,
			"ww13" => $ww13,
			"ww14" => $ww14,
			"ww14_1" => $ww14_1,
			"ww15" => $ww15,
			"ww16" => $ww16,
			"ww17" => $ww17,
			"ww18" => $ww18,
			"ww18_1" => $ww18_1,
			"ww19" => $ww19,
			"ww20" => $ww20,
			"ww21" => $ww21,
			"ww22" => $ww22,
			"ww23" => $ww23,
			"ww23_1" => $ww23_1,
			"ww24" => $ww24,
			"ww25" => $ww25,
			"ww26" => $ww26,
			"ww27" => $ww27,
			"ww27_1" => $ww27_1,
			"ww28" => $ww28,
			"ww29" => $ww29,
			"ww30" => $ww30,
			"ww31" => $ww31,
			"ww32" => $ww32,
			"ww33" => $ww33,
			"ww34" => $ww34,
			"ww35" => $ww35,
			"ww36" => $ww36,
			"ww37" => $ww37,
			"ww38" => $ww38,
			"ww39" => $ww39,
			"ww40" => $ww40,
			"ww40_1" => $ww40_1,
			"ww41" => $ww41,
			"ww42" => $ww42,
			"ww43" => $ww43,
			"ww44" => $ww44,
			"ww45" => $ww45,
			"ww45_1" => $ww45_1,
			"ww46" => $ww46,
			"ww47" => $ww47,
			"ww48" => $ww48,
			"ww49" => $ww49,
			"ww49_1" => $ww49_1,
			"ww50" => $ww50,
			"ww51" => $ww51,
			"ww52" => $ww52,
			"ww53" => $ww53,
																				
		);

		$this->form_validation->set_rules('machine', 'machine', 'required');				
		$this->form_validation->set_rules('description', 'description', 'required');				
		$this->form_validation->set_rules('section', 'section', 'required');				

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('add_maintenance',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->DashboardModel->addpreventive($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Planned Preventive Maintenance Data added successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return redirect('Dashboard/checkreport_preventive');
		}
  	}

	public function checkreport_preventive()
	{
		$data["preventive_maintenance_form"] = $this->DashboardModel->getpreventiveForm();		  

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('preventive_maintenance',$data);
		$this->load->view('templates/footer');
	}

	public function deleteReportPreventive($id)
	{		
		$id = $this->DashboardModel->hapuspreventive($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Planned Preventive Maintenance Data Deleted Succesfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Dashboard/checkreport_preventive');
	}

	public function ubah_preventive($id)
	{
		$data["preventive_maintenance_form"] = $this->DashboardModel->edit_preventive($id);

		$this->form_validation->set_rules('machine', 'Machine', 'required');
		$this->form_validation->set_rules('description', 'Applicable Machine Description', 'required');
		$this->form_validation->set_rules('section', 'Section Required', 'required');		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('ubah_maintenance',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->DashboardModel->editpreventive();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Planned Preventive Maintenance Edit data success!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return  redirect('Dashboard/checkreport_preventive');
		}
	}

	// PPM vs Actual
	public function PPMvsActual()
	{
		$data["preventive_maintenance_form"] = $this->DashboardModel->getpreventiveForm();
		$data['TotalD'] = $this->DashboardModel->hitungJumlahPretentive();
		// $data['total_pretentive'] = $this->DashboardModel->hitungJumlahPretentive();

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('PPMvsActual', $data);
		$this->load->view('templates/footer');
	}
}
