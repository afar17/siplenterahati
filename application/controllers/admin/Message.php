<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') !='Admin'){
			redirect('Login');
		}
		$this->load->model('Messagemodel');
		

	}

	public function readMessage($id){
		$this->Messagemodel->editPesan($id);
		$data['pesan'] = $this->Messagemodel->getPesan($id);
		$this->template->admin('admin/data/Pesan',$data);
	}
	
	public function AllMessage(){
		$data['pesans'] = $this->Messagemodel->getAllPesan();
		$this->template->admin('admin/data/AllPesan',$data);
	}

	public function delPesan($id){
		$this->db->where("idkomentarpengunjung",$id);
		$this->db->delete("komentarpengunjung");
		redirect("AllMessage");
	}
}
