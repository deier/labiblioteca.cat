<?php
class Library_model extends CI_Model {

   function __construct(){
      parent::__construct();
   }
   
   function get_genders(){
    $query = $this->db->query("SELECT gender_id, name FROM genders WHERE active = 1 ORDER BY name ASC");
    return $query->result();
   }

   function get_my_books(){
    $query = $this->db->query("SELECT b.book_id, b.name, b.author, g.name AS gender, b.photo, b.review, b.times_read 
                                FROM books b 
                                INNER JOIN genders g ON b.gender_id = g.gender_id
                                WHERE active = 1 
                                ORDER BY name ASC");
    return $query->result();
       
   }

}
?>