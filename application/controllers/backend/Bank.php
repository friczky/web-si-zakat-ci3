<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data bank';
		$data['bank'] = $this->db->order_by('id', 'desc')->get('tb_bank')->result();
		$this->load->view('backend/bank/index', $data);
	}

	public function store()
	{
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/bank/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$foto = $this->upload->data('file_name');
		} else {
			// $this->upload->display_errors();
			echo "Format Gambar Tidak Didukung";
		}
		$data = [
			'nama_pemilik'	=> $this->input->post('nama_pemilik'),
			'no_rek'		=> $this->input->post('no_rek'),
			'nama_bank'		=> $this->input->post('nama_bank'),
			'foto'          => $foto,
		];
		$this->db->insert('tb_bank', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan bank !</div>');
		redirect(base_url('dashboard/bank'));
	}

	public function update($id)
	{
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/bank/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
			if ($fotolama != 'default.jpg') {
				unlink(FCPATH . './uploads/bank/' . $fotolama);
			}
			$fotobaru = $this->upload->data('file_name');
			$this->db->set('foto', $fotobaru);
		} else {
			$this->upload->display_errors();
		}

		$data = [
			'nama_pemilik'	=> $this->input->post('nama_pemilik'),
			'no_rek'		=> $this->input->post('no_rek'),
			'nama_bank'		=> $this->input->post('nama_bank'),
		];
		$this->db->where('id', $id)->update('tb_bank', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil memperbahrui bank !</div>');
		redirect(base_url('dashboard/bank'));
	}

	public function hapus($id)
	{
		$data = $this->db->where('id', $id)->get('tb_bank');
		foreach ($data->result() as $u) {
			unlink('uploads/bank/' . $u->foto);
		}
		$this->db->where('id', $id)->delete('tb_bank');
		$this->session->set_flashdata('sukses', '<div class="alert alert-danger"> Berhasil Menghapus bank !</div>');
		redirect(base_url('dashboard/bank'));
	}
}
