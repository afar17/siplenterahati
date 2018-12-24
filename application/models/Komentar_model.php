<?php 

if (!defined('BASEPATH')) {exit('No direct script access allowed'); }	

class Komentar_model extends CI_Model {
    public function __construct(){
		// DB koneksi default
    }
   

	function save(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$isipesan = $this->input->post('isipesan');
		
		$data = array("namapengunjung"=>$nama,
					  "emailpengunjung"=>$email,
					  "isikomentar"=>$isipesan,
					  "statusdibaca"=>"belum",
					  "tanggalkomentar" =>date("Y-d-m H-i-s"));
		
		$this->db->insert('komentarpengunjung',$data);
		return $this->db->insert_id();
	}

}



