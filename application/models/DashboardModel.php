<?php
use CodeIgniter\Model;

class DashboardModel extends Ci_Model
{
	public function addequipment($item)
	{
		return $this->db->insert('equipment_form', $item);
	}

	public function addpreventive($item)
	{
		return $this->db->insert('preventive_maintenance_form', $item);
	}

	public function addpreventivefebruary($item)
	{
		return $this->db->insert('preventive_maintenance_form_february', $item);
	}
	public function addpreventivemarch($item)
	{
		return $this->db->insert('preventive_maintenance_form_march', $item);
	}
	public function addpreventiveapril($item)
	{
		return $this->db->insert('preventive_maintenance_form_april', $item);
	}

    public function getEquipmentForm()
    {
        return $this->db->get('equipment_form')->result_array();
    }

    public function getpreventiveForm()
    {
        return $this->db->get('preventive_maintenance_form')->result_array();
    }

    public function getpreventiveForm_february()
    {
        return $this->db->get('preventive_maintenance_form_february')->result_array();
    }

    public function getpreventiveForm_march()
    {
        return $this->db->get('preventive_maintenance_form_march')->result_array();
    }
    public function getpreventiveForm_april()
    {
        return $this->db->get('preventive_maintenance_form_april')->result_array();
    }

    public function hapus($id)
	{
        $this->db->where('id', $id);
	  	$this->db->delete("equipment_form");	  	
	}

    public function hapuspreventive($id)
	{
        $this->db->where('id', $id);
	  	$this->db->delete("preventive_maintenance_form");	  	
	}
    public function hapuspreventivefebruary($id)
	{
        $this->db->where('id', $id);
	  	$this->db->delete("preventive_maintenance_form_february");	  	
	}
    public function hapuspreventivemarch($id)
	{
        $this->db->where('id', $id);
	  	$this->db->delete("preventive_maintenance_form_march");	  	
	}
    public function hapuspreventiveapril($id)
	{
        $this->db->where('id', $id);
	  	$this->db->delete("preventive_maintenance_form_april");	  	
	}

    public function buatangka()
	{
		$this->db->select('*');
		return $this->db->get('equipment_form')->num_rows();
	}

    public function buatangkapreventive()
	{
		$this->db->select('*');
		return $this->db->get('preventive_maintenance_form')->num_rows();
	}

    public function buatangkawo()
	{
		$this->db->select('*');
		return $this->db->get('wo_form')->num_rows();
	}

	public function edit_equipment($id)
	{
		return $this->db->get_where('equipment_form', ['id' => $id])->row_array();
	}

	public function edit_preventive($id)
	{
		return $this->db->get_where('preventive_maintenance_form', ['id' => $id])->row_array();
	}

	public function edit_preventive_february($id)
	{
		return $this->db->get_where('preventive_maintenance_form_february', ['id' => $id])->row_array();
	}
	public function edit_preventive_march($id)
	{
		return $this->db->get_where('preventive_maintenance_form_march', ['id' => $id])->row_array();
	}
	public function edit_preventive_april($id)
	{
		return $this->db->get_where('preventive_maintenance_form_april', ['id' => $id])->row_array();
	}

	public function editequipment()
	{
		$equipment_form = [
			"code" => $this->input->post('code', true),
			"machine_description" => $this->input->post('machine_description', true),
			"family_name" => $this->input->post('family_name', true),
			"type_of_machine" => $this->input->post('type_of_machine', true),
			"model" => $this->input->post('model', true),
			"serial" => $this->input->post('serial', true),
			"capacity" => $this->input->post('capacity', true),
			"product" => $this->input->post('product', true),
			"year" => $this->input->post('year', true),
			"location" => $this->input->post('location', true),
			"status" => $this->input->post('status', true),
			"group" => $this->input->post('group', true),
			"pic" => $this->input->post('pic', true),	
		];
			$this->db->where('id', $this->input->post('id'));
       		$this->db->update('equipment_form', $equipment_form);
	}

