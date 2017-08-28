<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_upaya_hukum extends CI_Controller {
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
		$data['judul'] = 'Upaya Hukum';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('upaya_hukum/overview_upaya_hukum', $data);
		$this->load->view('templates/footer');
	}
}
