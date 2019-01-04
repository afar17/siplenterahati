<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Infomodel extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function getAll(){
		$query = $this->db->get('informasi');
		return $query->result();
	}
	public function save(){
		$id_info = $this->input->post('id_info');
		$jdl_berita = $this->input->post('jdl_berita');
		$isi_berita = $this->input->post('isi_berita');
		$tgl = explode('/',$this->input->post('tgl_terbit'));
		$tgl_terbit = $tgl[2]."-".$tgl[1]."-".$tgl[0];
        $id_user = $this->input->post('id_user');
        $sekolah = $this->input->post('sekolah');
		
		$data = array("id_info"=>$id_info,
					  "jdl_berita"=>$jdl_berita,
					  "isi_berita"=>$isi_berita,
					  "tgl_terbit"=>$tgl_terbit,
					  "id_user"=>$this->session->userdata('id'),
					  "sekolah_kodesekolah"=>$sekolah);
					  
		$this->db->insert('informasi', $data);
	}
	function getId($id){
		$this->db->where('id_info',$id);
		$hasil = $this->db->get('informasi');
		return $hasil->row();
	}
	
	function update(){
		$id_info = $this->input->post('id_info');
        $jdl_berita = $this->input->post('jdl_berita');
		$isi_berita = $this->input->post('isi_berita');
        $tgl = explode('/',$this->input->post('tgl_terbit'));
		$tgl_terbit = $tgl[2]."-".$tgl[1]."-".$tgl[0];
        $sekolah = $this->input->post('sekolah');
		
		$data = array("id_info"=>$id_info,
					  "jdl_berita"=>$jdl_berita,
					  "isi_berita"=>$isi_berita,
					  "tgl_terbit"=>$tgl_terbit,
					  "id_user"=>$this->session->userdata('id'),
					  "sekolah_kodesekolah"=>$sekolah);
		
        $this->db->where('id_info',$id_info);
		$this->db->update('informasi',$data);
                
                
     }
	
	public function delete($id){
		$this->db->where('id_info', $id);
		$this->db->delete('informasi');
	}
	
	
}

/* End of file */
