<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Gallery_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function getAll(){
		$query = $this->db->get('galeri');
		return $query->result();
	}
	
}

/* End of file */
