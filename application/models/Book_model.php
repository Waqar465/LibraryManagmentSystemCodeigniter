<?php
class Book_model extends CI_Model{

	public function editbook($bookrack,$rack_nam){
		$this->db->where('bookrack',$bookrack);
		$this->db->update('books',$rack_nam);
	}
	public function updatebook($id, $formdata){
		$this->db->where('bookid',$id);
		$this->db->update('books',$formdata);
	}

	public function add_book($formdata){
		$this->db->insert('books',$formdata);
	}

	public function deletebook($id){
		$this->db->where('bookid',$id);
		$this->db->delete('books');
	}

	public function getallbooks(){

		$this->db->select('books.*,racks.*');
		$this->db->from('books');
		$this->db->join('racks', 'books.rackid = racks.rackid','right outer');
		$query = $this->db->get();
		return $query->result_array();

//		$query=$this->db->get('books');
//
//		return $query->result_array();
	}

	public function getsinglebook($id){
		$this->db->where('bookid',$id);
		$query=$this->db->get('books');
		return $query->row_array();
	}

	public function search($searchby,$searchvalue,$rackname){
		if($searchby== "bookname"){

			$this->db->select('books.*,racks.*');
			$this->db->from('books');
			$this->db->join('racks', 'books.rackid = racks.rackid', 'right outer');
			$this->db->where('bookname',$searchvalue);
			$query = $this->db->get();
			return $query->result_array();

//			$this->db->where('bookname',$searchvalue);
//
//			$query=$this->db->get('books');
//			return $query->result_array();
		}
		elseif ($searchby== "bookauthor"){
			$this->db->select('books.*,racks.*');
			$this->db->from('books');
			$this->db->join('racks', 'books.rackid = racks.rackid', 'right outer');
			$this->db->where('bookauthor',$searchvalue);
			$query = $this->db->get();
			return $query->result_array();
//			$this->db->where('bookauthor',$searchvalue);
//			$query=$this->db->get('books');
//			return $query->result_array();
		}
		elseif ($searchby== "bookpublishyear"){
			$this->db->select('books.*,racks.*');
			$this->db->from('books');
			$this->db->join('racks', 'books.rackid = racks.rackid', 'right outer');
			$this->db->where('bookpublishyear',$searchvalue);
			$query = $this->db->get();
			return $query->result_array();
//			$this->db->where('bookpublishyear',$searchvalue);
//			$query=$this->db->get('books');
//			return $query->result_array();

		}
		else{
			$this->db->select('books.*,racks.*');
			$this->db->from('books');
			$this->db->join('racks', 'books.rackid = racks.rackid', 'right outer');
			$this->db->where('books.rackid',$rackname);
			$query = $this->db->get();
			return $query->result_array();

//			$this->db->where('rackid',$rackname);
//			$query=$this->db->get('books');
//			return $query->result_array();

		}
	 }
}

?>
