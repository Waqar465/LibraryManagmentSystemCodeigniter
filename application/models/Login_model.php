<?php
class Login_model extends CI_Model{

	public function register($formdata){
		$this->db->insert('clients',$formdata);
	}

	public function verify_login($email,$password){
		// Prep the query
		$this->db->where('email', $email);
		$this->db->where('password', $password);


		// Run the query
		$query = $this->db->get('clients');
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{
			// If there is a user, then create session data
			$row = $query->row();
			$data = array(
				'id' => $row->id,
				'email' => $row->email,
				'role' => $row->role,
				'validated' => true
			);
			$this->session->set_userdata($data);
			return true;
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}

?>
