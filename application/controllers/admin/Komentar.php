<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->model("Komentar_model");
	}


	public function simpanKomentar(){
		$id = $this->Komentar_model->save();
		
		$this->load->view('vendor/autoload.php');
		
		$options = array(
			'cluster' => 'mt1',
			'useTLS' => true
		);
		
		  $pusher = new Pusher\Pusher(
			'c4aa79921b531bda044b',
			'99daae6c88fb2984992c',
			'630281',
			$options
		  );
		  $data['name'] = $this->input->post('nama');
		  $data['message'] = $this->input->post('isipesan');
		  $data['email'] = $this->input->post('email');
		  $data['tanggalkomentar'] = date("Y-m-d H-i-s");
		  $data['idkomentar'] = $id; 
		  $pusher->trigger('my-channel', 'my-event', $data);
	}
}
