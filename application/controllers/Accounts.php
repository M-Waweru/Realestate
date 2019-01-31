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

			//Signing in by sending details to model
			$signinvalue = $this->auth_model->login_auth($emailadd, $pwd);
			if ($signinvalue > 0){
				$session_data = array(
					'userno' => $signinvalue,
					'emailadd' => $emailadd,
				);
				$this->session->set_userdata($session_data);
				redirect(base_url());
			} else {
				$this->session->set_flashdata('invalidcred', "Invalid Email address or Password");
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

		} else {
			$fullname = $this->input->post('fullname');
			$emailadd = $this->input->post('emailadd');
			$pwd = $this->input->post('pwd');
			$pwdagain = $this->input->post('pwdagain');

			if (strlen($pwd)<8){
				$this->session->set_flashdata('passlength', "Password must have 8 characters or more");
				redirect(base_url('accounts/signup'));
			} else if ($pwd!=$pwdagain){
				$this->session->set_flashdata('passconfirm', "Passwords are not the same");
				redirect(base_url('accounts/signup'));
			}

			$this->load->model('auth_model');

			//Sending details to model
			$signupvalue = $this->auth_model->signup_auth($fullname, $emailadd, $pwd);

			if ($signupvalue>0){
				$session_data = array(
					'userno' => $signupvalue,
					'emailadd' => $emailadd,
				);
				$this->session->set_userdata($session_data);
				redirect(base_url());
			} else {
				$this->session->set_flashdata('emailinuse', "Email address is already in use");
				redirect(base_url('accounts/signup'));
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

	public function logout(){
		$this->session->unset_userdata('emailadd');
		redirect(base_url());
	}

	public function manageacc(){
		$this->load->view('navbar');
		$this->load->view('accountpage');
		$this->load->view('footer');
	}
}

?>