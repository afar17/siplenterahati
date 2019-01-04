<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
    protected $_ci;
	function __construct() {
		
		$this->_ci = &get_instance();
		
	}
	
	function full($template, $data=null) {
		//tampilkan
		$this->_ci->load->view('layouts/guest/header_web',$data);
		$this->_ci->load->view($template,$data);
		$this->_ci->load->view('layouts/guest/bottom_web',$data);
		$this->_ci->load->view('layouts/guest/righbar_web',$data);
		$this->_ci->load->view('layouts/guest/footer_web',$data);
	}
	
	function isi($template, $data=null){
		//tampilkan
		$this->_ci->load->view('layouts/guest/header_web',$data);
		$this->_ci->load->view($template,$data);
		$this->_ci->load->view('layouts/guest/righbar_web',$data);
		$this->_ci->load->view('layouts/guest/footer_web',$data);
	}
    
	function admin($template, $data=null){
		//tampilkan
		$this->_ci->load->view('layouts/admin/header_admin',$data);
		$this->_ci->load->view($template,$data);
		$this->_ci->load->view('layouts/admin//footer_admin',$data);      
    }
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */