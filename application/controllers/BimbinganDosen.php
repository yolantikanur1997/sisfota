<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class bimbinganDosen extends CI_Controller{
	
	function __construct()	{
	   parent::__construct();
	   $this->load->helper(array('url','download'));	
	    $this->load->model('m_bimbingan');
	    $this->load->library('upload');

	   
	}

	public function bimbinganDetail($id)
	{
		$data['judul'] = "Bimbingan";
		$data['gabung'] = $this->m_bimbingan->editBimbingan($id);
		/*$data['gabung'] = $this->m_mahasiswa->dataGabung();*/
		$data['user'] = $this->db->get_where('pembimbing',['nip' =>
	$this->session->userdata('nip')])->row_array();


	
 	


        $this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/bimbinganDetail',$data);
		$this->load->view('dosen/footer');
              
	}

	public function bimbinganEdit($id)
	{
		$data['judul'] = "Bimbingan";
		$data['gabung'] = $this->m_bimbingan->editBimbingan($id);
		/*$data['gabung'] = $this->m_mahasiswa->dataGabung();*/
		$data['user'] = $this->db->get_where('pembimbing',['nip' =>
		$this->session->userdata('nip')])->row_array();
		$data['diterima'] = ['Belum Diterima','Diterima','Revisi'];

	
 	


        $this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/bimbingan_Edit',$data);
		$this->load->view('dosen/footer');
              
	}

	public function updateBimbingan()
{
	$where = array('id_bim' => $id_bim);
	$data['judul'] = "Judul";
		;
	$data['diterima'] = ['Belum Diterima','Diterima','Revisi'];
 	$data['user'] = $this->db->get_where('pembimbing',['nip' =>
	$this->session->userdata('nip')])->row_array();

	$deskripsi = $this->input->post('deskripsi');
	$ket = $this->input->post('ket');

	// get foto
	      $config['upload_path'] = './assets/berkas';
	      $config['allowed_types'] = 'pdf|docx|doc|jpg|png|zip';
	      $config['max_size'] = '5000';  //2MB max
	      $config['file_name'] = $_FILES['berkas']['name'];

	       $this->upload->initialize($config);
	    if (!empty($_FILES['berkas']['name'])) {
	        if ( $this->upload->do_upload('berkas') ) {
	            $berkass = $this->upload->data();
	            $old_foto = $data['bimbingan']['up_file'];
	            if ($old_foto != 'default.png') {
				unlink(FCPATH . './assets/berkas/' . $old_foto);
			}
	            $new_foto = $this->upload->data('file_name');
				
	            $this->db->set('up_file',$new_foto);	          
	            
			 $this->m_bimbingan->updateBimbingan($data);				
	
	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  Data Berhasil di Edit
</div>');
	redirect('dosen/bimbingan');
	        }else {
             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File Gagal Di Upload</div>');
             redirect('dosen/bimbingan');
	        }
	    }else {

	      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Harus Dilengkapi</div>');
	       redirect('dosen/bimbingan');
	    }

	
}



}
?>