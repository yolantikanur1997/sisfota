<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class bimbingan extends CI_Controller{
	
	function __construct()	{
	   parent::__construct();
	   $this->load->helper(array('url','download'));	
	    $this->load->model('m_bimbingan');
	    $this->load->library('upload');

	   
	}

	public function simpanData()
{
		$data['judul'] = "Bimbingan";
		$data['gabung'] = $this->db->get_where('judul_ta',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
		$data['lihat'] = $this->m_bimbingan->dataGabung();
		$data['lihat'] = $this->db->get_where('bimbingan',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
 		$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
		$this->session->userdata('nim')])->row_array();
		$data['dosen'] = $this->m_bimbingan->dataDosen();


		$id_pem = $this->input->post('id_pem');
		$id_mhs = $this->input->post('id_mhs');
		$id_judul = $this->input->post('id_judul');
	 	$tanggal = format_indo(date('Y-m-d'));
	 	$waktu = time();
	 	$deskripsi = $this->input->post('deskripsi');
	 	$ket = 'Belum Diterima';	

	      // get foto
	      $config['upload_path'] = './assets/berkas';
	      $config['allowed_types'] = 'pdf|docx|doc|jpg|png|zip';
	      $config['max_size'] = '5000';  //2MB max
	      $config['file_name'] = $_FILES['berkas']['name'];

    	 $this->upload->initialize($config);
	    if (!empty($_FILES['berkas']['name'])) {
	        if ( $this->upload->do_upload('berkas') ) {
	            $berkass = $this->upload->data();
	            $data = array(
	                          'id_pem'    => $id_pem,
	                          'id_mhs'    => $id_mhs,
	                          'id_judul'   => $id_judul,
	                          'tanggal'   => $tanggal,
	                          'waktu'     => $waktu,
	                          'deskripsi' => $deskripsi,
	                          'ket'  	  => $ket,
                              'up_file'   => $berkass['file_name'],
	                        );
			  $this->m_bimbingan->input_data($data);
			 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Tersimpan</div>');
              redirect('mahasiswa/bimbingan');
	        }else {
             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Gagal Di Upload</div>');
             redirect('mahasiswa/bimbingan');
	        }
	    }else {

	      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Harus Dilengkapi</div>');
	       redirect('mahasiswa/bimbingan');
	    }
}

	public function download($id)
	{
		$data = $this->db->get_where('bimbingan',['id_bim'=>$id])->row();
		force_download('./assets/berkas/'.$data->up_file,NULL);

		/* $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Di Download</div>');
              redirect('mahasiswa/bimbingan');*/
              
	}
	function Hapus($id){
  	 	/*  $path = './assets/berkas/';
     	 @unlink($path.$berkass);*/

     	 $where = array('id_bim' => $id);



        $this->m_bimbingan->hapus_data($where);


        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		   Data Bimbingan Terhapus
		</div>');

          
          redirect('mahasiswa/bimbingan');
    
    }
}
?>