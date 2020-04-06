<?php

class Home extends CI_Controller {

  public function index() {
    $this->load->view('/include/header');
    $this->load->view('/include/navbar');

    $this->load->view('/include/footer');
  }
}