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
	}

	public function signup_auth(){
		$this->load->library('form_validation');
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