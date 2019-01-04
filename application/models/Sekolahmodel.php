<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Sekolahmodel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function getAll(){
		$query = $this->db->get('sekolah');
		return $query->result();
	}
	
	public function save(){
		$kodesekolah = $this->input->post('kodesekolah');
		$namasekolah = $this->input->post('namasekolah');
		$alamat = $this->input->post('alamat');
		
		$data = array("kodesekolah"=>$kodesekolah,
					  "namasekolah"=>$namasekolah,
					  "alamat"=>$alamat);
					  
		$this->db->insert('sekolah',$data);
	}
	function getId($id){
		$this->db->where('kodesekolah',$id);
		$hasil = $this->db->get('sekolah');
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
		$this->db->where('kodesekolah', $id);
		$this->db->delete('sekolah');
	}
	
	
}

/* End of file */
