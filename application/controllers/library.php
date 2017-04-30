<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller{

    public function index(){
      $this->load->model('library_model');
      
      //get genders
      $data['genders'] = $this->library_model->get_genders();

      $data['books'] = $this->library_model->get_my_books();


      $data['content'] = 'library';
      $this->load->view('templates/template', $data);

    }

}

?>