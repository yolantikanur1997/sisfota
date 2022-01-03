<?php 

class M_chat extends CI_Model{	
	
function data_dosen(){
   return $this->db->get('dosen')->result_array();
  
  }
	
}