<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
require_once 'assets/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

class Mypdf extends Dompdf
{
	public function __construct()
	{
		 parent::__construct();
	} 
}

?>