<?php

class Login extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('Rack_model');
		$this->load->model('Book_model');
		$this->load->library('session');
		$this->load->model('Login_model');

	}

	public function index($msg = null){
		if($msg){
			$this->load->view('login');

		}
		else{
			$data['msg']=$msg;
			$this->load->view('login',$data);

		}
	}
	public function register(){
//		$this->load->view('register');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$role = $this->input->post('role');
		$re_password =$this->input->post('re_password');

		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('re_password', 're_password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} //CHeeck for the email and password
		else {

			if( $password== $re_password){
				$password=md5($password);
				echo $password;
				$formdata= array();
				$formdata['email']=$email;
				$formdata['password']=$password;
				$formdata['role']=$role;
				$this->Login_model->register($formdata);
				redirect(base_url('User'));
			}
			else{
				$this->load->view('register');
			}

		}
	}
	public function client_login()
	{

		//getting values from the form
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$role = $this->input->post('role');

		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} //CHeeck for the email and password
		else {
			$password=md5($password);

		$result = $this->Login_model->verify_login($email, $password,$role);

		if (!$result) {
			$msg = 'Invalid username and/or password.';
			$this->index($msg);
		} else {
				if($role == "reader"){
					redirect(base_url('User/'));
				}
				if ($role== "author"){
					redirect(base_url('Author/'));
				}


		}
	}

	}
}

?>
