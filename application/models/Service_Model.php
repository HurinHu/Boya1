<?php

class Service_Model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function get_All_Content(){
		$query = $this->db->query("SELECT * from service");
		return $query->result();
	}
}