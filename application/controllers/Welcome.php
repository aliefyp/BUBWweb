<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
     parent::__construct();
     
  }



	public function index()
	{
		$data['title'] = 'BUBW Indonesia';
		$this->load->view('index');
	}

	
	public function register() {
		$data['title'] = 'Register | BUBW Indonesia';
		$this->load->view('register',$data);
	}

	public function indonesia_desc() {
		$data['title'] = 'Yogyakarta and Indonesia at a Glance | BUBW Indonesia';
		$this->load->view('indonesia_desc',$data);
	}
}
