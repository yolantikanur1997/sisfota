<?php 

class M_Login extends CI_Model{	
	
	public function cek_login($post){		
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('NIM',$post['NIM']);
		$this->db->where('password',$post['password']);
		$query = $this->db->get();
		return $query;
	}	

	public function get($id = null){

		$this->db->from('mahasiswa');
		if ($id !=null) {
			$this->db->where('id',$id);
			
		}
		$query = $this->db->get();
		return $query;


	}


}