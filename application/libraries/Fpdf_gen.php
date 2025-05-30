<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  FPDF
* 
* Author: Jd Fiscus
* 	 	  jdfiscus@gmail.com
*         @iamfiscus
*          
*
* Origin API Class: http://www.fpdf.org/
* 
* Location: http://github.com/iamfiscus/Codeigniter-FPDF/
*          
* Created:  06.22.2010 
* 
* Description:  This is a Codeigniter library which allows you to generate a PDF with the FPDF library
* 
*/
class Fpdf_gen {
		
	public function __construct() {
		
		require_once 'fpdf/fpdf.php';
		
		$pdf = new FPDF('P','mm', array(297, 210));
		$pdf->AddPage();
		
		$CI =& get_instance();
		$CI->fpdf = $pdf;
		
	}
	
}

