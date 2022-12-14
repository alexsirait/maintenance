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

    public function getEquipmentForm()
    {
        return $this->db->get('equipment_form')->result_array();
    }

    public function getpreventiveForm()
    {
        return $this->db->get('preventive_maintenance_form')->result_array();
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
			"section" => $this->input->post('section', true),
			"ww01" => $this->input->post('ww01', true),
			"ww02" => $this->input->post('ww02', true),
			"ww03" => $this->input->post('ww03', true),
			"ww04" => $this->input->post('ww04', true),
			"ww05" => $this->input->post('ww05', true),
			"ww06" => $this->input->post('ww06', true),
			"ww07" => $this->input->post('ww07', true),
			"ww08" => $this->input->post('ww08', true),
			"ww09" => $this->input->post('ww09', true),
			"ww10" => $this->input->post('ww10', true),
			"ww10_1" => $this->input->post('ww10_1', true),
			"ww11" => $this->input->post('ww11', true),
			"ww12" => $this->input->post('ww12', true),
			"ww13" => $this->input->post('ww13', true),
			"ww14" => $this->input->post('ww14', true),
			"ww14_1" => $this->input->post('ww14_1', true),
			"ww15" => $this->input->post('ww15', true),
			"ww16" => $this->input->post('ww16', true),
			"ww17" => $this->input->post('ww17', true),
			"ww18" => $this->input->post('ww18', true),
			"ww18_1" => $this->input->post('ww18_1', true),
			"ww19" => $this->input->post('ww19', true),
			"ww20" => $this->input->post('ww20', true),
			"ww21" => $this->input->post('ww21', true),
			"ww22" => $this->input->post('ww22', true),
			"ww23" => $this->input->post('ww23', true),
			"ww23_1" => $this->input->post('ww23_1', true),
			"ww24" => $this->input->post('ww24', true),
			"ww25" => $this->input->post('ww25', true),
			"ww26" => $this->input->post('ww26', true),
			"ww27" => $this->input->post('ww27', true),
			"ww27_1" => $this->input->post('ww27_1', true),
			"ww28" => $this->input->post('ww28', true),
			"ww29" => $this->input->post('ww29', true),
			"ww30" => $this->input->post('ww30', true),
			"ww31" => $this->input->post('ww31', true),
			"ww32" => $this->input->post('ww32', true),
			"ww33" => $this->input->post('ww33', true),
			"ww34" => $this->input->post('ww34', true),
			"ww35" => $this->input->post('ww35', true),
			"ww36" => $this->input->post('ww36', true),
			"ww37" => $this->input->post('ww37', true),
			"ww38" => $this->input->post('ww38', true),
			"ww39" => $this->input->post('ww39', true),
			"ww40" => $this->input->post('ww40', true),
			"ww40_1" => $this->input->post('ww40_1', true),
			"ww41" => $this->input->post('ww41', true),
			"ww42" => $this->input->post('ww42', true),
			"ww43" => $this->input->post('ww43', true),
			"ww44" => $this->input->post('ww44', true),
			"ww45" => $this->input->post('ww45', true),
			"ww45_1" => $this->input->post('ww45_1', true),
			"ww46" => $this->input->post('ww46', true),
			"ww47" => $this->input->post('ww47', true),
			"ww48" => $this->input->post('ww48', true),
			"ww49" => $this->input->post('ww49', true),
			"ww49_1" => $this->input->post('ww49_1', true),
			"ww50" => $this->input->post('ww50', true),
			"ww51" => $this->input->post('ww51', true),
			"ww52" => $this->input->post('ww52', true),
			"ww53" => $this->input->post('ww53', true),
		];
			$this->db->where('id', $this->input->post('id'));
       		$this->db->update('preventive_maintenance_form', $preventive_maintenance_form);
	}

	// PPM vs Actual
	public function hitungJumlahPretentive()
	{		
		$this->db->select('count(ww02)')->where('ww02','D');
		$query = $this->db->get('preventive_maintenance_form');
		$TotalD = $query->row_array();
		return $TotalD['count(ww02)'];	
	}
}