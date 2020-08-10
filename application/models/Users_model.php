<?php
class Users_model extends CI_Model{

	public function getallusers(){
		$query=$this->db->get('clients');
		return $query->result_array();
	}
	public function updateuser($id, $formdata){
		$this->db->where('id',$id);
		$this->db->update('clients',$formdata);
	}
}

?>
