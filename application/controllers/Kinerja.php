<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kinerja extends CI_Controller {
/*
/model belom
	public function __construct(){
			parent::__construct();
			$this->load->model('kepegawaian_model');
			$this->load->helper('url_helper');
	}
*/
	public function index()
	{
/*		$data['kepegawaian'] = $this->kepegawaian_model->get_kepegawaian(); */
		$data['judul'] = 'Kinerja';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('home/Kinerja', $data);
		$this->load->view('templates/footer');
	}
}
