<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upayahukum extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function view($halaman = 'overview'){

		if(!file_exists(APPPATH."views/pages/upaya_hukum/".$halaman.'.php')){
			show_404();
		}

		$data['judul'] = ucwords(str_replace(["_", "–"], ' ', $halaman));
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/upaya_hukum/'.$halaman);
		$this->load->view('templates/footer');
	}

}
