<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){ //fungsi yang otomatis jalan saat class dipanggil.
		parent::__construct();
		$this->load->model('Infomodel');
		$this->load->model('pendaftaran_model');
		$this->load->model('Komentar_model');
	}

	public function index()
	{
		$data['menuhome']='active';
		
		$this->template->full('guest/data/dashboard',$data);
	}

	
    public function contact(){
		$data['menuContact'] = 'active';	
		$this->template->isi('guest/data/contact',$data);
	}
	
	public function simpancontact(){
		$this->Komentar_model->save();
		
		$this->load->view('vendor/autoload.php');
		
		$options = array(
			'cluster' => 'mt1',
			'useTLS' => true
		);
		
		  $pusher = new Pusher\Pusher(
			'c4aa79921b531bda044b',
			'99daae6c88fb2984992c',
			'630281',
			$options
		  );
		  $data['name'] = $this->input->post('nama');
		  $data['message'] = $this->input->post('isipesan');
		  $pusher->trigger('my-channel', 'my-event', $data);
	}

        
    public function infodetail($id) {
		$data['row']=$this->Infomodel->getId($id);
		$this->template->isi('guest/data/detailinformasi',$data);
	}

	public function profiletk(){
		$this->template->isi('guest/data/profil_tkit');
	}

	public function profilesd(){
		$this->template->isi('guest/data/profil_sdit');
	}

	public function profilesmp(){
		$this->template->isi('guest/data/profil_smpit');
	}
}
