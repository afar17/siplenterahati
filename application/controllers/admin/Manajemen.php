<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('isLogin') !=true){
			redirect('Welcome');
		}
		$this->load->model('User_model');
	}

	public function index(){
		$data['user'] = $this->User_model->getAll();
		$this->template->admin('admin/data/Users',$data);
	}

	public function add(){
		$this->template->admin('admin/form/Addusers');
	}

	public function save(){
		$password = $this->input->post("password");
		$confirm = $this->input->post("confirm");
		if($password == $confirm){
			$this->User_model->save();
			$this->session->set_flashdata("success","Password berhasil dibuat");
		}
		else {
			$this->session->set_flashdata("error","Password anda berbeda");
		}
		
		redirect("admin/Manajemen/add");
	}

	public function delete($id){
		$this->db->where("id_user",$id);
		$this->db->delete("users");
		$this->session->set_flashdata("success","Data Berhasil Dihapus");
		redirect("admin/Manajemen");
	}

	public function change(){
		$this->template->admin('admin/form/Gantipassword');
	}

	public function prosesganti(){
		$this->User_model->prosesganti();
		redirect("admin/Manajemen/change");

	}
}
