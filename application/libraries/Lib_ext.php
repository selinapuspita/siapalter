<?php
/**
 * Untuk Update, Insert, Delete Data
 */
 
if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lib_ext {

    private $ci;

    function __construct() {
        $this->ci =&get_instance();
    }


    public function ganti_password(){
	$username = $this->ci->input->post('username');       
	$password = $this->ci->input->post('password');   
	$email = $this->ci->input->post('email');   
	$level = $this->ci->input->post('level');
	$id = $this->ci->input->post('id');   	
    $dher=hash('sha256',$password);
    $pass=$dher;
    
    if ($level==1){$tabel="tabel_dosen";}
    else if ($level==2){$tabel="tabel_mahasiswa";}
    else if ($level==99){$tabel="tabel_admin";}
    else {}
    
	$data = array(
    'PASSWORD' => $this->ci->security->xss_clean($pass),   
    'EMAIL' => $this->ci->security->xss_clean($email),   
	);
    $data_session1 = array('email'=>$this->ci->security->xss_clean($email));
	$this->ci->session->set_userdata($data_session1);
	$act = $this->ci->M_database->update_user($data,$id,$tabel);
	if ($act){$this->ci->session->set_flashdata('success','Akun Anda Berhasil Ubah Data.');
	}
    else {$this->ci->session->set_flashdata('error','Gagal Ubah Data.');}
    redirect('dashboard');
 
	}

	



	
}