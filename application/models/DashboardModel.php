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
}



    