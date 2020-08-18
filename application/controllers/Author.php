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
		$role = $_SESSION['role'];
		if($role == "author") {
			$this->load->view('author/index');
		}
		else{
			$this->load->view('errorpage');
		}
	}
	public function New_Function(){
		echo "THis is working and its new file.";
	}

}

?>
