<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function index(){
      $this->load->model('Dashboard_model');

      $data['content'] = 'dashboard';
      $this->load->view('templates/template', $data);

    }

}

?>