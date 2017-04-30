<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrow extends CI_Controller{

    public function index(){
      $this->load->model('Borrow_model');

      $data['content'] = 'borrow';
      $this->load->view('templates/template', $data);

    }

}

?>