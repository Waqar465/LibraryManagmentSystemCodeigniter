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

		unset(
			$_SESSION['id'],
			$_SESSION['name'],
			$_SESSION['email'],
			$_SESSION['role']
		);
		$data = array(
			'role' => "admin",
			'validated' => true
		);
		$this->session->set_userdata($data);

		if($msg){
			$message['errormsg']=$msg;
			$this->load->view('login',$message);

		}
		else{
			$data['errormsg']=$msg;
			$this->load->view('login',$data);

		}
	}
	public function register(){
//		$this->load->view('register');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$name = $this->input->post('name');
		$role = $this->input->post('role');
		$re_password =$this->input->post('re_password');

		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');

		$this->form_validation->set_rules('re_password', 're_password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} //CHeeck for the email and password
		else {

			if( $password== $re_password){
				$config['upload_path'] = 'assets/img/profile_img/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('profilePic')){
					$data = $this->upload->data();
					$picture = $this->upload->data('full_path').$data['file_name'];
				}
				else{
					echo $this->upload->display_errors();
				}

				$password=md5($password);
				echo $password;
				$formdata= array();
				$formdata['name']=$name;
				$formdata['email']=$email;
				$formdata['password']=$password;
				$formdata['role']=$role;
				$formdata['picture']=$picture;
				$this->Login_model->register($formdata);
				if($_SESSION['role']=="reader")
				redirect(base_url('User'));
				else
					redirect(base_url('Author'));
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
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == false) {
			$impmsg['errormsg']=null;
			$this->load->view('login',$impmsg);
		} //CHeeck for the email and password
		else {
			$password=md5($password);

		$result = $this->Login_model->verify_login($email, $password);

		if (!$result) {
			$msg = 'Invalid username or password.';
			$this->index($msg);
		} else {
				if($_SESSION['role'] == "reader"){
					redirect(base_url('User/'));
				}
				if ($_SESSION['role']== "author"){
					redirect(base_url('Author/'));
				}


		}
	}

	}
}

?>
