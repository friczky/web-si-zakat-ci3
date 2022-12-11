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
		$data['menu'] = 'layanan';
		$data['menuopen'] = '';
		$data['layanan'] = $this->db->order_by('id', 'desc')->get('tb_layanan')->result();
		$this->load->view('backend/layanan/index', $data);
	}

	public function store()
	{
		$config['allowed_types'] = 'jpg|png|gif|jpeg';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/layanan/';
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
			'foto'			=> $foto
		];
		$this->db->insert('tb_layanan', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan layanan !</div>');
		redirect(base_url('dashboard/layanan'));
	}

	public function update($id)
	{
		$config['allowed_types'] = 'jpg|png|gif|jpeg';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/layanan/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
			if ($fotolama != 'default.jpg') {
				unlink(FCPATH . './uploads/layanan/' . $fotolama);
			}
			$fotobaru = $this->upload->data('file_name');
			$this->db->set('foto', $fotobaru);
		} else {
			$this->upload->display_errors();
		}
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
