<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class quotamodel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function getAll(){
		$query = $this->db->get('quota_tk');
		return $query->result();
	}
	
	public function batas(){
		$tahun = explode('-',date('Y-m-d'),4);
		$this->db->where("tahun",$tahun[0]);
		$this->db->select("kuota");
		$angka = $this->db->get('quota_tk');
		return $angka->row();
	}
	
	public function save(){
		$tahun = $this->input->post('tahun');
		$kuota = $this->input->post('kuota');
		
		$data = array("tahun"=>$tahun,
					  "kuota"=>$kuota);
					  
		$this->db->insert('quota_tk',$data);
	}
	function getId($id){
		$this->db->where('tahun',$id);
		$hasil = $this->db->get('quota_tk');
		return $hasil->row();
	}
	
	function update(){
		$kodesekolahlama = $this->input->post('kodesekolahlama');
		$kodesekolah = $this->input->post('kodesekolah');
		$namasekolah = $this->input->post('namasekolah');
		$alamat = $this->input->post('alamat');
		
		$data = array("kodesekolah"=>$kodesekolah,
					  "namasekolah"=>$namasekolah,
					  "alamat"=>$alamat);
		$this->db->where('kodesekolah',$kodesekolahlama);
		$this->db->update('sekolah',$data);
	}
	
	public function delete($id){
		$this->db->where('tahun', $id);
		$this->db->delete('quota_tk');
	}
	
	
}

/* End of file */
