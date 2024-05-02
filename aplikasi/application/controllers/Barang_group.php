<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_group extends CI_Controller {
	public function index()
	{
		$this->load->view('barang_group/input');
	}
	
	public function Add(){
		$nama = $this->input->post('nama');
		$data = array('Nama'=>$nama);
		$this->db->insert('barang_group',$data);
	}

}
