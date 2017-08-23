<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_news extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    //Codeigniter : Write Less Do More
  }

  function listNews()
  {
    $this->load->model(m_login);
  }

}
