<?php
class User_model extends MY_Model{
	function __construct(){
		$this->load->database();
	}

	function login($username,$password){
		$query = $this->db->query("SELECT * FROM tbl_users where username='".$username."' and password='".$password."'");
		return $query->row();
	}

	function get_events_all(){
		$query = $this->db->query("SELECT * FROM tbl_organizer NATURAL JOIN tbl_event ORDER BY event_id DESC");
		return $query->result_array();	
	}

	function get_events_detail($id){
		$query = $this->db->query("SELECT tbl_event.*, tbl_organizer.o_first_name, tbl_organizer.o_last_name FROM tbl_organizer INNER JOIN tbl_event ON tbl_organizer.org_id = tbl_event.org_id WHERE tbl_event.event_id = '$id'");
		return $query->first_row('array');	
	}

	function get_events_speaker($id){
		$query = $this->db->query("SELECT * from tbl_speaks NATURAL JOIN tbl_speaker where event_id = '$id'");
		return $query->result_array();
	}

	function set_attend_event($u,$e){
		if(!$this->check_if_attended($u,$e)){
			$data = array("user_id"=>$u,"event_id"=>$e);
			$this->db->insert('tbl_attend', $data);
			return true;
		}
		else{
			return false;
		}
	}

	function check_if_attended($u,$e){
		$query = $this->db->query("SELECT * from tbl_attend where event_id = '$e' and user_id = '$u'");
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
}