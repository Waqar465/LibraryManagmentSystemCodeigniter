<?php
class Admin extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('Rack_model');
		$this->load->library('session');
		$this->load->model('Book_model');
		$this->load->model('Users_model');

	}

	function index(){
		$users=$this->Users_model->getallusers();
		$data= array();
		$data['users']=$users;
		$this->load->view('admin/index',$data);
	}
	public function New_Function(){
		echo "THis is working and its new file.";
	}

}

?>
