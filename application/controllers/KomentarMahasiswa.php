<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class komentarMahasiswa extends CI_Controller{
	
	function __construct()	{
	   parent::__construct();
	
	    $this->load->model('m_komentar');
	    $this->load->model('m_bimbingan');


	   
	}

	public function simpanData()
{
		$data['judul'] = "Komentar";
		$data['gabung'] = $this->db->get_where('judul_ta',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
	
		$data['lihat'] = $this->db->get_where('komentar',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
 		$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
		$this->session->userdata('nim')])->row_array();
		$data['dosen'] = $this->m_bimbingan->dataDosen();

	    $this->form_validation->set_rules('komentar','Komentar','required|trim'); 

	   if ($this->form_validation->run() == False) {

        $this->load->view('mahasiswa/dashboard-nav',$data);
		$this->load->view('mahasiswa/komentar',$data);
		$this->load->view('mahasiswa/footer');

      }else{

         $this->m_komentar->simpanData();
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		   Komentar Sukses Tersimpan
		</div>');

          redirect('mahasiswa/komentar');
        }
  
}
 function Hapus($id){
        $where = array('id_kom' => $id);
        $this->m_komentar->hapus_data($where,'komentar');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		   Komentar Terhapus
		</div>');

          
          redirect('mahasiswa/komentar');
    
    }
}
	?>