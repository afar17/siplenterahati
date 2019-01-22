<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function getAll(){
		$query = $this->db->get('users');
		return $query->result();
	}
		
	function cekPassword($password){
		$this->db->where('idusers', $this->session->userdata('id'));
		$this->db->where('password', md5($password));
		$this->db->from('users');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return true;
		}
		else {
			return false;
		}
	}
	
	function gantiPassword($pass){
		$username = $this->input->post('username');
		
		$data = array("username"=>$username,
					  "password"=>md5($pass));
		$this->db->where('id_user',$this->session->userdata('id'));
		
		$this->db->update('users',$data);
		return true;
	}	
	
	function save(){
		$namalengkap = $this->input->post('namalengkap');
		$username 	 = $this->input->post('username');
		$password 	 = $this->input->post('password');
		$level  	 = $this->input->post('level');
		
		$data = array("username"=>$username,
					  "nama_lengkap"=>$namalengkap,
					  "password"=>md5($password),
					  "level"=>$level);
		
		$this->db->insert('users',$data);
	}
	
	public function delete($id){
		$this->db->where('id_user', $id);
		$this->db->delete('users');
	}

	public function prosesganti(){
		$passwordlama = $this->input->post("passwordlama");
		//cek kesediaan di database, ada atau tidak
		$this->db->where("id_user",$this->session->userdata("id"));
		$this->db->where("password",md5($passwordlama));
		$hasil = $this->db->get("users");
		if($hasil->num_rows() == 1){
			//konfirmasi password baru
			$passwordbaru = $this->input->post("passwordbaru");
			$confirmpasswordbaru = $this->input->post("confirmpasswordbaru");
			if($passwordbaru == $confirmpasswordbaru){
				$data = array("password"=>md5($passwordbaru));
				$this->db->where("id_user",$this->session->userdata("id"));
				$this->db->update("users",$data);
				$this->session->set_flashdata("success","Proses ganti password berhasil, silahkan keluar dan login dengan password yang baru saja anda buat.");
			}
			else {
				$this->session->set_flashdata("error","Password dan Konfirmasi Password berbeda.");
			}
		}
		else {
			$this->session->set_flashdata("error","Gagal merubah password.");
		}

	}
	
}

/* End of file */
