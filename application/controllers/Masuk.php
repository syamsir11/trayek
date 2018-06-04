<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('login');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('login');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			// 'password' => $password
			);
		$cek = $this->login->cek_login("tbl_user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 			echo '<script language="javascript">alert("Welcome To Admin");document.location="../";</script>';
			// redirect(base_url("run"));
 
		}else{
			echo '<script language="javascript">alert("Password atau Username belum terdaftar"); document.location="../masuk";</script>';
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('masuk'));
	}
}
