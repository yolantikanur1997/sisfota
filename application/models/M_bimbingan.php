
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class m_bimbingan extends CI_Model{


public function dataGabung()
{
  $this->db->select('a.id_bim,a.tanggal,a.waktu,a.deskripsi,a.ket,a.up_file');
  $this->db->select('b.p_judul');
  $this->db->select('c.nm_mhs');
  $this->db->select('d.nama');
  $this->db->from('bimbingan as a');
  $this->db->join('judul_ta as b', 'a.id_judul = b.id_judul');
  $this->db->join('mahasiswa as c', 'a.id_mhs = c.nim');
  $this->db->join('pembimbing as d', 'a.id_pem = d.nip');
  $this->db->where('a.id_mhs',$this->session->userdata('nim'));
  $query = $this->db->get('');
    return $query->result_array();
}
public function dataGabungDosen()
{
  $this->db->select('a.id_bim,a.tanggal,a.waktu,a.deskripsi,a.ket,a.up_file');
  $this->db->select('b.p_judul');
  $this->db->select('c.nm_mhs');
  $this->db->select('d.nama');
  $this->db->from('bimbingan as a');
  $this->db->join('judul_ta as b', 'a.id_judul = b.id_judul');
  $this->db->join('mahasiswa as c', 'a.id_mhs = c.nim');
  $this->db->join('pembimbing as d', 'a.id_pem = d.nip');
  $this->db->where('a.id_pem',$this->session->userdata('nip'));
  $query = $this->db->get('');
    return $query->result_array();
}

   function dataMahasiswa(){
   return $this->db->get('mahasiswa')->result_array();
  
  }
  function dataDosen(){
   return $this->db->get('pembimbing')->result_array();
  
  }
 
  public function input_data($data)
  {
      $this->db->insert('bimbingan',$data);
      return TRUE;
  }



function EditBimbingan($id){   
  $this->db->select('a.id_bim,a.tanggal,a.waktu,a.deskripsi,a.ket,a.up_file');
  $this->db->select('b.p_judul');
  $this->db->select('c.nim,c.nm_mhs');
  $this->db->select('d.nama');
  $this->db->from('bimbingan as a');
  $this->db->join('judul_ta as b', 'a.id_judul = b.id_judul');
  $this->db->join('mahasiswa as c', 'a.id_mhs = c.nim');
  $this->db->join('pembimbing as d', 'a.id_pem = d.nip');
  $this->db->where('a.id_bim',$id,$this->session->userdata('nim'));
  $query = $this->db->get('');
    return $query->result_array();
}

function updateBimbingan(){
  $data = [
        "deskripsi" => $this->input->post('deskripsi',true),
        "ket" => $this->input->post('ket',true),
        
    ];

     $this->db->where('id_bim', $this->input->post('id_bim'));
     $this->db->update('bimbingan', $data);
    

  }

  function hapus_data($where){
    $this->db->where($where);
     $this->db->delete('bimbingan');
  }
}
?>