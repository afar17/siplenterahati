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

	
	
	public function profilesmp(){
		$this->template->isi('halaman/profil/profil_smpit');
	}
        public function profilesd(){
		$this->template->isi('halaman/profil/profil_sdit');
	}
        public function profiletk(){
		$this->template->isi('halaman/profil/profil_tkit');
	}
        public function psb_tkit(){
		$this->template->isi('halaman/psb/psb_tkit');
	}
        public function psb_sdit(){
		$this->template->isi('halaman/psb/psb_sdit');
	}
        public function psb_smpit(){
		$this->template->isi('halaman/psb/psb_smpit');
	}
        public function informasi(){
		$this->template->full('halaman/informasi');
	}
        public function galeri(){
		$this->template->isi('halaman/galeri');
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
}
