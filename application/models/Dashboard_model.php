<?php 

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}	

class Dashboard_model extends CI_Model {
    public function __construct(){
		// DB koneksi default
    }
    // public function login($user,$pw){
    	// $query = $this->db->query("select * from ".$this->tb." where username='".$user."' and password='".$pw."'"); //query cek ke table admin
		
		// return $query[0];
	// }
	 function jumlahPendaftar($id){
        
        $this->db->where("YEAR(tgl_pendaftaran)",date("Y"));
        $this->db->where("sekolah_kodesekolah",$id);
        $this->db->from('pendaftaran');
        $query=$this->db->get();
        if ($query->num_rows() == 0)
            return "0";
        else
            return $query->num_rows();
    }
	
}