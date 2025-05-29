<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Download_app extends CI_Controller{

	Public function __construct(){
	parent::__construct();		
        
    $this->load->model('M_database');
	$this->load->library('Lib_ext');
    if(!ISSET($_SESSION['nama'])) redirect('logout');   
	}


    Public function index(){
    echo "Class protected!";
    }
    

public function laporan_xls(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=66) redirect('logout');   
    if (ISSET($_POST['download_report'])){
    $tgl=explode(" - ", $_POST['rangetanggal']);
    $data['tgl1']=$from=str_replace("/", "-", $tgl[0]);  
    $data['tgl2']=$to=str_replace("/", "-", $tgl[1]);   
	$data['rekap'] = $this->M_database->query_log_all_date($from,$to);	
	$this->load->view('admin/admin/download_report_xls', $data); 			
    }	
}

public function laporan_xls_cek(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=77 && $this->session->userdata('level')!=66) redirect('logout');   
    if (ISSET($_POST['download_report_cek'])){
    $tgl=explode(" - ", $_POST['rangetanggal']);
    $data['tgl1']=$from=str_replace("/", "-", $tgl[0]);  
    $data['tgl2']=$to=str_replace("/", "-", $tgl[1]);   
	$data['rekap'] = $this->M_database->query_cek_all_date($from,$to);	
	$this->load->view('admin/admin/download_report_xls_cek', $data); 			
    }	
}
    
    
    
}


