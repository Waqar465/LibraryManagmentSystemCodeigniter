<?php
class Author extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('Rack_model');
		$this->load->model('Book_model');
		$this->load->model('Users_model');
		$this->load->library('session');

	}

	function index(){

		$this->load->view('author/index');
	}
	public function New_Function(){
		echo "THis is working and its new file.";
	}

}

?>
