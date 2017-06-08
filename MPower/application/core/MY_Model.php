<?php
class MY_Model extends CI_Model{
	public static $users = array("id"=>"user_id","username"=>"username","password"=>"pwd","image"=>"user_img","firstname"=>"first_name","lastname"=>"last_name","middlename"=>"middle_name","house"=>"house_no","street"=>"street","barangay"=>"barangay");
	function __construct(){
		parent::__construct();
	}
}