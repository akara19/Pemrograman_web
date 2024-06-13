<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
	
	public function Cek(){
		$usernama 	= $this->input->post('nama');
		$pswd		= $this->input->post('pswd');
		$cek		= $this->db->get_where('tbl_user',array(
						'user_name' => $usernama,
						'pswd'		=> $pswd
					  ));
		if ($cek->num_rows()>0){
			//echo "Login Berhasil";
			$this->load->view('dashboard');
		}else{
			$this->load->view('login');
		}
	}

}
