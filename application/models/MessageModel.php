<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MessageModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function getAllPesan(){
		$this->db->where("statusdibaca","belum");
		$query = $this->db->get('komentarpengunjung');
		return $query->result();
	}
	
	function getPesan($id){
		$this->db->where("idkomentarpengunjung",$id);
		$query = $this->db->get("komentarpengunjung");

		return $query->row();
	}

	function editPesan($id){
		$data = array("statusdibaca"=>"sudah");

		$this->db->where("idkomentarpengunjung",$id);
		$this->db->update("komentarpengunjung",$data);
	}
	
	
}

/* End of file */
