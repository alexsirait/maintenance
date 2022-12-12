<?php
use CodeIgniter\Model;

class M_WO extends Ci_Model
{
	public function store_wo($item)
	{
		return $this->db->insert('wo_form', $item);
	}

	public function tampil_data(){
        return $this->db->get('wo_form');
    }

	public function edit_data($getID, $table)
    {
        return $this->db->get_where($table, $getID);
    }
	
	public function hapus($id, $table)
    {
        $this->db->where($id);
        $this->db->delete($table);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}



    