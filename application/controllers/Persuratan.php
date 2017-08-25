<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persuratan extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('kepegawaian_model');
			$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['kepegawaian'] = $this->kepegawaian_model->get_kepegawaian();
		$data['judul'] = 'Persuratan';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('home/persuratan', $data);
		$this->load->view('templates/footer');
	}
}
