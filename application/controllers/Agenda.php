<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends CI_Controller
{

     public function __construct() {
        Parent::__construct();
        $this->load->model("agenda_model");
    }

    public function index()
    {
  /*		$data['kepegawaian'] = $this->kepegawaian_model->get_kepegawaian(); */
      $data['judul'] = 'Agenda Direktur KBP';

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('home/agenda', $data);
      $this->load->view('templates/footer');
    }

}
