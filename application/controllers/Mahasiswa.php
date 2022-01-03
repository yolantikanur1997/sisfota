<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Mahasiswa extends CI_Controller{
	
	function __construct()	{
	   parent::__construct();
	   $this->load->model('m_mahasiswa');
	    $this->load->model('m_bimbingan');
	     $this->load->model('m_komentar');
	   
	}

	public function index(){
	
		$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
	$this->session->userdata('nim')])->row_array();

		$this->load->view('mahasiswa/dashboard-nav',$data);	
		$this->load->view('mahasiswa/dashboard-content',$data);
		$this->load->view('mahasiswa/footer',$data);
		
	}

	public function profil(){
	 $data['judul'] = "Profil";
	    $data['user'] = $this->db->get_where('mahasiswa',['nim' =>
	$this->session->userdata('nim')])->row_array();

		$this->load->view('mahasiswa/dashboard-nav',$data);
		$this->load->view('mahasiswa/profil',$data);
		$this->load->view('mahasiswa/footer');
	}

	public function logout(){

	$this->session->unset_userdata('nim');

	
		redirect('pages');
}

		public function edit(){
		 $data['judul'] = "Edit Profil";

		 $data['jk'] = ['Laki-Laki','Perempuan'];
		 $data['user'] = $this->db->get_where('mahasiswa',['nim' =>
			$this->session->userdata('nim')])->row_array();

		$this->form_validation->set_rules('nm_mhs','Nama','required|trim'); 
		$this->form_validation->set_rules('prodi','Prodi','required|trim');
		$this->form_validation->set_rules('outline','Outline','required|trim');
		$this->form_validation->set_rules('thn_angk','Tahun Angkatan','required|trim'); 

		 if ($this->form_validation->run()==false) {
				$this->load->view('mahasiswa/dashboard-nav',$data);
				$this->load->view('mahasiswa/profil_edit',$data);
				$this->load->view('mahasiswa/footer');
		 	
		 }else{
		 	$nm_mhs = $this->input->post('nm_mhs');
		 	$j_kelamin = $this->input->post('j_kelamin');
		 	$prodi = $this->input->post('prodi');
		 	$outline = $this->input->post('outline');
		 	$thn_angk = $this->input->post('thn_angk');
		 	$nim = $this->input->post('nim');

		 	//cek jika ada gambar

		 	$gambar = $_FILES['foto']['name'];

		 	if ($gambar) {
		 		
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets/img/';
				

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto')) {
					$old_foto = $data['user']['foto'];
					if ($old_foto != 'default.png') {
						unlink(FCPATH . './assets/img/' . $old_foto);
					}

					$new_foto = $this->upload->data('file_name');
					$this->db->set('foto',$new_foto);
				}else{
					echo $this->upload->dispay_errors();
				}



		 	}


		 	$this->db->set('nm_mhs',$nm_mhs);
		 	$this->db->set('j_kelamin',$j_kelamin);
		 	$this->db->set('prodi',$prodi);
		 	$this->db->set('outline',$outline);
		 	$this->db->set('thn_angk',$thn_angk);
		 	$this->db->where('nim', $nim);
		 	$this->db->update('mahasiswa');

		 	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		  Profil Berhasil di Edit
		</div>');
				redirect('mahasiswa/profil');
		 }

		}



public function judul()
{
	$data['judul'] = "Judul";
	$data['mahasiswa'] = $this->m_mahasiswa->dataMahasiswa();
	$data['dosen'] = $this->m_bimbingan->dataDosen();
	$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
	$this->session->userdata('nim')])->row_array();

	/*$data['lihat'] = $this->db->get_where('judul_ta',array('id_mhs'=> $this->session->userdata('nim')))->result_array();*/
	$data['lihat'] = $this->m_mahasiswa->dataGabung();

 	


        $this->load->view('mahasiswa/dashboard-nav',$data);
		$this->load->view('mahasiswa/judul',$data);
		$this->load->view('mahasiswa/footer');
}


public function bimbingan()
{
		
		$data['judul'] = "Bimbingan";
		
		$data['gabung'] = $this->db->get_where('judul_ta',array('id_mhs'=> $this->session->userdata('nim')))->result_array();		
		/*$data['lihat'] = $this->db->get_where('bimbingan',array('id_mhs'=> $this->session->userdata('nim')))->result_array();*/
 		$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
		$this->session->userdata('nim')])->row_array();
		$data['dosen'] = $this->m_bimbingan->dataDosen();
		$data['lihat'] = $this->m_bimbingan->dataGabung();



        $this->load->view('mahasiswa/dashboard-nav',$data);
		$this->load->view('mahasiswa/bimbingan',$data);
		$this->load->view('mahasiswa/footer');
}

public function komentar()
{
		
		$data['judul'] = "Komentar";
		$data['gabung'] = $this->db->get_where('judul_ta',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
		/*$data['lihat'] = $this->m_bimbingan->dataGabung();*/
		/*$data['lihat'] = $this->db->get_where('komentar',array('id_mhs'=> $this->session->userdata('nim')))->result_array();*/
 		$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
		$this->session->userdata('nim')])->row_array();
		$data['dosen'] = $this->m_bimbingan->dataDosen();
		$data['lihat'] = $this->m_komentar->dataGabung();



        $this->load->view('mahasiswa/dashboard-nav',$data);
		$this->load->view('mahasiswa/komentar',$data);
		$this->load->view('mahasiswa/footer');
}

public function dosen()
{
		
		$data['judul'] = "Komentar";		
		/*$data['lihat'] = $this->m_bimbingan->dataGabung();*/
		$data['lihat'] = $this->db->get_where('komentar',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
 		$data['user'] = $this->db->get_where('mahasiswa',['nim' =>
		$this->session->userdata('nim')])->row_array();
		$data['dosen'] = $this->m_bimbingan->dataDosen();



        $this->load->view('mahasiswa/dashboard-nav',$data);
		$this->load->view('mahasiswa/dataDosen',$data);
		$this->load->view('mahasiswa/footer');
}

}