<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data layanan';
		$data['layanan'] = $this->db->order_by('id', 'desc')->get('tb_layanan')->result();
		$this->load->view('backend/layanan/index', $data);
	}

	public function store()
	{
		$data = [
			'nama'			=> $this->input->post('nama'),
			'deskripsi'		=> $this->input->post('deskripsi')
		];
		$this->db->insert('tb_layanan', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan layanan !</div>');
		redirect(base_url('dashboard/layanan'));
	}

	public function update($id)
	{
		$data = [
			'nama'			=> $this->input->post('nama'),
			'deskripsi'		=> $this->input->post('deskripsi'),
		];
		$this->db->where('id', $id)->update('tb_layanan', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil memperbahrui layanan !</div>');
		redirect(base_url('dashboard/layanan'));
	}

	public function hapus($id)
	{
		$this->db->where('id', $id)->delete('tb_layanan');
		$this->session->set_flashdata('sukses', '<div class="alert alert-danger"> Berhasil Menghapus layanan !</div>');
		redirect(base_url('dashboard/layanan'));
	}
}
