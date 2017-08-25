<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian_model extends CI_Model{

  public function __construct(){
    $this->load->database();
  }

  public function get_kepegawaian(){
    $query = $this->db->get('kepegawaian');
    return $query->result_array();
  }
}
