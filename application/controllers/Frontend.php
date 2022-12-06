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

	// public function konfirmasi_donasi(){
	// 	if(isset($_POST['next'])){
	// 		$nama = $this->input->post('nama');
	// 		$email = $this->input->post('email');
	// 		$nohp = $this->input->post('nohp');
	// 		$jumlah = $this->input->post('jumlah');
	// 		$bank = $this->input->post('bank');
	// 		$rek = $this->input->post('rek');
	// 		$atas_nama = $this->input->post('atas_nama');
	// 		$pesan = $this->input->post('pesan');
	// 		$kode = $this->input->post('kode');
	// 		$kode_donasi = $this->input->post('kode_donasi');
	// 		$cek = $this->db->where('kode_donasi',$kode_donasi)->get('tb_donasi')->row_array();
	// 		if($cek){
	// 			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Kode donasi sudah digunakan</div>');
	// 			redirect('donasi');
	// 		}else{
	// 			$data = array(
	// 				'nama' => $nama,
	// 				'email' => $email,
	// 				'nohp' => $nohp,
	// 				'jumlah' => $jumlah,
	// 				'bank' => $bank,
	// 				'rek' => $rek,
	// 				'atas_nama' => $atas_nama,
	// 				'pesan' => $pesan,
	// 				'kode' => $kode,
	// 				'kode_donasi' => $kode_donasi,
	// 				'tanggal' => date('Y-m-d')
	// 			);
	// 			$this->db->insert('tb_donasi',$data);
	// 			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Donasi berhasil dikirim</div>');
	// 			redirect('donasi');
	// 		}
	// 	}

	// 	if(isset($_POST['konfirmasi'])){
	// 		$nama = $this->input->post('nama');
	// 		$email = $this->input->post('email');
	// 		$nohp = $this->input->post('nohp');
	// 		$jumlah = $this->input->post('jumlah');
	// 		$bank = $this->input->post('bank');
	// 		$rek = $this->input->post('rek');
	// 		$atas_nama = $this->input->post('atas_nama');
	// 		$pesan = $this->input->post('pesan');
	// 		$kode = $this->input->post('kode');
	// 		$kode_donasi = $this->input->post('kode_donasi');
	// 		$cek = $this->db->where('kode_donasi',$kode_donasi)->get('tb_donasi')->row_array();
	// 		if($cek){
	// 			$this->session-('pesan', '<div class="alert alert-danger" role="alert">Kode donasi sudah digunakan</div>');
	// 			redirect('donasi');
	// 		}else{
	// 			$data = array(
	// 				'nama' => $nama,
	// 				'email' => $email,
	// 				'nohp' => $nohp,
	// 				'jumlah' => $jumlah,
	// 				'bank' => $bank,
	// 				'rek' => $rek,
	// 				'atas_nama' => $atas_nama,
	// 				'pesan' => $pesan,
	// 				'kode' => $kode,
	// 				'kode_donasi' => $kode_donasi,
	// 				'tanggal' => date('Y-m-d')
	// 			);
	// 			$this->db->insert('tb_donasi',$data);
	// 			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Donasi berhasil dikirim</div>');
	// 			redirect('donasi');
	// 		}
	// 	}

	// }


}
