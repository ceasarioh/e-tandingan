<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam_memori_PK extends CI_Controller {
/*
	public function __construct(){
			parent::__construct();
			$this->load->model('kepegawaian_model');
			$this->load->helper('url_helper');
	}
*/
	public function index()
	{
		/* $data['kepegawaian'] = $this->kepegawaian_model->get_kepegawaian(); */
		$data['judul'] = 'Rekam Memori PK';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('upaya_hukum/rekam_memori_PK', $data);
		$this->load->view('templates/footer');
	}
}
