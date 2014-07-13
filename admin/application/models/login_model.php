<?php
class login_model extends CI_Model {
  	
  	public function __construct(){
    	$this->load->database();
    }
	
	public function check($user,$password){
		$query = $this->db->query("SELECT * FROM user WHERE user ='$user' AND password = PASSWORD('$password')");
		return $query->result();
	}
	
}