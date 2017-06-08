<?php
class User extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->helper('MY_asset');
	}

	function index(){
		//echo $this->session->userdata('user_info');
		if($this->session->has_userdata('user_info')){
			$data['title'] = 'USER';
			$data['user_info'] = $this->session->userdata('user_info');
			$data['events'] =  $this->user_model->get_events_all();
			array_push($this->assets['js'],"user.js"); 
			$this->load->view('template/header',$data);
			$this->load->view('user/user_nav');
			$this->load->view('user/feeds');
			$this->load->view('user/filter_modal');
			$this->load->view('template/footer');
		}
	}

	function detail($id){
		if($this->session->has_userdata('user_info')){
			$data['title'] = 'DETAIL';
			$data['user_info'] = $this->session->userdata('user_info');
			$data['detail'] =  $this->user_model->get_events_detail($id);
			$data['speaker'] = $this->user_model->get_events_speaker($id);
			array_push($this->assets['js'],"details.js"); 
			$this->load->view('template/header',$data);
			$this->load->view('user/user_nav');
			$this->load->view('user/detail');
			$this->load->view('template/footer');
		}
	}

	function profile(){
		if($this->session->has_userdata('user_info')){
			$data['title'] = 'PROFILE';
			$data['user_info'] = $this->session->userdata('user_info');
			array_push($this->assets['js'],"profile.js"); 
			$this->load->view('template/header',$data);
			$this->load->view('user/user_nav');
			$this->load->view('user/profile');
			$this->load->view('template/footer');
		}
	}

	function login(){
		$check = $this->user_model->login($_POST['username'],$_POST['pwd']);
		if(!empty($check)){
			$user = array("user_info"=>$check);
			$this->session->set_userdata($user);
			echo true;
		}
	}

	function attend($id){
		if($this->session->has_userdata('user_info')){
			if(isset($this->session->userdata('user_info')->user_id)||!empty($this->session->userdata('user_info')->user_id)){
				$call = $this->user_model->set_attend_event($this->session->userdata('user_info')->user_id,$id);
				if($call){
					redirect('/user');
				}
				else{
					redirect('/home');
				}
			}
		}
	}

	function logout(){
		if($this->session->has_userdata('user_info')){
			$this->session->unset_userdata('user_info');
			redirect('/home');
		}
	}
}