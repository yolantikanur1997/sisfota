<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class komentarDosen extends CI_Controller{
	
	function __construct()	{
	   parent::__construct();
	
	    $this->load->model('m_komentar');
	    $this->load->model('m_bimbingan');


	   
	}

	public function simpanData()
{
		$data['judul'] = "Komentar";

		$data['mahasiswa'] = $this->m_bimbingan->dataMahasiswa();
	
		$data['lihat'] = $this->db->get_where('komentar',array('id_pem'=> $this->session->userdata('nip')))->result_array();
 		$data['user'] = $this->db->get_where('pembimbing',['nip' =>
		$this->session->userdata('nip')])->row_array();


	    $this->form_validation->set_rules('komentar','Komentar','required|trim'); 

	   if ($this->form_validation->run() == False) {

        $this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/komentar',$data);
		$this->load->view('dosen/footer');

      }else{

         $this->m_komentar->simpanData();
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		   Komentar Sukses Tersimpan
		</div>');

          redirect('dosen/komentar');
        }
  
}
 function Hapus($id){
        $where = array('id_kom' => $id);
        $this->m_komentar->hapus_data($where,'komentar');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		   Komentar Terhapus
		</div>');

          
          redirect('dosen/komentar');
    
    }
}
	?>