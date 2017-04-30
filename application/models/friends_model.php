<?php
class Friends_model extends CI_Model {

   function __construct(){
      parent::__construct();
   }

   function get_friends(){
     $query = $this->db->query("select * from friends where user_id = 1 order by user_id");
      return $query->result();
   }
   
}
?>