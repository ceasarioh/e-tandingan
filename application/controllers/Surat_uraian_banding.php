<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_uraian_banding extends CI_Controller {
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
		$data['judul'] = 'Surat Uraian Banding';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('banding/SUB', $data);
		$this->load->view('templates/footer');
	}
}
