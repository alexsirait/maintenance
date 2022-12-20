<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_WO extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	
	public function index()
	{
		$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
		$this->load->view('form_wo', $data);
		$this->load->view('templates/footer');
	}

	public function store_form_wo()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('order_by', 'Order by', 'required');
		$this->form_validation->set_rules('day_date_time_order', 'Day, Date & Time', 'required');
		$this->form_validation->set_rules('wo_received_by', 'WO Received by', 'required');
		$this->form_validation->set_rules('day_date_time_received', 'Day, Date & Time', 'required');
		$this->form_validation->set_rules('order_description', 'Order Description', 'required');
		$this->form_validation->set_rules('machine_tag_no', 'Machine & Tag No.', 'required');
		$this->form_validation->set_rules('start_repair', 'Start Repair', 'required');
		$this->form_validation->set_rules('serial_no', 'Serial No', 'required');
		$this->form_validation->set_rules('completed_repair', 'Completed Repair', 'required');
		$this->form_validation->set_rules('detail_problem', 'Detail of Problem', 'required');
		$this->form_validation->set_rules('root_cause', 'Root Cause', 'required');
		$this->form_validation->set_rules('corrective_action', 'Corrective Action', 'required');
		$this->form_validation->set_rules('preventive_action', 'Preventive Action', 'required');
		$this->form_validation->set_rules('part_description_1', 'Part Description', 'required');
		$this->form_validation->set_rules('part_description_2', 'Part Description', 'required');
		$this->form_validation->set_rules('part_description_3', 'Part Description', 'required');
		$this->form_validation->set_rules('part_no_1', 'Part No.', 'required');
		$this->form_validation->set_rules('part_no_2', 'Part No.', 'required');
		$this->form_validation->set_rules('part_no_3', 'Part No.', 'required');
		$this->form_validation->set_rules('qty_1', 'Qty', 'required');
		$this->form_validation->set_rules('qty_2', 'Qty', 'required');
		$this->form_validation->set_rules('qty_3', 'Qty', 'required');
		$this->form_validation->set_rules('remarks_1', 'Remarks', 'required');
		$this->form_validation->set_rules('remarks_2', 'Remarks', 'required');
		$this->form_validation->set_rules('remarks_3', 'Remarks', 'required');
		$this->form_validation->set_rules('ordered_by_name', 'Ordered by Name', 'required');
		$this->form_validation->set_rules('repaired_by_name', 'Repaired by Name', 'required');
		$this->form_validation->set_rules('head_production_name', 'By Head Production Name', 'required');
		$this->form_validation->set_rules('head_maintenance_name', 'By Head Maintenance Name', 'required');

		$order_by = $this->input->post('order_by');
		$day_date_time_order  = $this->input->post('day_date_time_order');
		$wo_received_by = $this->input->post('wo_received_by');
		$day_date_time_received = $this->input->post('day_date_time_received');
		$order_description = $this->input->post('order_description');
		$machine_tag_no = $this->input->post('machine_tag_no');
		$start_repair = $this->input->post('start_repair');
		$serial_no = $this->input->post('serial_no');
		$completed_repair = $this->input->post('completed_repair');
		$detail_problem = $this->input->post('detail_problem');
		$root_cause = $this->input->post('root_cause');
		$corrective_action = $this->input->post('corrective_action');
		$preventive_action = $this->input->post('preventive_action');
		$part_description_1 = $this->input->post('part_description_1');
		$part_description_2 = $this->input->post('part_description_2');
		$part_description_3 = $this->input->post('part_description_3');
		$part_no_1 = $this->input->post('part_no_1');
		$part_no_2 = $this->input->post('part_no_2');
		$part_no_3 = $this->input->post('part_no_3');
		$qty_1 = $this->input->post('qty_1');
		$qty_2 = $this->input->post('qty_2');
		$qty_3 = $this->input->post('qty_3');
		$remarks_1 = $this->input->post('remarks_1');
		$remarks_2 = $this->input->post('remarks_2');
		$remarks_3 = $this->input->post('remarks_3');
		$ordered_by_name = $this->input->post('ordered_by_name');
		$repaired_by_name = $this->input->post('repaired_by_name');
		$head_production_name = $this->input->post('head_production_name');
		$head_maintenance_name = $this->input->post('head_maintenance_name');
		$ordered_by = $_FILES['ordered_by'];
		if ($ordered_by!='') {
			$config['upload_path'] = './uploads/signature';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('ordered_by')) {
				echo "Upload Gagal"; die();
			} else {
				$ordered_by = $this->upload->data('file_name');
			}
		}
		$repaired_by = $_FILES['repaired_by'];
		if ($repaired_by!='') {
			$config['upload_path'] = './uploads/signature';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('repaired_by')) {
				echo "Upload Gagal"; die();
			} else {
				$repaired_by = $this->upload->data('file_name');
			}
		}
		$head_production = $_FILES['head_production'];
		if ($head_production!='') {
			$config['upload_path'] = './uploads/signature';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('head_production')) {
				echo "Upload Gagal"; die();
			} else {
				$head_production = $this->upload->data('file_name');
			}
		}
		$head_maintenance = $_FILES['head_maintenance'];
		if ($head_maintenance!='') {
			$config['upload_path'] = './uploads/signature';
			$config['allowed_types'] = 'jpg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('head_maintenance')) {
				echo "Upload Gagal"; die();
			} else {
				$head_maintenance = $this->upload->data('file_name');
			}
		}
		
		$data = Array(
			"order_by" => $order_by,
			"day_date_time_order" => $day_date_time_order,
			"wo_received_by" => $wo_received_by,
			"day_date_time_received" => $day_date_time_received,
			"order_description" => $order_description,
			"machine_tag_no" => $machine_tag_no,
			"start_repair" => $start_repair,
			"serial_no" => $serial_no,
			"completed_repair" => $completed_repair,
			"detail_problem" => $detail_problem,
			"root_cause" => $root_cause,
			"corrective_action" => $corrective_action,
			"preventive_action" => $preventive_action,
			"part_description_1" => $part_description_1,
			"part_description_2" => $part_description_2,
			"part_description_3" => $part_description_3,
			"part_no_1" => $part_no_1,
			"part_no_2" => $part_no_2,
			"part_no_3" => $part_no_3,
			"qty_1" => $qty_1,
			"qty_2" => $qty_2,
			"qty_3" => $qty_3,
			"remarks_1" => $remarks_1,
			"remarks_2" => $remarks_2,
			"remarks_3" => $remarks_3,
			"ordered_by" => $ordered_by,
			"ordered_by_name" => $ordered_by_name,
			"repaired_by" => $repaired_by,
			"repaired_by_name" => $repaired_by_name,
			"head_production" => $head_production,
			"head_production_name" => $head_production_name,
			"head_maintenance" => $head_maintenance,
			"head_maintenance_name" => $head_maintenance_name,														
		);

		if ($this->form_validation->run() != false) {
			$this->load->model('M_WO');
			$this->M_WO->store_wo($data);
			$this->session->set_flashdata('add_success', 'MAINTENANCE WORK ORDER Form has been successfully added. ✅');
			redirect('report_wo');
		} else {
			$data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('form_wo', $data);
			$this->load->view('templates/footer');
		}
	}

	public function edit_form($id)
	{
		$this->load->model('M_WO');
        $getID = array('id' => $id );
        $data['report'] =  $this->M_WO->edit_data($getID, 'wo_form')->result();
        
        $data['user'] = $this->db->get_where('employee', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('edit_form_wo', $data);
		$this->load->view('templates/footer');
	}

	public function delete_form($id)
	{
		$this->load->model('M_WO');
		$getID = array ('id' => $id);
        $this->M_WO->hapus($getID, 'wo_form');
		$this->session->set_flashdata('add_success', 'MAINTENANCE WORK ORDER Form has been successfully deleted. 🗑️');
        redirect('report_wo');
	}

	public function update_form_wo()
    {
		$this->load->model('M_WO');
        $id = $this->input->post('id');
		$order_by = $this->input->post('order_by');
		$day_date_time_order = $this->input->post('day_date_time_order');
		$wo_received_by = $this->input->post('wo_received_by');
		$day_date_time_received = $this->input->post('day_date_time_received');
		$order_description = $this->input->post('order_description');
		$machine_tag_no = $this->input->post('machine_tag_no');
		$start_repair = $this->input->post('start_repair');
		$serial_no = $this->input->post('serial_no');
		$completed_repair = $this->input->post('completed_repair');
		$detail_problem = $this->input->post('detail_problem');
		$root_cause = $this->input->post('root_cause');
		$corrective_action = $this->input->post('corrective_action');
		$preventive_action = $this->input->post('preventive_action');
		$part_description_1 = $this->input->post('part_description_1');
		$part_description_2 = $this->input->post('part_description_2');
		$part_description_3 = $this->input->post('part_description_3');
		$part_no_1 = $this->input->post('part_no_1');
		$part_no_2 = $this->input->post('part_no_2');
		$part_no_3 = $this->input->post('part_no_3');
		$qty_1 = $this->input->post('qty_1');
		$qty_2 = $this->input->post('qty_2');
		$qty_3 = $this->input->post('qty_3');
		$remarks_1 = $this->input->post('remarks_1');
		$remarks_2 = $this->input->post('remarks_2');
		$remarks_3 = $this->input->post('remarks_3');
		$ordered_by_name = $this->input->post('ordered_by_name');
		$repaired_by_name = $this->input->post('repaired_by_name');
		$head_production_name = $this->input->post('head_production_name');
		$head_maintenance_name = $this->input->post('head_maintenance_name');
		
		if ($this->input->post('ordered_by') != null || $this->input->post('ordered_by') != '') {
			$ordered_by = $this->input->post('ordered_by');	
		} else {
			$ordered_by = $_FILES['ordered_by'];	
		}
		
		if ($this->input->post('ordered_by') == null || $this->input->post('ordered_by') == '') {
			if ($ordered_by != '') {
				$config['upload_path'] = './uploads/signature';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('ordered_by')) {
					echo "Upload Gagal";
					die();
				} else {
					$ordered_by = $this->upload->data('file_name');
				}
			}
		}

		if ($this->input->post('repaired_by') != null || $this->input->post('repaired_by') != '') {
			$repaired_by = $this->input->post('repaired_by');	
		} else {
			$repaired_by = $_FILES['repaired_by'];	
		}
		
		if ($this->input->post('repaired_by') == null || $this->input->post('repaired_by') == '') {
			if ($repaired_by != '') {
				$config['upload_path'] = './uploads/signature';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('repaired_by')) {
					echo "Upload Gagal";
					die();
				} else {
					$repaired_by = $this->upload->data('file_name');
				}
			}
		}

		if ($this->input->post('head_production') != null || $this->input->post('head_production') != '') {
			$head_production = $this->input->post('head_production');	
		} else {
			$head_production = $_FILES['head_production'];	
		}
		
		if ($this->input->post('head_production') == null || $this->input->post('head_production') == '') {
			if ($head_production != '') {
				$config['upload_path'] = './uploads/signature';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('head_production')) {
					echo "Upload Gagal";
					die();
				} else {
					$head_production = $this->upload->data('file_name');
				}
			}
		}

		if ($this->input->post('head_maintenance') != null || $this->input->post('head_maintenance') != '') {
			$head_maintenance = $this->input->post('head_maintenance');	
		} else {
			$head_maintenance = $_FILES['head_maintenance'];	
		}
		
		if ($this->input->post('head_maintenance') == null || $this->input->post('head_maintenance') == '') {
			if ($head_maintenance != '') {
				$config['upload_path'] = './uploads/signature';
				$config['allowed_types'] = 'jpg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('head_maintenance')) {
					echo "Upload Gagal";
					die();
				} else {
					$head_maintenance = $this->upload->data('file_name');
				}
			}
		}

		$data = array(
			'id' => $id,
			'order_by' => $order_by,
			'day_date_time_order' => $day_date_time_order,
			'wo_received_by' => $wo_received_by,
			'day_date_time_received' => $day_date_time_received,
			'order_description' => $order_description,
			'machine_tag_no' => $machine_tag_no,
			'start_repair' => $start_repair,
			'serial_no' => $serial_no,
			'completed_repair' => $completed_repair,
			'detail_problem' => $detail_problem,
			'root_cause' => $root_cause,
			'corrective_action' => $corrective_action,
			'preventive_action' => $preventive_action,
			'part_description_1' => $part_description_1,
			'part_description_2' => $part_description_2,
			'part_description_3' => $part_description_3,
			'part_no_1' => $part_no_1,
			'part_no_2' => $part_no_2,
			'part_no_3' => $part_no_3,
			'qty_1' => $qty_1,
			'qty_2' => $qty_2,
			'qty_3' => $qty_3,
			'remarks_1' => $remarks_1,
			'remarks_2' => $remarks_2,
			'remarks_3' => $remarks_3,
			'ordered_by' => $ordered_by,
			'ordered_by_name' => $ordered_by_name,
			'repaired_by' => $repaired_by,
			'repaired_by_name' => $repaired_by_name,
			'head_production' => $head_production,
			'head_production_name' => $head_production_name,
			'head_maintenance' => $head_maintenance,
			'head_maintenance_name' => $head_maintenance_name,
		);

        $where = array(
            'id' => $id, 
        );

		$this->session->set_flashdata('add_success', 'MAINTENANCE WORK ORDER Form has been successfully updated. ✅');
        $this->M_WO->update_data($where, $data, 'wo_form');
        redirect('report_wo');
    }

}
