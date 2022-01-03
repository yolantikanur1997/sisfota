<?php

/**
 * 
 */
class m_laporanbimbingan extends CI_Model
{
	
	function fetch()
	{
		$this->db->order_by('ket','ASC');
		return $this->db->get('bimbingan');
	}
	function fetch_single_details($id_bim)
	{
	  $this->db->select('a.tanggal,a.waktu,a.deskripsi,a.ket,a.up_file');
	  $this->db->select('b.p_judul');
	  $this->db->select('c.nim,c.nm_mhs');
	  $this->db->select('d.nip,d.nama');
	  $this->db->from('bimbingan as a');
	  $this->db->join('judul_ta as b', 'a.id_judul = b.id_judul');
	  $this->db->join('mahasiswa as c', 'a.id_mhs = c.nim');
	  $this->db->join('pembimbing as d', 'a.id_pem = d.nip');
	  $this->db->where('a.id_bim',$id_bim);
	  $data = $this->db->get('');
		$output = '<table width="100%" cellspacing="5" cellpadding="5" border="0">';
		foreach($data->result() as $row)
		{
			$output .= '
			
			<tr>				
				<td width="75%"><br>
					<p><b>NIM Mahasiswa: </b>'.$row->nim.'</p>
					<p><b>Nama Mahasiswa: </b>'.$row->nm_mhs.'</p>
					<p><b>NIP Pembimbing : </b>'.$row->nip.'</p>
					<p><b>Nama Pembimbing : </b>'.$row->nama.'</p>
					<p><b>Judul: </b>'.$row->p_judul.'</p>
				</td>
			</tr>
			<table style="width:100%; text-align:center;" border="1">
			<tr>
			<td style="width:50px: "><b>Tanggal</b> </td>
			<td style="width:200px: "><b>Deskripsi</b> </td>
			<td style="width:20px: "><b>Keterangan</b> </td>
			<td style="width:80px; "><b>Tanda Tangan</b> </td>	
			</tr>
			<tr>			
			<td>'.$row->tanggal.'</td>
			<td>'.$row->deskripsi.'</td>
			<td>'.$row->ket.'</td>
			<td></td>
			</tr>			
			</table>
			
			</table>
				


			';
		}
		$output .= '
		
		';
		$output .= '</table>';
		return $output;
	}
}
?>