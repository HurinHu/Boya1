<?php

class Contact_Model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function insert_user_questions($username,$email,$phone,$content){
		$data = array(
			'username' => $username,
   			'email' => $email,
   			'phone' => $phone,
   			'content' => $content
);
		$insert_success = $this->db->insert('contact',$data);
		return $insert_success;
	}
}