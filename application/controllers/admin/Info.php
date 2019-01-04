<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata() !=true){
			redirect('Info');
		}
		$this->load->model('Infomodel');
		$this->load->model('Sekolahmodel');
		

	}

	public function index()

	{
		$data['informasi'] = $this->Infomodel->getAll();
		$this->template->admin('admin/informasi',$data);
	}
	public function add()
	{
		$data['sekolah'] = $this->Sekolahmodel->getAll();
		$this->template->admin('admin/infoform',$data);
	}
	
	public function save(){
		$this->Infomodel->save();
		$this->session->set_flashdata('success','Data Berhasil Disimpan!');
		redirect('info/index');
	}
	
	public function edit($id){
		$data['menu_setting']='active';
		$data['edit'] = 'edit';
		$data['sekolah'] = $this->Sekolahmodel->getAll();
		$data['row']= $this->Infomodel->getId($id);
		$this->template->admin('admin/infoform',$data);
		
	}
	
	public function update(){
		$this->Infomodel->update(); 
		$this->session->set_flashdata('success','Data Berhasil Diperbaharui!');
		
		redirect('info/index');
	}
	
	public function del($id) {
		$this->Infomodel->delete($id);
		$this->session->set_flashdata('success','Data Berhasil Dihapus!');
		redirect('info/index');
	}
}
