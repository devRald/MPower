<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('MY_asset');
		$this->load->model('home_model');
	}
	public function index()
	{
		array_push($this->assets['js'],"landing.js"); 
		array_push($this->assets['css'],"landing.css"); 
		$data['title'] = 'HOME';
		$this->load->view('template/header',$data);
		$this->load->view('template/home_nav');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
}
