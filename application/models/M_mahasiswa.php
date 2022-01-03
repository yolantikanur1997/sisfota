<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_mahasiswa extends CI_Model{

function dataMahasiswa(){
   return $this->db->get('mahasiswa')->result_array();
  
  }
public function dataGabung()
{
  $this->db->select('a.id_judul,a.p_judul,a.deskripsi,a.ket,a.komentar');
  $this->db->select('b.nm_mhs');
  $this->db->select('c.nama');
  $this->db->from('judul_ta as a');
  $this->db->join('mahasiswa as b', 'a.id_mhs = b.nim');
  $this->db->join('pembimbing as c', 'a.id_pem = c.nip');
  $this->db->where('a.id_mhs',$this->session->userdata('nim'));
  $query = $this->db->get('');
    return $query->result_array();
}

function simpanData(){

		$data = [
        "id_mhs" => $this->input->post('id_mhs',true),
        "id_pem" => $this->input->post('id_pem',true),
        "p_judul" => $this->input->post('p_judul',true),
        "deskripsi"=> $this->input->post('deskripsi',true),
        "ket" => 'Belum Diterima',
        "komentar" => 'Belum Ada Komentar'
    ];


    $this->db->insert('judul_ta', $data);
}

function Edit($id){   
    $this->db->select('a.id_judul,a.p_judul,a.deskripsi,a.ket,a.komentar');
  $this->db->select('b.nm_mhs');
  $this->db->select('c.nip,c.nama');
  $this->db->from('judul_ta as a');
  $this->db->join('mahasiswa as b', 'a.id_mhs = b.nim');
  $this->db->join('pembimbing as c', 'a.id_pem = c.nip');
  $this->db->where('a.id_judul',$id,$this->session->userdata('nim'));
  $query = $this->db->get('');
    return $query->result_array();
/*  return $this->db->get_where('judul_ta', ['id_judul' => $id])->result_array();*/
}
function Detail($id_pem){    
  return $this->db->get_where('pembimbing', ['id_pem' => $id_pem])->result_array();
}
function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

}
?>