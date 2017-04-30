<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller{

    public function index(){
      $this->load->model('Library_model');
      
      $data['content'] = 'library';
      $this->load->view('templates/template', $data);

    }

}

?>