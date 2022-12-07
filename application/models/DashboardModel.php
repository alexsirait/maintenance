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
}



    