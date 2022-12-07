<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {


	public function index()
	{
		$data['slider'] = $this->db->order_by('id','desc')->get('tb_slider')->result();
		$data['berita'] = $this->db->select('tb_berita.*,tb_kategori.kategori,tb_pengguna.nama')->order_by('id_berita','desc')->from('tb_berita')->join('tb_kategori','tb_kategori.id_kategori = tb_berita.id_kategori')->join('tb_pengguna','tb_pengguna.id_pengguna = tb_berita.id_user')->get()->result();
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['layanan'] = $this->db->get('tb_layanan',3)->result();
		$data['title'] = 'Home - '.$data['sistem']['nama_web'];
		$this->load->view('frontend/index',$data);
	}

	public function tentang()
	{
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['title'] = 'Tentang - '.$data['sistem']['nama_web'];
		$this->load->view('frontend/tentang',$data);
	}

	public function layanan()
	{
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['title'] = 'Layanan - '.$data['sistem']['nama_web'];
		$data['layanan'] = $this->db->get('tb_layanan')->result();
		$this->load->view('frontend/layanan',$data);
	}

	public function dokumentasi()
	{
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['dok'] 	= $this->db->get('tb_dokumentasi')->result();
		$data['title'] 	= 'Dokumentasi - '.$data['sistem']['nama_web'];
		$this->load->view('frontend/dokumentasi',$data);
	}

	public function berita()
	{
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['berita'] = $this->db->select('tb_berita.*,tb_kategori.kategori,tb_pengguna.nama')->order_by('id_berita','desc')->from('tb_berita')->join('tb_kategori','tb_kategori.id_kategori = tb_berita.id_kategori')->join('tb_pengguna','tb_pengguna.id_pengguna = tb_berita.id_user')->get()->result();
		$data['title'] = 'Berita - '.$data['sistem']['nama_web'];
		$this->load->view('frontend/berita',$data);
	}

	public function berita_detail($id)
	{
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['berita'] = $this->db->select('tb_berita.*,tb_kategori.kategori,tb_pengguna.nama')->where('id_berita',$id)->from('tb_berita')->join('tb_kategori','tb_kategori.id_kategori = tb_berita.id_kategori')->join('tb_pengguna','tb_pengguna.id_pengguna = tb_berita.id_user')->get()->row_array();
		$data['title'] = $data['berita']['judul'].' - '.$data['sistem']['nama_web'];
		$this->load->view('frontend/berita-detail',$data);
	}

	public function kontak()
	{
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['title'] = 'Kontak - '.$data['sistem']['nama_web'];
		$this->load->view('frontend/kontak',$data);
	}

	public function kirim_pesan()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'pesan' => $this->input->post('pesan'),
			'tanggal' => date('Y-m-d')
		);
		$this->db->insert('tb_pesan',$data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pesan berhasil dikirim</div>');
		redirect('kontak');
	}

	public function donasi()
	{
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['bank'] = $this->db->get('tb_bank')->result();
		$data['title'] = 'Donasi - '.$data['sistem']['nama_web'];
		$this->load->view('frontend/donasi',$data);
	}

	public function konfirmasi(){
		$id_bank = $this->input->post('bank');
		$data['title'] = 'Konfirmasi Donasi';
		$data['bank'] = $this->db->where('id', $id_bank)->get('tb_bank')->row_array();
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$data['donasi'] = [
			'nama' => $this->input->post('nama'),
			'jumlah' => $this->input->post('jumlah'),
			'pesan' => $this->input->post('pesan'),
			'telepon' => $this->input->post('telepon'),
		];
		$this->load->view('frontend/konfirmasi', $data);
	}

	public function sukses(){
		if(isset($_POST['sukses'])){
			$config['allowed_types'] = 'jpg|png|gif|pdf|jpeg|doc|docx';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/bank/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$foto = $this->upload->data('file_name');
		} else {
			// $this->upload->display_errors();
			echo "Format Gambar Tidak Didukung";
		}
		$id_bank = $this->input->post('bank');
		$data['bank'] = $this->db->where('id', $id_bank)->get('tb_bank')->row_array();
		$data['donasi'] = [
			'nama' 		=> $this->input->post('nama'),
			'jumlah' 	=> $this->input->post('jumlah'),
			'telepon' 	=> $this->input->post('telepon'),
			'keterangan' => $this->input->post('pesan'),
			'kategori' 	=> 'Pemasukan',
			'bank' 		=> $this->input->post('bank'),
			'tanggal'	=> date('d-m-Y'),
			'bukti_pembayaran'		=> $foto,
		];
		$this->db->insert('tb_donasi', $data['donasi']);
		redirect('sukses');
		} else{
			$data['title'] = 'Sukses';
			$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
			$this->load->view('frontend/sukses',$data);
		}
		
	}
}
