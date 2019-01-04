<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bantuan {

    private $CI;

	public function __construct(){
	 //biar bisa pakai semua fungsi / sistem di codeigniter, sperti databasenya, load viewnya dll.
	 $this->CI =& get_instance();
	}
	
	function noPendaftaran($kode){
	    $i = 0; //counter
	    $pin = ""; //our default pin is blank.
	    while($i < 3){
	        //generate a random number between 0 and 9.
	        $pin .= mt_rand(0, 3);
	        $i++;
	    }
		$data = explode('-',date('Y-m-d'));
	    return $kode.$data[0].$data[1].$data[2].$pin;
	}

	public function getInformasi(){
		$this->CI->load->model('Infomodel');
		$informasi = $this->CI->Infomodel->getAll();
		
		return $informasi;
	}
	
	public function cekkuotatk(){
		//ambil tahun sekarang
		$tahun = explode('-',date('Y-m-d'),4);
		$this->CI->db->where("YEAR(tgl_pendaftaran)",$tahun[0]);
		$this->CI->db->where("sekolah_kodesekolah","TKIT");
		$this->CI->db->from('pendaftaran');
		$data = $this->CI->db->count_all_results();
		
		return $data;
	}
	public function cekkuotasd(){
		//ambil tahun sekarang
		$tahun = explode('-',date('Y-m-d'),4);
		$this->CI->db->where("YEAR(tgl_pendaftaran)",$tahun[0]);
		$this->CI->db->where("sekolah_kodesekolah","SDIT");
		$this->CI->db->from('pendaftaran');
		$data = $this->CI->db->count_all_results();
		
		return $data;
	}
	public function cekkuotasmp(){
		//ambil tahun sekarang
		$tahun = explode('-',date('Y-m-d'),4);
		$this->CI->db->where("YEAR(tgl_pendaftaran)",$tahun[0]);
		$this->CI->db->where("sekolah_kodesekolah","SMPIT");
		$this->CI->db->from('pendaftaran');
		$data = $this->CI->db->count_all_results();
		
		return $data;
	}

	function jumlahkomentar(){
		$this->CI->db->where('statusdibaca','belum');
		$this->CI->db->from('komentarpengunjung');
		$data = $this->CI->db->get();
		
		return $data->num_rows();
	}

	//AMBIL PESAN MASUK YANG BELUM DIBACA DAN DITAMPILKAN DI NOTIF MESSAGE
	function pesanMasuk(){
		$this->CI->db->where('statusdibaca','belum');
		$this->CI->db->from('komentarpengunjung');
		$this->CI->db->order_by("idkomentarpengunjung",'desc');
		$this->CI->db->limit("5");
		$data = $this->CI->db->get();
		
		return $data->result();
	}

	function jumlahPendaftaran($kode){
		
		$this->CI->db->where("YEAR(tgl_pendaftaran)",date("Y"));
		if($kode != "All"){
			$this->CI->db->where("sekolah_kodesekolah",$kode);
		}
		
		$this->CI->db->from('pendaftaran');
		$data = $this->CI->db->count_all_results();
		
		return $data;
	}
}
?>