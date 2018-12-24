<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->load->view('Login');
	}

	public function proses(){
		//memanggil file content yang terdapat di folder views/content
		if($_POST['login']){
			//mengambil nilai dari variable username & password
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			
			//mengirim ke model user, fungsi login dengan 2 parameter
			//$username dan $password
			//kemudian di simpan di variable $user
			$user = $this->Auth_model->login($username, $password);
			
			//bila variable user sukses, user terdaftar
			if($user){
				//bila user dan password benar simpan nilai ke dalam session
				$data = array('isLogin'=>true,
				'nama'=>$user[0]->username,
				'id'=>$user[0]->id_user,
				'level'=>$user[0]->level);
				
				//menyimpan session menggunakan setvalue
				$this->session->set_userdata($data); 
				
				//arahkan atau redirect ke controller admin dan function index
				redirect(site_url("admin/Dashboard")); 
			}
			else{
				$this->session->set_flashdata('error','Akun anda tidak ditemukan.');
				redirect('login');
			}
		}
	}
	
	public function signout(){
		$this->session->unset_userdata('isLogin');
		$this->session->sess_destroy();
		$this->session->set_flashdata('success','Terimakasih atas perhatiannya.');
		redirect(site_url("login"));
	}
}
