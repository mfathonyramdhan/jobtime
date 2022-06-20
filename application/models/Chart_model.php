<?php 
class Chart_model extends CI_Model{

   public function __construct() {
      // parent::__construct();
      $this->load->database();
   }

   public function chart_database() {
      return $this->db->get('chart')->result();
   }
}