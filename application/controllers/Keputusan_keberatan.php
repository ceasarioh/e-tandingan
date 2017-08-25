<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keputusan_keberatan extends CI_Controller {
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
		$data['judul'] = 'Keputusan Keberatan';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('keberatan/keputusan_keberatan', $data);
		$this->load->view('templates/footer');
	}
}
