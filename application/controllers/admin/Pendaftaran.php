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
		$data['menuPendaftaran']='active';
		if($this->input->post("save")=='save'){
			$this->Pendaftaran_model->savekeputusan();
		
		}
		$this->template->admin('admin/data/pendaftaran',$data);
	}
    
	public function datatables($kodesekolah)
    {
        $list = $this->Pendaftaran_model->get_datatables($kodesekolah);
        $data = array();
        $no = $_POST['start'];
		$jumlah_time="00:00";
        foreach ($list as $hasil) {
            
            $row = array();
            $row[] = $hasil->nomor_pendaftaran;
            $row[] = $hasil->nm_lengkap;
            $row[] = date('d/m/Y',strtotime($hasil->tgl_lahir));
			$row[] = $hasil->alamat;

			$row[] = '<a class="btn btn-sm btn-primary" href="'.site_url('admin/Pendaftaran/lihat/'.$hasil->nomor_pendaftaran).'" title="Lihat"><i class="glyphicon glyphicon-file"></i> Lihat</a>';
         
			
			$data[] = $row;
        }
 
        $output = array("draw" => $_POST['draw'],
                        "recordsTotal" => $this->Pendaftaran_model->count_all($kodesekolah),
                        "recordsFiltered" => $this->Pendaftaran_model->count_filtered($kodesekolah),
                        "data" => $data);
        //output to json format
        echo json_encode($output);
    }

    public function lihat($id)
	{
		$data['row'] = $this->Pendaftaran_model->getId($id);
		$this->template->admin('admin/data/lihatpendaftaran',$data);
	}
	
	public function save(){
		$kodependaftaran = $this->Pendaftaran_model->save();
		$kodesekolah  = $this->input->post('kodesekolah');
        
        $this->load->view('vendor/autoload.php');
		
		$options = array(
			'cluster' => 'mt1',
			'useTLS' => true
		);
		
		  $pusher = new Pusher\Pusher(
			'0d6441fb549705e4a440',
			'e9a790ca2e8f1d487173',
			'630281',
			$options
		  );
		  $data['name'] =  $this->input->post('nm_lengkap');
		  $data['alamat'] = $this->input->post('alamat');
		  $data['sekolah'] = $kodesekolah;
		  $data['kodependaftaran'] = $kodependaftaran;

		  if($this->input->post('tanggallahir')!="") {
		  	$data['tanggallahir'] = $this->input->post('tanggallahir');
		  }
		  else {
		  	$data['tanggallahir']="tidak-ada";
		  }

		  //buat trigger utk masing2 akun yang login
		  if($kodesekolah=='TKIT'){
		  	$pusher->trigger('tk-channel', 'tk-event', $data);
		  }
		  else if($kodesekolah=='SDIT'){
		  	$pusher->trigger('sd-channel', 'sd-event', $data);
		  }
		  else {
		  	$pusher->trigger('smp-channel', 'smp-event', $data);
		  }

		  $pusher->trigger('admin-channel', 'admin-event', $data);
		  echo $kodependaftaran;
	}
	
	public function edit($id){
		$data['menu_setting']='active';
		$data['edit'] = 'edit';
		$data['row']= $this->Pendaftaran_model->getId($id);
		$this->template->isi('halaman/psb/pendaftaranform',$data);
		
	}
	
	public function update(){
		$this->Pendaftaran_model->update(); 
		$this->session->set_flashdata('success','Data Berhasil Diperbaharui!');
		
		redirect('pendaftaran/index');
	}

	public function lihattk(){
		$data['urlAjax'] =  site_url('pendaftaran/list_tk');
		$this->template->isi('halaman/psb/pendaftarantk',$data);
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
                        "recordsTotal" => $this->pendaftaran_model->count_all("TKIT"),
                        "recordsFiltered" => $this->pendaftaran_model->count_filtered("TKIT"),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 	

    public function lihatsd(){
    	$data['urlAjax'] =  site_url('pendaftaran/list_sd');
    	$this->template->isi('halaman/psb/pendaftaransd',$data);
	}

	public function list_sd()
    {
        $list = $this->pendaftaran_model->get_datatables("SDIT");
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
                        "recordsTotal" => $this->pendaftaran_model->count_all("SDIT"),
                        "recordsFiltered" => $this->pendaftaran_model->count_filtered("SDIT"),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function lihatsmp(){
    	$data['urlAjax'] =  site_url('pendaftaran/list_smp');
		$this->template->isi('halaman/psb/pendaftaransmp',$data);
	}

	public function list_smp()
    {
        $list = $this->pendaftaran_model->get_datatables("SMPIT");
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
                        "recordsTotal" => $this->pendaftaran_model->count_all("SMPIT"),
                        "recordsFiltered" => $this->pendaftaran_model->count_filtered("SMPIT"),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

	
	
}
