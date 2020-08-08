<?php
class User extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('Rack_model');
		$this->load->model('Book_model');
		$this->load->model('Users_model');
		$this->load->library('session');

	}

	public function index(){
		$racks=$this->Rack_model->getallracks();
		$data = array();
		$data['racks']=$racks;
		$this->load->view('users/index',$data);
	}


}

?>
