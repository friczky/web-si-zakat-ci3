<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data slider';
		$data['menu'] = 'slider';
		$data['menuopen'] = '';
		$data['slider'] = $this->db->order_by('id', 'desc')->get('tb_slider')->result();
		$this->load->view('backend/slider/index', $data);
	}

	public function store()
	{
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/slider/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$foto = $this->upload->data('file_name');
		} else {
			// $this->upload->display_errors();
			echo "Format Gambar Tidak Didukung";
		}
		$data = [
			'judul'			=> $this->input->post('judul'),
			'deskripsi'		=> $this->input->post('deskripsi'),
			'foto'          => $foto,
		];
		$this->db->insert('tb_slider', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan slider !</div>');
		redirect(base_url('dashboard/slider'));
	}

	public function update($id)
	{
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/slider/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
			if ($fotolama != 'default.jpg') {
				unlink(FCPATH . './uploads/slider/' . $fotolama);
			}
			$fotobaru = $this->upload->data('file_name');
			$this->db->set('foto', $fotobaru);
		} else {
			$this->upload->display_errors();
		}

		$data = [
			'judul'			=> $this->input->post('judul'),
			'deskripsi'		=> $this->input->post('deskripsi'),
		];
		$this->db->where('id', $id)->update('tb_slider', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil memperbahrui slider !</div>');
		redirect(base_url('dashboard/slider'));
	}

	public function hapus($id)
	{
		$data = $this->db->where('id', $id)->get('tb_slider');
		foreach ($data->result() as $u) {
			unlink('uploads/slider/' . $u->foto);
		}
		$this->db->where('id', $id)->delete('tb_slider');
		$this->session->set_flashdata('sukses', '<div class="alert alert-danger"> Berhasil Menghapus slider !</div>');
		redirect(base_url('dashboard/slider'));
	}
}
