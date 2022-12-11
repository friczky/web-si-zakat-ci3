<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data donasi';
		$data['menu'] = 'donasi';
		$data['menuopen'] = 'donasi';
		$data['donasi'] = $this->db->order_by('id', 'desc')->get('tb_donasi')->result();
		$this->load->view('backend/donasi/index', $data);
	}

	public function store()
	{
		$data = [
			'nama'			=> $this->input->post('nama'),
			'jumlah'		=> $this->input->post('jumlah'),
			'kategori'		=> $this->input->post('kategori'),
			'tanggal'		=> date('d-m-Y', strtotime($this->input->post('tanggal'))),
			'keterangan'		=> $this->input->post('keterangan'),
		];
		$this->db->insert('tb_donasi', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan donasi !</div>');
		redirect(base_url('dashboard/donasi'));
	}

	public function update($id)
	{
		$data = [
			'nama'			=> $this->input->post('nama'),
			'jumlah'		=> $this->input->post('jumlah'),
			'kategori'		=> $this->input->post('kategori'),
			'tanggal'		=> date('d-m-Y', strtotime($this->input->post('tanggal'))),
			'keterangan'	=> $this->input->post('keterangan'),
		];
		$this->db->where('id', $id)->update('tb_donasi', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil memperbahrui donasi !</div>');
		redirect(base_url('dashboard/donasi'));
	}

	public function hapus($id)
	{
		$this->db->where('id', $id)->delete('tb_donasi');
		$this->session->set_flashdata('sukses', '<div class="alert alert-danger"> Berhasil Menghapus donasi !</div>');
		redirect(base_url('dashboard/donasi'));
	}


}
