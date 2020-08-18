<?php
class Users_model extends CI_Model{

	public function getallusers(){
		$query=$this->db->get('clients');
		return $query->result_array();
	}

}

?>
