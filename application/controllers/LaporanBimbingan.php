<?php defined('BASEPATH') OR exit('No Direct Script Accees Allowes');

class laporanbimbingan extends CI_Controller
{
	
	function __construct()
	{
		 parent::__construct();		
	     $this->load->library('mypdf');	     
	     $this->load->model('m_laporanbimbingan');	
		
}

/*public function index()
	{
		$data['cetak_data'] = $this->m_laporanbimbingan->fetch();
		$this->load->view('Laporan/v_laporan', $data);
	}
*/
	public function pdfdetails()
	{
		if($this->uri->segment(3))
		{
			$id_bim = $this->uri->segment(3);
			$html_content = '
		
				<div class="header" style="background:; width=100%; height:130px;">
			    <div class="jud" style="float: left; width:100%; height:130px; background:  ;"</div>
			    <h1 align="center" style="">SISFOTA</h1>
			    <p align="center">Sistem Informasi Bimbingan Online</p>
			    <h3 align="center">Rekap Bimbingan</h3>
			    </div>
			   
			    <div class="hr" style="margin-top: 16%; margin-bottom="5px"> <hr></div>
                  <div class="hr" style="margin-top: 65%;"> <hr></div>
                 
			    </div>';
			$html_content .= $this->m_laporanbimbingan->fetch_single_details($id_bim);
			$this->mypdf->loadHtml($html_content);
			$this->mypdf->render();
			$this->mypdf->stream("".$id_bim.".mypdf", array("Attachment"=>0));
		}
	}
}