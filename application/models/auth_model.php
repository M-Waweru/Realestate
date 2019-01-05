<?php 

class Auth_model extends CI_Model {
	public function login_auth($email, $pwd){
		$this->load->database();

		$query = $this->db->get_where('users', array('Email_address'=>$email));
		$userarray = $query -> result_array();
		
		if ($query->num_rows() > 0){
			if (password_verify($pwd, $userarray[0]['Password'])){
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function signup_auth($fullname, $email, $password){
		$this->load->database();

		$query = $this->db->get_where('users', array('Email_address'=>$email));

		if ($query->num_rows() > 0){
			return false;
		} else {
			$data = array(
				'Full_name' => $fullname,
				'Email_address' => $email,
				'Password' => password_hash($password, PASSWORD_DEFAULT) 
			);

			$this->db->insert('users', $data);

			$query = $this->db->get_where('users', array('Email_address'=> $emailadd));
			$userarray = $query -> result_array();
			print_r($userarray);
			echo "Account created";
		}
	}
}
?>