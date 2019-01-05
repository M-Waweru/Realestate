<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller{

	public function login(){
		$this->load->view('navbar');
		$this->load->view('loginpage');
	}

	public function signup(){
		$this->load->view('navbar');
		$this->load->view('signuppage');
	}

	public function signin_auth(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('emailadd', 'Email address', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->login();
		} 
		else { 
			$emailadd = $this->input->post('emailadd');
			$pwd = $this->input->post('pwd');
			//model function
			$this->load->model('auth_model');

			if ($this->auth_model->login_auth($emailadd, $pwd)){
				$session_data = array(
					'emailadd' => $emailadd,
				);
				$this->session->set_userdata($session_data);
				redirect(base_url());
			} else {
				$this->session->set_flashdata('error', "Invalid Email address or Password");
				$this->login();
			}
		}	
	}

	public function signup_auth(){
		$this->load->library('form_validation');
		$this->load->helper('email');

		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('emailadd', 'Email address', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('signuppage');
		} else {
			$fullname = $this->input->post('fullname');
			$emailadd = $this->input->post('emailadd');
			$pwd = $this->input->post('pwd');

			$this->load->model('auth_model');

			if ($this->auth_model->signup_auth($fullname, $emailadd, $pwd)){
				// redirect(base_url());
			} else {
				$this->session->set_flashdata('emailinuse', "Email address is already in use");
				$this->signup();
			}
		}
	}

	public function googlesignin_auth(){
		$this->load->library('form_validation');

		$name = $this->input->get('name');
		$emailadd = $this->input->get('emailadd'); 
	}

	public function googlesignup_auth(){
		$this->load->library('form_validation');

		$name = $this->input->get('name');
		$emailadd = $this->input->get('emailadd'); 
	}
}

?>