<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data dokumentasi';
		$data['dokumentasi'] = $this->db->order_by('id', 'desc')->get('tb_dokumentasi')->result();
		$this->load->view('backend/dokumentasi/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah dokumentasi';
		$this->load->view('backend/dokumentasi/tambah', $data);
	}

	public function store()
	{
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/dokumentasi/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$foto = $this->upload->data('file_name');
		} else {
			// $this->upload->display_errors();
			echo "Format Gambar Tidak Didukung";
		}
		$data = [
			'nama'			=> $this->input->post('nama'),
			'deskripsi'		=> $this->input->post('deskripsi'),
			'tanggal'		=> date('d-m-Y', strtotime($this->input->post('tanggal'))),
			'foto'          => $foto,
		];
		$this->db->insert('tb_dokumentasi', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan dokumentasi !</div>');
		redirect(base_url('dashboard/dokumentasi'));
	}

	public function update($id)
	{
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/dokumentasi/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
			if ($fotolama != 'default.jpg') {
				unlink(FCPATH . './uploads/dokumentasi/' . $fotolama);
			}
			$fotobaru = $this->upload->data('file_name');
			$this->db->set('foto', $fotobaru);
		} else {
			$this->upload->display_errors();
		}

		$data = [
			'nama'			=> $this->input->post('nama'),
			'deskripsi'		=> $this->input->post('deskripsi'),
			'tanggal'		=> date('d-m-Y', strtotime($this->input->post('tanggal'))),
		];
		$this->db->where('id', $id)->update('tb_dokumentasi', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil memperbahrui dokumentasi !</div>');
		redirect(base_url('dashboard/dokumentasi'));
	}

	public function hapus($id)
	{
		$data = $this->db->where('id', $id)->get('tb_dokumentasi');
		foreach ($data->result() as $u) {
			unlink('uploads/dokumentasi/' . $u->foto);
		}
		$this->db->where('id', $id)->delete('tb_dokumentasi');
		$this->session->set_flashdata('sukses', '<div class="alert alert-danger"> Berhasil Menghapus dokumentasi !</div>');
		redirect(base_url('dashboard/dokumentasi'));
	}
}
