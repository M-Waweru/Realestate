<?php 

class Auth_model extends CI_Model {
	public function login_auth($email, $pwd){
		$this->load->database();

		$query = $this->db->get_where('users', array('Email_address'=>$email));
		$userarray = $query -> result_array();
		
		if ($query->num_rows() > 0){
			if (password_verify($pwd, $userarray[0]['Password'])){
				$userno = $userarray[0]['User_no'];
				return $userno;
			} else {
				return 0;
			}
		} else {
			return 0;
		}
	}

	public function signup_auth($fullname, $email, $password){
		$this->load->database();

		$query = $this->db->get_where('users', array('Email_address'=>$email));

		if ($query->num_rows() > 0){
			return 0;
		} else {
			$data = array(
				'Full_name' => $fullname,
				'Email_address' => $email,
				'Password' => password_hash($password, PASSWORD_DEFAULT) 
			);

			$this->db->insert('users', $data);

			$query = $this->db->get_where('users', array('Email_address'=> $email));
			$userarray = $query -> result_array();
			$userno = $userarray[0]['User_no'];
			return $userno;
		}
	}
}
?>