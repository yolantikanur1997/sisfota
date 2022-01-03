<?php

/**
 * 
 */
class Fungsi {
	
	protected $ci;

	public function __consturct(){
		$this->ci =& get_instanse();
	}
	function user_login(){
		$this->ci->load->model('M_Login');
		$id = $this->ci->session->userdata('id');
		$user_data = $this->ci->M_Login->get($id)->row();
		return $user_data;

	}
}

?>