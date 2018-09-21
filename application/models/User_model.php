<?php
class User_model extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->database();
	}

	public function save($data)
    {
        $query = $this->db->insert('user',$data);
        if ($query){

        	return $this->db->insert_id();
        }

        return false;
    }

	public function update($id,$data)
    {
    	$this->db->where('id',$id);
        $query = $this->db->update('user',$data);
        if ($query){

        	return $query;
        }

        return false;
    }

	public function delete($id)
    {
    	$this->db->where('id',$id);
        $query = $this->db->delete('user');
        if ($query){

        	return $query;
        }

        return false;
    }

    public function get_all()
    {
        $this->db->from('user');
        $query = $this->db->get();

        if ($query){

        	return $query->result();
        }

        return false;
    }

    public function get($id)
    {
        $this->db->from('user');
        $this->db->where('id',$id);
        $query = $this->db->get();

        if ($query){

        	return $query->row();
        }

        return false;
    }

}