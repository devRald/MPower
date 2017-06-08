<?php

class Organizer extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('organizer_model');
		$this->load->helper('MY_asset');
	}

	function index(){
		if($this->session->has_userdata('org_info')){
			$data['title'] = 'ORGANIZER';
			$data['org_info'] = $this->session->userdata('org_info');
			//$data['events'] =  $this->user_model->get_events_all();
			array_push($this->assets['js'],"Chart.js"); 
			array_push($this->assets['js'],"organizer.js"); 
			$this->load->view('template/header',$data);
			$this->load->view('organizer/org_nav');
			$this->load->view('organizer/dashboard');
			//$this->load->view('organizer/filter_modal');
			$this->load->view('template/footer');
		}
	}

	function profile(){
		if($this->session->has_userdata('org_info')){
			$data['title'] = 'PROFILE';
			$data['org_info'] = $this->session->userdata('org_info');
			array_push($this->assets['js'],"org-profile.js"); 
			$this->load->view('template/header',$data);
			$this->load->view('organizer/org_nav');
			$this->load->view('organizer/profile');
			$this->load->view('template/footer');
		}
	}

	function post(){
		if($this->session->has_userdata('org_info')){
			$data['title'] = 'POST';
			$data['org_info'] = $this->session->userdata('org_info');
			array_push($this->assets['js'],"org-post.js"); 
			$this->load->view('template/header',$data);
			$this->load->view('organizer/org_nav');
			$this->load->view('organizer/post');
			$this->load->view('template/footer');
		}
	}

	function login(){
		$check = $this->organizer_model->login($_POST['username'],$_POST['pwd']);
		if(!empty($check)){
			$user = array("org_info"=>$check);
			$this->session->set_userdata($user);
			echo true;
		}
	}

	function post_event(){
		$d = array("event_title"=>$_POST['title'],"event_desc"=>$_POST['desc'],"event_venue"=>$_POST['venue'],"event_payment"=>$_POST['payment'],"event_category"=>$_POST['category'],"venue_img"=>"cover.jpg","org_id"=>$this->session->userdata('org_info')->org_id,"start_date"=>$_POST['sdate'],"end_date"=>$_POST['edate']);
		$r = $this->organizer_model->insert_event_data($d);
		if($r){
			echo true;
		}
	}

	function logout(){
		if($this->session->has_userdata('org_info')){
			$this->session->unset_userdata('org_info');
			redirect('/home');
		}
	}
}