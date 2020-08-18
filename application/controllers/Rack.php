<?php

class Rack extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('Rack_model');
		$this->load->model('Book_model');
		$this->load->library('session');

	}

	function show(){
		$racks=$this->Rack_model->getallracks();
		$data=array();
		$data['racks']=$racks;
		$this->load->view('admin/racks',$data);
	}

	public function create(){

		$this->form_validation->set_rules('rackname','rackname','required');
		if($this->form_validation->run() == false){
			$this->load->view('admin/addrack');
		}
		else{
			$formdata= array();
			$formdata['rackname']=$this->input->post('rackname');
			$this->Rack_model->addrack($formdata);
			$this->session->set_flashdata('success','Record added successfuly');
			redirect(base_url('Rack/show'));
		}

	}

	public function update($id){
		$rack=$this->Rack_model->getsinglerack($id);
		$data=array();
		$data['rack']=$rack;

		$this->form_validation->set_rules('rackname','rackname','required');
		if($this->form_validation->run() == false){
			$this->load->view('admin/editrack',$data);
		}
		else{
			$formdata= array();
			$formdata['rackname']=$this->input->post('rackname');
			$this->Rack_model->editrack($id,$formdata);
			$this->session->set_flashdata('success','Record added successfuly');
			redirect(base_url('Admin/index'));
		}

	}

	public function search($id){

		$books=$this->Rack_model->getbooks($id);
		$data=array();
		$data['books']=$books;

		$this->load->view('users/rack',$data);
	}

	public function delete($id){
		$this->Rack_model->delete($id);
		redirect(base_url('Rack/show'));

	}


}

?>
