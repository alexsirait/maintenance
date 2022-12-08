<?php
use CodeIgniter\Model;

class DashboardModel extends Ci_Model
{
	public function addequipment($item)
	{
		return $this->db->insert('equipment_form', $item);
	}

    public function getEquipmentForm()
    {
        return $this->db->get('equipment_form')->result_array();
    }

    public function hapus($id)
	{
        $this->db->where('id', $id);
	  	$this->db->delete("equipment_form");	  	
	}

    public function buatangka()
	{
		$this->db->select('*');
		return $this->db->get('equipment_form')->num_rows();
	}

	public function edit_equipment($id)
	{
		return $this->db->get_where('equipment_form', ['id' => $id])->row_array();
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
}



    