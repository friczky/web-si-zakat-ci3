<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Home' ;
		$data['menu'] = 'dashboard';
		$data['menuopen'] = '';
		$data['donasi'] = $this->db->order_by('id', 'desc')->get('tb_donasi')->result();
		$this->load->view('backend/v_dashboard',$data);
	}

	public function admin()
	{
		redirect(base_url('dashboard'));
	}

	public function test(){
		$this->load->view('backend/komponen/test');
	}
}
