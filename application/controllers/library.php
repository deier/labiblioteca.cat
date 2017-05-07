<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller{

    public function __construct()
    {
      parent::__construct();

      $this->load->model('library_model');

    }

    public function index(){      
      //get genders
      $data['genders'] = $this->library_model->get_genders();

      $data['books'] = $this->library_model->get_my_books();


      $data['content'] = 'library';
      $this->load->view('templates/template', $data);

    }

    public function create(){
      if(!empty($this->input->post())){
        $_POST['user_id'] = 1;
        $this->db->insert('books', $this->input->post());
        
        redirect(base_url().'library/?msg=book-created');
      }
      else{
        $data['genders'] = $this->library_model->get_genders();
        
        $data['content'] = 'forms/create-book';
        $this->load->view('templates/template', $data);
      }

    }

}

?>