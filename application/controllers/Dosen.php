<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Dosen extends CI_Controller{
	
	function __construct()	{
	   parent::__construct();
	   $this->load->model('m_mahasiswa');
	   $this->load->model('m_dosen');
	   $this->load->model('m_bimbingan');
	     $this->load->model('m_komentar');

	}

public function index()
{
	$data['user'] = $this->db->get_where('pembimbing',['nip' =>
	$this->session->userdata('nip')])->row_array();


		$this->load->view('dosen/dashboard-nav',$data);	
		$this->load->view('dosen/dashboard-content',$data);
		$this->load->view('dosen/footer',$data);
		
}

public function profil()
{
	 $data['judul'] = "Profil";

	$data['user'] = $this->db->get_where('pembimbing',['nip' =>
	$this->session->userdata('nip')])->row_array();


		$this->load->view('dosen/dashboard-nav',$data);	
		$this->load->view('dosen/profil',$data);
		$this->load->view('dosen/footer',$data);
		
}
public function judul()
{
	$data['judul'] = "Judul";
	$data['mahasiswa'] = $this->m_mahasiswa->dataMahasiswa();
	$data['lihat'] = $this->m_dosen->dataGabung();
	/*$data['lihat'] = $this->db->get_where('judul_ta',array('id_pem'=> $this->session->userdata('nip')))->result_array();*/
 	$data['user'] = $this->db->get_where('pembimbing',['nip' =>
	$this->session->userdata('nip')])->row_array();



        $this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/judul',$data);
		$this->load->view('dosen/footer');
}

public function editJudul($id_judul)
{
	$where = array('id_judul' => $id_judul);
	$data['judul'] = "Judul";
	$data['judulta'] = $this->m_dosen->editJudul($id_judul);
	$data['diterima'] = ['Belum Diterima','Diterima'];
 	$data['user'] = $this->db->get_where('pembimbing',['nip' =>
	$this->session->userdata('nip')])->row_array();
	



	    $this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/judul_edit',$data);
		$this->load->view('dosen/footer');
}
public function updateJudul()
{
	$where = array('id_judul' => $id_judul);
	$data['judul'] = "Judul";
	$data['judulta'] = $this->m_dosen->editJudul($id_judul);
	$data['diterima'] = ['Belum Diterima','Diterima'];
 	$data['user'] = $this->db->get_where('pembimbing',['nip' =>
	$this->session->userdata('nip')])->row_array();
	
	$this->m_dosen->updateJudul();
	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  Data Berhasil di Edit
</div>');
	redirect('dosen/judul');
}




	public function logout(){

	$this->session->unset_userdata('nip');

	
		redirect('pages/logDosen');
}


public function edit(){
 $data['judul'] = "Edit Profil";

 $data['jk'] = ['Laki-Laki','Perempuan'];
 $data['user'] = $this->db->get_where('pembimbing',['nip' =>
	$this->session->userdata('nip')])->row_array();

$this->form_validation->set_rules('nip','NIP','required|trim'); 
$this->form_validation->set_rules('nama','Nama','required|trim');
$this->form_validation->set_rules('alamat','Alamat','required|trim');
$this->form_validation->set_rules('nmr_tlp','Nomor Telepon','required|trim');
$this->form_validation->set_rules('email','Email','required|trim|valid_email'); 

 if ($this->form_validation->run()==false) {
		$this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/profil_edit',$data);
		$this->load->view('dosen/footer');
 	
}else{
	$nip = $this->input->post('nip');
 	$nama = $this->input->post('nama');
 	$alamat = $this->input->post('alamat');
 	$nmr_tlp = $this->input->post('nmr_tlp');
 	$email = $this->input->post('email');


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
	$this->db->set('nip',$nip);
 	$this->db->set('nama',$nama);
 	$this->db->set('alamat',$alamat);
 	$this->db->set('nmr_tlp',$nmr_tlp);
 	$this->db->set('email',$email);
 	$this->db->update('pembimbing');

 	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  Profil Berhasil di Edit
</div>');
		redirect('dosen/profil');
}
}

public function bimbingan()
{
	$data['judul'] = "Bimbingan";
	$data['user'] = $this->db->get_where('pembimbing',['nip' =>
	$this->session->userdata('nip')])->row_array();
	// $data['mahasiswa'] = $this->m_mahasiswa->dataMahasiswa();
	/*$data['lihat'] = $this->db->get_where('bimbingan',array('id_pem'=> $this->session->userdata('nip')))->result_array();*/
	$data['lihat'] = $this->m_bimbingan->dataGabungDosen();
 	



        $this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/bimbingan',$data);
		$this->load->view('dosen/footer');
}
public function komentar()
{
		
		$data['judul'] = "Komentar";
		$data['gabung'] = $this->db->get_where('judul_ta',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
		/*$data['lihat'] = $this->m_bimbingan->dataGabung();*/
		$data['lihat'] = $this->db->get_where('komentar',array('id_pem'=> $this->session->userdata('nip')))->result_array();
 		$data['user'] = $this->db->get_where('pembimbing',['nip' =>
		$this->session->userdata('nip')])->row_array();
		$data['mahasiswa'] = $this->m_bimbingan->dataMahasiswa();
		$data['lihat'] = $this->m_komentar->dataGabungDosen();
	



       
        $this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/komentar',$data);
		$this->load->view('dosen/footer');
	
}

public function mahasiswaData()
{
		
		$data['judul'] = "Data Mahasiswa";
		/*$data['lihat'] = $this->m_bimbingan->dataGabung();*/
		$data['lihat'] = $this->db->get_where('komentar',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
 		$data['user'] = $this->db->get_where('pembimbing',['nip' =>
		$this->session->userdata('nip')])->row_array();
		$data['mahasiswa'] = $this->m_bimbingan->dataMahasiswa();
	



       
        $this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/mahasiswaData',$data);
		$this->load->view('dosen/footer');
	
}
public function mahasiswaDetail($id)
	{
			
		$data['judul'] = "Data Mahasiswa";
		/*$data['lihat'] = $this->m_bimbingan->dataGabung();*/
		$data['lihat'] = $this->db->get_where('komentar',array('id_mhs'=> $this->session->userdata('nim')))->result_array();
 		$data['user'] = $this->db->get_where('pembimbing',['nip' =>
		$this->session->userdata('nip')])->row_array();
		$data['gabung'] = $this->m_dosen->Detail($id);

	

        $this->load->view('dosen/dashboard-nav',$data);
		$this->load->view('dosen/mahasiswaDetail',$data);
		$this->load->view('dosen/footer');


              
	}
}
?>