<?php
class Admin extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('Rack_model');
		$this->load->model('Book_model');

	}

	function index(){
		$this->load->view('admin/index');
	}
	public function New_Function(){
		echo "THis is working and its new file.";
	}

}

?>
