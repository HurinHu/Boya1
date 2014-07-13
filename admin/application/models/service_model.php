<?php
class service_model extends CI_Model {
  	
  	public function __construct(){
    	$this->load->database();
    }
	
	public function get($page){
		$start=($page-1)*10;
		$query = $this->db->query("SELECT * FROM service ORDER BY id ASC LIMIT $start, 10");
		return $query;
	}
	
	public function getnum(){
		$query = $this->db->query("SELECT * FROM service");
		return $query->num_rows();
	}
	
	public function getarticle($id){
		$query = $this->db->query("SELECT * FROM service WHERE id='$id'");
		return $query->result();
	}
	
	public function updatearticle($id,$title,$introduction,$content){
		$query = $this->db->query("UPDATE service SET title='$title', short_content='$introduction',full_content='$content' WHERE id='$id'");
	}
}