	public function editpreventive()
	{
		$preventive_maintenance_form = [
			"machine" => $this->input->post('machine', true),
			"description" => $this->input->post('description', true),
			"ww01_1" => $this->input->post('ww01_1', true),			
			"ww01_2" => $this->input->post('ww01_2', true),			
			"ww01_3" => $this->input->post('ww01_3', true),			
			"ww01_4" => $this->input->post('ww01_4', true),			
			"ww01_5" => $this->input->post('ww01_5', true),			
			"ww01_6" => $this->input->post('ww01_6', true),			
			"ww01_7" => $this->input->post('ww01_7', true),			
			"ww02_8" => $this->input->post('ww02_8', true),			
			"ww02_9" => $this->input->post('ww02_9', true),			
			"ww02_10" => $this->input->post('ww02_10', true),			
			"ww02_11" => $this->input->post('ww02_11', true),			
			"ww02_12" => $this->input->post('ww02_12', true),			
			"ww02_13" => $this->input->post('ww02_13', true),			
			"ww02_14" => $this->input->post('ww02_14', true),			
			"ww03_15" => $this->input->post('ww03_15', true),			
			"ww03_16" => $this->input->post('ww03_16', true),			
			"ww03_17" => $this->input->post('ww03_17', true),			
			"ww03_18" => $this->input->post('ww03_18', true),			
			"ww03_19" => $this->input->post('ww03_19', true),			
			"ww03_20" => $this->input->post('ww03_20', true),			
			"ww03_21" => $this->input->post('ww03_21', true),			
			"ww04_22" => $this->input->post('ww04_22', true),			
			"ww04_23" => $this->input->post('ww04_23', true),			
			"ww04_24" => $this->input->post('ww04_24', true),			
			"ww04_25" => $this->input->post('ww04_25', true),			
			"ww04_26" => $this->input->post('ww04_26', true),			
			"ww04_27" => $this->input->post('ww04_27', true),			
			"ww04_28" => $this->input->post('ww04_28', true),			
			"ww05_29" => $this->input->post('ww05_29', true),			
			"ww05_30" => $this->input->post('ww05_30', true),			
			"ww05_31" => $this->input->post('ww05_31', true),			
		];
			$this->db->where('id', $this->input->post('id'));
       		$this->db->update('preventive_maintenance_form', $preventive_maintenance_form);
	}

