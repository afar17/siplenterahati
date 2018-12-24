<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	
	public function __construct(){ //fungsi yang otomatis jalan saat class dipanggil.
		parent::__construct();
	}

	public function index()
	{
		$data['menuGallery']='active';
		$this->template->admin('admin/form/Gallery',$data);
	}

	public function upload(){
		$config['upload_path'] = './assets/admin/gallery/'; //path folder
	    $config['allowed_types'] = '*'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    $this->load->library('upload',$config);
	    	if(!empty($_FILES['filefoto']['name'])){
	    		if(!$this->upload->do_upload('filefoto')){
					$this->upload->display_errors();
				    exit;
				}
	    		else {
					$upload_data = $this->upload->data();
					if($upload_data['file_name'] !="")
						$file = $upload_data['file_name'];
					else 
						$file = "";
				}
	    			
	    	}
	    	else {
	    	    $file = "";
	    	}
	   //ambil postingan
	    $sekolah = $this->input->post('sekolah');
	    $judul = $this->input->post('judul');
	    $deskripsi = $this->input->post('deskripsi');
	    $tgl_terbit = date('Y-m-d');
	    $id_user = $this->session->userdata('id');

	    //simpan ke database
	    $data = array('nm_judul'=>$judul,
					  'gambar'=>$file,
					  'deskripsi'=>$deskripsi,
					  'tgl_terbit'=>$tgl_terbit,
					  'id_user'=>$id_user,
					  'sekolah_kodesekolah'=>$sekolah);

	    $this->db->insert('galeri',$data);
	    
	}
	
}
