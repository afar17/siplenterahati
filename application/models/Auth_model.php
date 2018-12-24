<?php 

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}	

class Auth_model extends CI_Model {
    public function __construct(){
		// DB koneksi default
    }
    // public function login($user,$pw){
    	// $query = $this->db->query("select * from ".$this->tb." where username='".$user."' and password='".$pw."'"); //query cek ke table admin
		
		// return $query[0];
	// }
	 function login($user, $pass){
        $this->db->select('*');
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        $this->db->from('users');
        $query=$this->db->get();
        if ($query->num_rows() == 0)
            return false;
        else
            return $query->result();
    }
	public function getAll(){
		$results = $this->db->select()->from($this->tb)->getAll();
        return $results;
	}
	
}