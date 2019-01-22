<?php 

if (!defined('BASEPATH')) {exit('No direct script access allowed'); }	

class Laporanmodel extends CI_Model {

	 //datatables
    var $table = 'pendaftaran';
    var $column_order = array('nomor_pendaftaran', 'nm_lengkap','sekolah_kodesekolah'); //set column field database for datatable orderable
    var $column_search = array('nm_lengkap','nomor_pendaftaran','alamat'); //set column field database for datatable searchable 
    var $order = array('id_daftar' => 'asc'); // default order 

    public function __construct(){
		// DB koneksi default
    }
   
	function getTahun() {
		$this->db->select("tgl_pendaftaran");
		$this->db->group_by("YEAR(tgl_pendaftaran)");

		$query = $this->db->get('pendaftaran');
		return $query->result();
	}

	private function datatables($id)
    {
        
        $this->db->where('sekolah_kodesekolah',$id);
      
        $this->db->where("YEAR(tgl_pendaftaran)",$this->session->userdata("tahun"));
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables($id)
    {
        $this->datatables($id);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered($id)
    {
        $this->db->where('sekolah_kodesekolah',$id);
        $this->db->where("YEAR(tgl_pendaftaran)",$this->session->userdata("tahun"));
        $this->datatables($id);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all($id)
    {
        $this->db->where('sekolah_kodesekolah',$id);
        $this->db->where("YEAR(tgl_pendaftaran)",$this->session->userdata("tahun"));
        $this->db->from($this->table);

        return $this->db->count_all_results();
    }
}



