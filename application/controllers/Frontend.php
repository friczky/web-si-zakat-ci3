<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {


	public function index()
	{
		$data['slider'] = $this->db->order_by('id','desc')->get('tb_slider')->result();
		$data['berita'] = $this->db->select('tb_berita.*,tb_kategori.kategori,tb_pengguna.nama')->order_by('id_berita','desc')->from('tb_berita')->join('tb_kategori','tb_kategori.id_kategori = tb_berita.id_kategori')->join('tb_pengguna','tb_pengguna.id_pengguna = tb_berita.id_user')->get()->result();
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['title'] = 'Home - '.$data['sistem']['nama_web'];
		$this->load->view('frontend/index',$data);
	}
}
