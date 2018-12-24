<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('isLogin') !=true){
			redirect('Welcome');
		}
		$this->load->model('Auth_model');
		$this->load->model("Dashboard_model");
	}


	public function index()
	{
		$data['jumlahTK'] = $this->Dashboard_model->jumlahPendaftar('TKIT');
		$data['jumlahSD'] = $this->Dashboard_model->jumlahPendaftar('SDIT');
		$data['jumlahSMP'] = $this->Dashboard_model->jumlahPendaftar('SMPIT');
		$data['menuDashboard'] = 'active';
		$this->template->admin('admin/data/Dashboard',$data);
	}
}
