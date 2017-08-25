<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse_peraturan extends CI_Controller {
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
		$data['judul'] = 'Browse Peraturan';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('peraturan/browse_peraturan', $data);
		$this->load->view('templates/footer');
	}
}
