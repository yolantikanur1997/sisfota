<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class mahasiswaJudul extends CI_Controller{
	
	function __construct()	{
	   parent::__construct();
	   $this->load->model('m_mahasiswa');
	    $this->load->model('m_bimbingan');
	   
	}

	public function simpanData()
{
	$data['judul'] = "Judul";
	$data['mahasiswa'] = $this->m_mahasiswa->dataMahasiswa();

	$data['lihat'] = $this->db->get_where('judul_ta',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
 	$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
	$this->session->userdata('nim')])->row_array();

	 $this->form_validation->set_rules('p_judul','Judul','required|trim'); 
  	$this->form_validation->set_rules('deskripsi','deskripsi','required|trim');

	      if ($this->form_validation->run() == False) {

        $this->load->view('mahasiswa/dashboard-nav',$data);
		$this->load->view('mahasiswa/judul',$data);
		$this->load->view('mahasiswa/footer');

        }else{

          $this->m_mahasiswa->simpanData();
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  Pengajuan Judul Sukses Tersimpan
</div>');

          redirect('mahasiswa/judul');
        }
  
}
public function Detail($id)
	{
	$data['judul'] = "Judul";
	$data['gabung'] = $this->m_mahasiswa->edit($id);
	/*$data['lihat'] = $this->m_mahasiswa->dataGabung();*/
	$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
	$this->session->userdata('nim')])->row_array();

/*	$data['lihat'] = $this->db->get_where('judul_ta',array('id_mhs'=> $this->session->userdata('nim')))->result_array();*/
	
 	$data['lihat'] = $this->m_mahasiswa->dataGabung();


        $this->load->view('mahasiswa/dashboard-nav',$data);
		$this->load->view('mahasiswa/judulDetail',$data);
		$this->load->view('mahasiswa/footer');
              
	}

	 function Hapus($id){
        $where = array('id_judul' => $id);
        $this->m_mahasiswa->hapus_data($where,'judul_ta');
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		   Judul Tugas Akhir Terhapus
		</div>');

          
          redirect('mahasiswa/judul');
    
    }
}
?>