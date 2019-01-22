<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	
	public function __construct(){ //fungsi yang otomatis jalan saat class dipanggil.
		parent::__construct();
		$this->load->model("Gallery_model");
	}

	public function index()
	{
		$data['menugallery']='active';
		$data['gallery'] = $this->Gallery_model->getAll();
		$this->template->isi('guest/data/gallery',$data);
	}

	
}
