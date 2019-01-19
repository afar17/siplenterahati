<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('isLogin') !=true){
			redirect('Welcome');
		}
		// $this->load->model('Staff_model');
	}

	public function add(){
		$data['menuStaff'] = 'active';
		$this->template->admin('admin/form/Staff',$data);
	}

	public function save(){
		
	}
}
