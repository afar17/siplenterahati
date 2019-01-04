<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Pendaftaran_model');
		$this->load->model('Infomodel');
		$this->load->model('quotamodel');

	}

	public function index()
	{
		$data['pendaftaran'] = $this->Pendaftaran_model->getAll();
		$data['informasi'] = $this->Infomodel->getAll();
		$data['jumlahquota'] = $this->quotamodel->batas();
		$data['menupendaftaran']='active';
		$this->template->isi('guest/data/pendaftaran',$data);
	}
        public function lihat()
	{
		$data['pendaftaran'] = $this->Pendaftaran_model->getAll();
		$this->template->isi('guest/data/lihatpendaftaran',$data);
	}
	public function formdaftar($id=null)
	{
		if($id == "tkit" or $id=="TKIT") {
			$data['sekolah'] = "TKIT";
			$data['judulform']= "TK-IT";
		}
		else if($id =="sdit" OR $id=="SDIT"){
			$data['sekolah'] = "SDIT";
			$data['judulform']= "SD-IT";
		}
		else{
			$data['sekolah'] = "SMPIT";
			$data['judulform']= "SMP-IT";
		}
		$data['menuPendaftaran']= 'active';
		$this->template->isi('guest/form/formpendaftaran',$data);
	}
	
	
	
	public function edit($id){
		$data['menu_setting']='active';
		$data['edit'] = 'edit';
		$data['row']= $this->Pendaftaran_model->getId($id);
		$this->template->isi('guest/form/pendaftaranform',$data);
		
	}
	
	public function update(){
		$this->Pendaftaran_model->update(); 
		$this->session->set_flashdata('success','Data Berhasil Diperbaharui!');
		
		redirect('pendaftaran/index');
	}

	public function lihattk(){
		$data['urlAjax'] =  site_url('guest/pendaftaran/list_tk');
		$data['title'] = "Pendaftaran TK";
		$this->template->isi('guest/data/Listpendaftaran',$data);
	}

	public function list_tk()
    {
        $list = $this->pendaftaran_model->get_datatables('TKIT');
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $daftar) {
            $no++;
            $row = array();
            $row[] = $no;
 			$row[] = $daftar->nm_lengkap;
 			$row[] = $daftar->nm_panggilan;
 			$row[] = $daftar->nm_ayah;
 			$row[] = $daftar->nm_ibu;


            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Pendaftaran_model->count_all("TKIT"),
                        "recordsFiltered" => $this->Pendaftaran_model->count_filtered("TKIT"),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 	

    public function lihatsd(){
    	$data['urlAjax'] =  site_url('guest/pendaftaran/list_sd');
		$data['title'] = "Pendaftaran TK";
		$this->template->isi('guest/data/Listpendaftaran',$data);
	}

	public function list_sd()
    {
        $list = $this->Pendaftaran_model->get_datatables("SDIT");
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $daftar) {
            $no++;
            $row = array();
            $row[] = $no;
 			$row[] = $daftar->nm_lengkap;
 			$row[] = $daftar->nm_panggilan;
 			$row[] = $daftar->nm_ayah;
 			$row[] = $daftar->nm_ibu;


            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Pendaftaran_model->count_all("SDIT"),
                        "recordsFiltered" => $this->Pendaftaran_model->count_filtered("SDIT"),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function lihatsmp(){
    	$data['urlAjax'] =  site_url('guest/pendaftaran/list_smp');
		$data['title'] = "Pendaftaran TK";
		$this->template->isi('guest/data/Listpendaftaran',$data);
	}

	public function list_smp()
    {
        $list = $this->Pendaftaran_model->get_datatables("SMPIT");
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $daftar) {
            $no++;
            $row = array();
            $row[] = $no;
 			$row[] = $daftar->nm_lengkap;
 			$row[] = $daftar->nm_panggilan;
 			$row[] = $daftar->nm_ayah;
 			$row[] = $daftar->nm_ibu;


            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Pendaftaran_model->count_all("SMPIT"),
                        "recordsFiltered" => $this->Pendaftaran_model->count_filtered("SMPIT"),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

	function uploadberkas($id){
		$data['kodependaftaran'] = $id;
		$data['menuUploadBerkas'] ='active';
		$this->template->isi('guest/form/formuploadberkas',$data);
	}

	function saveUpload(){
		$config['upload_path'] = './assets/berkas/'; //path folder
	    $config['allowed_types'] = '*'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    $this->load->library('upload',$config);
	    	if(!empty($_FILES['fileberkas']['name'])){
	    		if(!$this->upload->do_upload('fileberkas')){
					$this->upload->display_errors();
				    exit;
				}
	    		else {
					$upload_data = $this->upload->data();
					if($upload_data['file_name'] !="")
						$fileberkas = $upload_data['file_name'];
					else 
						$fileberkas = "";
				}
	    	}
	    	else {
	    	    $fileberkas = "";
	    	}

	    	if(!empty($_FILES['fileberkas2']['name'])){
	    		if(!$this->upload->do_upload('fileberkas')){
					$this->upload->display_errors();
				    exit;
				}
	    		else {
					$upload_data = $this->upload->data();
					if($upload_data['file_name'] !="")
						$fileberkas2 = $upload_data['file_name'];
					else 
						$fileberkas2 = "";
				}
	    			
	    	}
	    	else {
	    	    $fileberkas2 = "";
	    	}

	    	if(!empty($_FILES['fileberkas3']['name'])){
	    		if(!$this->upload->do_upload('fileberkas3')){
					$this->upload->display_errors();
				    exit;
				}
	    		else {
					$upload_data = $this->upload->data();
					if($upload_data['file_name'] !="")
						$fileberkas3 = $upload_data['file_name'];
					else 
						$fileberkas3 = "";
				}
	    			
	    	}
	    	else {
	    	    $fileberkas3 = "";
	    	}

	    	if(!empty($_FILES['filefoto']['name'])){
	    		if(!$this->upload->do_upload('filefoto')){
					$this->upload->display_errors();
				    exit;
				}
	    		else {
					$upload_data = $this->upload->data();
					if($upload_data['file_name'] !="")
						$filefoto = $upload_data['file_name'];
					else 
						$filefoto = "";
				}
	    			
	    	}
	    	else {
	    	    $filefoto = "";
	    	}

	    	
	   //ambil postingan
	   
	    $kodependaftaran = $this->input->post("kodepeserta");
	    //simpan ke database
	    $data = array('berkas_akte_kelahiran'=>$fileberkas,
					  'berkas_fotokeluarga'=>$fileberkas2,
					  'berkas_ijazah'=>$fileberkas3,
					  'berkas_pasfoto'=>$filefoto);
	    $this->db->where("nomor_pendaftaran",$kodependaftaran);
	    $this->db->update('pendaftaran',$data);
	    echo $kodependaftaran;
	}

	function print($id){
		$data["row"] = $this->Pendaftaran_model->cetakKartu($id);
		$this->load->view("guest/hasil/cetakPendaftaran",$data);
	}

	function cetakPendaftaran(){
		$kode = $this->input->post("pendaftaran");
		$data["row"] = $this->Pendaftaran_model->cetakKartu($kode);
		$this->load->view("guest/hasil/cetakPendaftaran",$data);
	}
	
}
