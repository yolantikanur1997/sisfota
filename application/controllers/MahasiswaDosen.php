<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class mahasiswaDosen extends CI_Controller{
	
	function __construct()	{
	   parent::__construct();	
	    $this->load->model('m_mahasiswa');

	   
	}


	public function Detail($id)
	{
		$data['judul'] = "Data Dosen";
	
		/*$data['gabung'] = $this->m_mahasiswa->dataGabung();*/
		$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
		$this->session->userdata('nim')])->row_array();

		$data['gabung'] = $this->m_mahasiswa->Detail($id);

	

        $this->load->view('mahasiswa/dashboard-nav',$data);
		$this->load->view('mahasiswa/dataDosenDetail',$data);
		$this->load->view('mahasiswa/footer');


              
	}

}
?>