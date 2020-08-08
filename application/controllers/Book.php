<?php

class Book extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('Rack_model');
		$this->load->model('Book_model');
		$this->load->library('session');

	}

	function show(){
		$books=$this->Book_model->getallbooks();

		$data=array();
		$data['books']=$books;
		$role = $this->session->userdata('role');
		if ($role == "admin"){
				$this->load->view('admin/books',$data);
			}
		if($role== "author"){
			$this->load->view('author/books',$data);

		}

		}

	public function create(){
		$racks=$this->Rack_model->getallracks();
		$data=array();
		$data['racks']=$racks;

		$this->form_validation->set_rules('bookname', 'bookname', 'required');
		$this->form_validation->set_rules('bookauthor', 'bookauthor', 'required');
		$this->form_validation->set_rules('bookpublishyear', 'bookpublishyear', 'required');
		$this->form_validation->set_rules('rackname', 'rackname', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/addbook',$data);
		}
		else {
			$formdata = array();
			$formdata['bookname'] = $this->input->post('bookname');
			$formdata['bookauthor'] = $this->input->post('bookauthor');
			$formdata['bookpublishyear'] = $this->input->post('bookpublishyear');
			$formdata['rackid'] = $this->input->post('rackname');
			$this->Book_model->add_book($formdata);
			$this->session->set_flashdata('success', 'Record added successfuly');
			redirect(base_url('Admin/books'));
		}

	}

	public function update($id)
	{
		$book = $this->Book_model->getsinglebook($id);
		$data = array();
		$data['book'] = $book;

		$this->form_validation->set_rules('bookname', 'bookname', 'required');
		$this->form_validation->set_rules('bookauthor', 'bookauthor', 'required');
		$this->form_validation->set_rules('bookpublishyear', 'bookpublishyear', 'required');
		$this->form_validation->set_rules('bookrack', 'bookrack', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/editbook', $data);
		} else {
			$formdata = array();
			$formdata['bookname'] = $this->input->post('bookname');
			$formdata['bookauthor'] = $this->input->post('bookauthor');
			$formdata['bookpublishyear'] = $this->input->post('bookpublishyear');
			$formdata['rackid'] = $this->input->post('bookrack');
			$this->Book_model->updatebook($id, $formdata);
			$this->session->set_flashdata('success', 'Record added successfuly');
			redirect(base_url('Admin/index'));
		}
	}

	public function search(){

		$racks=$this->Rack_model->getallracks();
		$data=array();
		$data['racks']=$racks;

		$this->load->view('users/searchbook',$data);
	}

	//showing the result of the book search on search book page
	public function result()
	{

		$searchby = $this->input->post('searchby');
		$rackname= $this->input->post('rackname');


		$searchvalue = $this->input->post('searchvalue');

		if ($searchby != "bookrack") {
			$this->form_validation->set_rules('searchvalue', 'searchvalue', 'required');

			if ($this->form_validation->run() == false) {
				$this->load->view('users/searchbook');
			}
			else {
				$books=$this->Book_model->search($searchby,$searchvalue,$rackname);
				$data = array();
				$data['books'] = $books;
				$this->load->view('users/bookresult', $data);

			}
		}

		else{
			$books=$this->Book_model->search($searchby,$searchvalue,$rackname);
			$data = array();
			$data['books'] = $books;
			$this->load->view('users/bookresult', $data);
		}

	}

	public function delete($id){
		$this->Book_model->deletebook($id);
		redirect(base_url('Admin/books'));
	}

}

?>
