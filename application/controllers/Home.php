<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {



	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function view($halaman = 'overview'){

		if(!file_exists(APPPATH."views/pages/home/".$halaman.'.php')){
			show_404();
		}

		$data['judul'] = ucwords(str_replace(["_", "–"], ' ', $halaman));
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/home/'.$halaman);
		$this->load->view('templates/footer');
	}

}
