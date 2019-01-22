<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata() !=true){
			redirect('Info');
		}
		$this->load->model('Laporanmodel');
	}

	public function index()

	{
		$data['tahun'] = $this->Laporanmodel->getTahun();
		$this->template->admin('admin/form/Laporan',$data);
	}
	

	public function pencarian(){
		$data['menuLaporan'] = 'active';
		$data['tahun'] = $this->Laporanmodel->getTahun();
		$kodesekolah = $this->input->post('sekolah');
		$tahun = $this->input->post("tahun");
		$data['kodeajax'] = $kodesekolah;

		$tahun = array("tahun"=>$tahun,
					   "judulPencarian"=>"Laporan ".$kodesekolah.", Tahun ".$tahun);
		$this->session->set_userdata($tahun); 

		$this->template->admin('admin/form/Laporan',$data);
	}

	public function datatables($kodesekolah)
    {
        $list = $this->Laporanmodel->get_datatables($kodesekolah);
        $data = array();
        $no = $_POST['start'];
		$jumlah_time="00:00";
        foreach ($list as $hasil) {
            
            $row = array();
            $row[] = $hasil->nomor_pendaftaran;
            $row[] = $hasil->nm_lengkap;
            $row[] = date('d/m/Y',strtotime($hasil->tgl_lahir));
			$row[] = $hasil->alamat;
			$row[] = $hasil->status;

			$row[] = '<a class="btn btn-sm btn-primary" href="'.site_url('admin/Pendaftaran/lihat/'.$hasil->nomor_pendaftaran).'" title="Lihat"><i class="glyphicon glyphicon-file"></i> Lihat</a>';
         
			
			$data[] = $row;
        }
 
        $output = array("draw" => $_POST['draw'],
                        "recordsTotal" => $this->Laporanmodel->count_all($kodesekolah),
                        "recordsFiltered" => $this->Laporanmodel->count_filtered($kodesekolah),
                        "data" => $data);
        //output to json format
        echo json_encode($output);
    }
}
