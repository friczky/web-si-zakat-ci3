<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {


	public function index()
	{
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['title'] = 'Home - '.$data['sistem']['nama_web'];
		$this->load->view('frontend/index',$data);
	}
}