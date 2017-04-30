<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friends extends CI_Controller{

    public function index(){
      $this->load->model('Friends_model');

      $data['content'] = 'friends';
      $this->load->view('templates/template', $data);

    }

}

?>