	public function editpreventivefebruary()
	{
		$preventive_maintenance_form_february = [
			"machine" => $this->input->post('machine', true),
			"description" => $this->input->post('description', true),
			"ww01_1" => $this->input->post('ww01_1', true),			
			"ww01_2" => $this->input->post('ww01_2', true),			
			"ww01_3" => $this->input->post('ww01_3', true),			
			"ww01_4" => $this->input->post('ww01_4', true),			
			"ww02_5" => $this->input->post('ww02_5', true),			
			"ww02_6" => $this->input->post('ww02_6', true),			
			"ww02_7" => $this->input->post('ww02_7', true),			
			"ww02_8" => $this->input->post('ww02_8', true),			
			"ww02_9" => $this->input->post('ww02_9', true),			
			"ww02_10" => $this->input->post('ww02_10', true),			
			"ww02_11" => $this->input->post('ww02_11', true),			
			"ww03_12" => $this->input->post('ww03_12', true),			
			"ww03_13" => $this->input->post('ww03_13', true),			
			"ww03_14" => $this->input->post('ww03_14', true),			
			"ww03_15" => $this->input->post('ww03_15', true),			
			"ww03_16" => $this->input->post('ww03_16', true),			
			"ww03_17" => $this->input->post('ww03_17', true),			
			"ww03_18" => $this->input->post('ww03_18', true),			
			"ww04_19" => $this->input->post('ww04_19', true),			
			"ww04_20" => $this->input->post('ww04_20', true),			
			"ww04_21" => $this->input->post('ww04_21', true),			
			"ww04_22" => $this->input->post('ww04_22', true),			
			"ww04_23" => $this->input->post('ww04_23', true),			
			"ww04_24" => $this->input->post('ww04_24', true),			
			"ww04_25" => $this->input->post('ww04_25', true),			
			"ww05_26" => $this->input->post('ww05_26', true),			
			"ww05_27" => $this->input->post('ww05_27', true),			
			"ww05_28" => $this->input->post('ww05_28', true),			
		];
			$this->db->where('id', $this->input->post('id'));
       		$this->db->update('preventive_maintenance_form_february', $preventive_maintenance_form_february);
	}
	public function editpreventivemarch()
	{
		$preventive_maintenance_form_march = [
			"machine" => $this->input->post('machine', true),
			"description" => $this->input->post('description', true),
			"ww01_1" => $this->input->post('ww01_1', true),			
			"ww01_2" => $this->input->post('ww01_2', true),			
			"ww01_3" => $this->input->post('ww01_3', true),			
			"ww01_4" => $this->input->post('ww01_4', true),			
			"ww02_5" => $this->input->post('ww02_5', true),			
			"ww02_6" => $this->input->post('ww02_6', true),			
			"ww02_7" => $this->input->post('ww02_7', true),			
			"ww02_8" => $this->input->post('ww02_8', true),			
			"ww02_9" => $this->input->post('ww02_9', true),			
			"ww02_10" => $this->input->post('ww02_10', true),			
			"ww02_11" => $this->input->post('ww02_11', true),			
			"ww03_12" => $this->input->post('ww03_12', true),			
			"ww03_13" => $this->input->post('ww03_13', true),			
			"ww03_14" => $this->input->post('ww03_14', true),			
			"ww03_15" => $this->input->post('ww03_15', true),			
			"ww03_16" => $this->input->post('ww03_16', true),			
			"ww03_17" => $this->input->post('ww03_17', true),			
			"ww03_18" => $this->input->post('ww03_18', true),			
			"ww04_19" => $this->input->post('ww04_19', true),			
			"ww04_20" => $this->input->post('ww04_20', true),			
			"ww04_21" => $this->input->post('ww04_21', true),			
			"ww04_22" => $this->input->post('ww04_22', true),			
			"ww04_23" => $this->input->post('ww04_23', true),			
			"ww04_24" => $this->input->post('ww04_24', true),			
			"ww04_25" => $this->input->post('ww04_25', true),			
			"ww05_26" => $this->input->post('ww05_26', true),			
			"ww05_27" => $this->input->post('ww05_27', true),			
			"ww05_28" => $this->input->post('ww05_28', true),			
			"ww05_29" => $this->input->post('ww05_29', true),			
			"ww05_30" => $this->input->post('ww05_30', true),			
			"ww05_31" => $this->input->post('ww05_31', true),			
		];
			$this->db->where('id', $this->input->post('id'));
       		$this->db->update('preventive_maintenance_form_march', $preventive_maintenance_form_march);
	}
	public function editpreventiveapril()
	{
		$preventive_maintenance_form_april = [
			"machine" => $this->input->post('machine', true),
			"description" => $this->input->post('description', true),
			"ww01_1" => $this->input->post('ww01_1', true),			
			"ww02_2" => $this->input->post('ww02_2', true),			
			"ww02_3" => $this->input->post('ww02_3', true),			
			"ww02_4" => $this->input->post('ww02_4', true),			
			"ww02_5" => $this->input->post('ww02_5', true),			
			"ww02_6" => $this->input->post('ww02_6', true),			
			"ww02_7" => $this->input->post('ww02_7', true),			
			"ww02_8" => $this->input->post('ww02_8', true),			
			"ww03_9" => $this->input->post('ww03_9', true),			
			"ww03_10" => $this->input->post('ww03_10', true),			
			"ww03_11" => $this->input->post('ww03_11', true),			
			"ww03_12" => $this->input->post('ww03_12', true),			
			"ww03_13" => $this->input->post('ww03_13', true),			
			"ww03_14" => $this->input->post('ww03_14', true),			
			"ww03_15" => $this->input->post('ww03_15', true),			
			"ww04_16" => $this->input->post('ww04_16', true),			
			"ww04_17" => $this->input->post('ww04_17', true),			
			"ww04_18" => $this->input->post('ww04_18', true),			
			"ww04_19" => $this->input->post('ww04_19', true),			
			"ww04_20" => $this->input->post('ww04_20', true),			
			"ww04_21" => $this->input->post('ww04_21', true),			
			"ww04_22" => $this->input->post('ww04_22', true),			
			"ww05_23" => $this->input->post('ww05_23', true),			
			"ww05_24" => $this->input->post('ww05_24', true),			
			"ww05_25" => $this->input->post('ww05_25', true),			
			"ww05_26" => $this->input->post('ww05_26', true),			
			"ww05_27" => $this->input->post('ww05_27', true),			
			"ww05_28" => $this->input->post('ww05_28', true),			
			"ww05_29" => $this->input->post('ww05_29', true),			
			"ww06_30" => $this->input->post('ww06_30', true),			
		];
			$this->db->where('id', $this->input->post('id'));
       		$this->db->update('preventive_maintenance_form_april', $preventive_maintenance_form_april);
	}

	// PPM vs Actual
	public function hitungJumlahPretentive()
	{		
		$this->db->select('count(ww02)')->where('ww02','D');
		$query = $this->db->get('preventive_maintenance_form_lama');
		$TotalD = $query->row_array();
		return $TotalD['count(ww02)'];	
	}
}