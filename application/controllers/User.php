<?php
class User extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('Rack_model');
		$this->load->model('Book_model');
		$this->load->model('Users_model');
		$this->load->library('session');

	}

	public function index()
	{
		$role = $_SESSION['role'];

		if ($role == "reader") {
			$racks = $this->Rack_model->getallracks();
			$data = array();
			$data['racks'] = $racks;
			$this->load->view('users/index', $data);
		} else {
			$this->load->view('errorpage');
		}
	}
	public function update($id=0){


		$this->form_validation->set_rules('name', 'name', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('users/updateprofile');
		} else {
			$formdata = array();
			$formdata['name'] = $this->input->post('name');
			$this->Users_model->updateuser($id, $formdata);
			$this->session->set_flashdata('success', 'Record added successfuly');
			redirect(base_url('User'));
		}
	}

}

?>
