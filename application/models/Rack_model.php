<?php
class Rack_model extends CI_Model{
	public function getallracks(){
		$query=$this->db->get('racks');
		return $query->result_array();
	}

	public function addrack($formdata){
		$this->db->insert('racks',$formdata);
	}

	public function getsinglerack($id){
		$this->db->where('rackid',$id);
		$query=$this->db->get('racks');
		return $query->row_array();
	}
	public function delete($id){
		$this->db->where('rackid',$id);
		$this->db->delete('racks');
	}

	//edit rack
	public function editrack($id,$rack_name){
		$this->db->where('rackid',$id);
		$this->db->update('racks',$rack_name);

//		$this->db->where('bookrack',$rackname);
	}

	//get rack name for the specific rack id
	public function getrackname($id){
		$this->db->where('rackid',$id);

		$query= $this->db->get('racks');

		if($query->num_rows() == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
			$data =  $row->rackname;
			return $data;
		}
	}


	//get books for specific rack name
		public  function getbooks($id){
		$this->db->where('rackid',$id);
		$query= $this->db->get('books'); //select * from books where bookrack=?
		return $query->result_array();

		}

}

?>
