<?php

class Organizer_model extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function login($username,$password){
		$query = $this->db->query("SELECT * FROM tbl_organizer where username='".$username."' and password='".$password."'");
		return $query->row();
	}
	function insert_event_data($data){
		$this->db->insert('tbl_event', $data);
		return true;
	}
}