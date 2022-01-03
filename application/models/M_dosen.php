
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_dosen extends CI_Model{

public function dataGabung()
{
  $this->db->select('a.id_judul,a.p_judul,a.deskripsi,a.ket,a.komentar');
  $this->db->select('b.nm_mhs');
  $this->db->select('c.nama');
  $this->db->from('judul_ta as a');
  $this->db->join('mahasiswa as b', 'a.id_mhs = b.nim');
  $this->db->join('pembimbing as c', 'a.id_pem = c.nip');
  $this->db->where('c.nip',$this->session->userdata('nip'));
  $query = $this->db->get('');
    return $query->result_array();
}

function editJudul($id_judul){		
	return $this->db->get_where('judul_ta', ['id_judul' => $id_judul])->result_array();
}

function Detail($id_mhs){    
  return $this->db->get_where('mahasiswa', ['id_mhs' => $id_mhs])->result_array();
}


function updateJudul(){
		$data = [
        "ket" => $this->input->post('ket',true),
        "komentar" => $this->input->post('komentar',true)
    ];

    $this->db->where('id_judul', $this->input->post('id_judul'));
    $this->db->update('judul_ta', $data);
  }
}











