<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Pages extends CI_Controller{
	
	function __construct()	{
	   parent::__construct();
	   /*session_start();*/
	   $this->load->model('M_Login');
	   
       $this->load->helper('url');
       $this->load->library('upload');
	}

	public function index(){
		/*if ($this->session->userdata('nim')) {
	 redirect('mahasiswa');	
	}*/
	
		$this->load->view('template/header');
		$this->load->view('template/landingpage');
		$this->load->view('template/footer');
	}



	public function login(){
	
	
	$nim = $this->input->post('nim');
	$password = $this->input->post('password');

	$user = $this->db->get_where('mahasiswa',['nim' => $nim])->row_array();

	if ($user != null) {
	if ($user) {
			if (password_verify($password,$user['password'])) {

				$data = [
					'nim' => $user['nim'],
					
					
				];
				$this->session->set_userdata($data);

				redirect('mahasiswa');
				
				
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  Password Salah!</div>');
		redirect("pages/index");
			}
		}
	}else{
		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  NIM Tidak Tersedia!</div>');
		redirect("pages/index");
	}
}


	public function logDosen(){

	
	if ($this->session->userdata('nip')) {
	 redirect('dosen');	
	}
		
	$data['judul'] = "SISFOTA Login Pembimbing";
	$this->load->view('template/loginDosen',$data);
}

public function loginDosen(){
	
	
	$nip = $this->input->post('nip');
	$password = $this->input->post('password');

	$user = $this->db->get_where('pembimbing',['nip' => $nip])->row_array();

	if ($user != null) {
	if ($user) {
			if (password_verify($password,$user['password'])) {

				$data = [
					'nip' => $user['nip'],
					
					
				];
				$this->session->set_userdata($data);

				redirect('dosen');
				
				
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  Password Salah!</div>');
		redirect("pages/logDosen");
			}
		}
	}else{
		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  NIP Tidak Tersedia!</div>');
		redirect("pages/logDosen");
	}
}







public function registrasi(){

	/*if ($this->session->userdata('nim')) {
	 redirect('mahasiswa');	
	}*/

	$this->form_validation->set_rules('nim','NIM','required|trim|is_numeric|max_length[10]|is_unique[mahasiswa.nim]');
	$this->form_validation->set_rules('nm_mhs','Nama Mahasiswa','required|trim');
	$this->form_validation->set_rules('prodi','Prodi','required|trim');
	$this->form_validation->set_rules('outline','Outline','required|trim');
	$this->form_validation->set_rules('thn_angk','Tahun Angkatan','required|trim');
	$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|alpha_numeric|matches[password2]',[
		'matches' => 'password dont match!',
		'min_length' => 'Password too short!'
	]);
	$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
	

	if ($this->form_validation->run() == false) {
	$data['title'] = 'SISFOTA Registrasi';
   	
	$this->load->view('template/registrasi',$data);
	
		
	}else{
		
		$data = [
			'nim' => $this->input->post('nim',true),
			'nm_mhs' => htmlspecialchars($this->input->post('nm_mhs',true)),
			'j_kelamin' => $this->input->post('j_kelamin',true),
			'prodi' => $this->input->post('prodi',true),
			'outline' => $this->input->post('outline',true),
			'thn_angk' => $this->input->post('thn_angk',true),		
			'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
			'foto' => 'default.png',			
			'status' => 1
			
		];


		$this->db->insert('mahasiswa',$data);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  Selamat, Akun Anda Berhasil Terdaftar. Silahkan Masuk!
</div>');
		$this->load->view('template/registrasi',$data);

}

	}

public function registrasiDosen(){

	/*if ($this->session->userdata('nip')) {
	 redirect('dosen');	
	}*/

	$this->form_validation->set_rules('nip','NIP','required|trim|is_numeric|is_unique[pembimbing.nip]');
	$this->form_validation->set_rules('nama','Nama','required|trim');
	$this->form_validation->set_rules('alamat','Alamat','required|trim');
	$this->form_validation->set_rules('nmr_tlp','Nomor Telepon','required|trim');
	$this->form_validation->set_rules('email','Email','required|trim|valid_email');
	$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|alpha_numeric|matches[password2]',[
		'matches' => 'password dont match!',
		'min_length' => 'Password too short!'
	]);
	$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
	

	if ($this->form_validation->run() == false) {
	$data['title'] = 'SISFOTA Registrasi';
   	
	$this->load->view('template/registrasiDosen',$data);
	
		
	}else{
		
		$data = [
			'nip' => $this->input->post('nip',true),
			'nama' => htmlspecialchars($this->input->post('nama',true)),
			'alamat' => $this->input->post('alamat',true),
			'nmr_tlp' => $this->input->post('nmr_tlp',true),
			'email' => $this->input->post('email',true),		
			'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
			'foto' => 'default.png',			
			'status' => 1
			
		];


		$this->db->insert('pembimbing',$data);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  Selamat, Akun Anda Berhasil Terdaftar. Silahkan Masuk!
</div>');
		$this->load->view('template/registrasiDosen',$data);

}

	}


}
?>