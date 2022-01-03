<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class m_komentar extends CI_Model{

public function dataGabung()
{
  $this->db->select('a.id_kom,a.komen');
  $this->db->select('b.nm_mhs');
  $this->db->select('c.nama');
  $this->db->from('komentar as a');
  $this->db->join('mahasiswa as b', 'a.id_mhs = b.nim');
  $this->db->join('pembimbing as c', 'a.id_pem = c.nip');
  $this->db->where('a.id_mhs',$this->session->userdata('nim'));
  $query = $this->db->get('');
    return $query->result_array();
}

public function dataGabungDosen()
{
  $this->db->select('a.id_kom,a.komen');
  $this->db->select('b.nm_mhs');
  $this->db->select('c.nama');
  $this->db->from('komentar as a');
  $this->db->join('mahasiswa as b', 'a.id_mhs = b.nim');
  $this->db->join('pembimbing as c', 'a.id_pem = c.nip');
  $this->db->where('a.id_pem',$this->session->userdata('nip'));
  $query = $this->db->get('');
    return $query->result_array();
}

function simpanData(){

		$data = [
        "id_kom" => $this->input->post('id_kom',true),
        "id_mhs" => $this->input->post('id_mhs',true),
        "id_pem" => $this->input->post('id_pem',true),
        "komen"=> $this->input->post('komentar',true)
    ];


    $this->db->insert('komentar', $data);
}

function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}
?>