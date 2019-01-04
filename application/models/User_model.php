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
	
}

/* End of file */
