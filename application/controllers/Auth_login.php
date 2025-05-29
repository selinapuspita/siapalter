<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth_login extends CI_Controller{

	Public function __construct(){
		parent::__construct();		
        $this->load->model('M_database');
    	}


        Public function index(){    
        if(!empty($this->session->userdata('username'))) redirect('Manage_app/data_absen');
        if ($this->session->userdata('level')==99) redirect('dashboard'); 	 
	    $data['namaapp']=$this->M_database->query_setting('NAMA_APLIKASI');      
	    $data['idapp']=$this->M_database->query_setting('ID_APLIKASI'); 
        $this->load->library('recaptcha');
        $data['recaptcha_html'] = $this->recaptcha->render();
        $this->load->view('admin/login',$data); 
        }

	
	Public function cek_login(){
	$this->load->library('recaptcha');
    $this->load->library('form_validation');
 	$this->form_validation->set_rules('username','username','required');
 	$this->form_validation->set_rules('password','password','required');
    $this->form_validation->set_rules('g-recaptcha-response', '<strong>Captcha</strong>', 'callback_getResponseCaptcha'); 	

	$username1 = $this->input->post('username');
	$password1 = $this->input->post('password');
    $username = $this->security->xss_clean($username1);
    $password = $this->security->xss_clean($password1);
    $dher=hash('sha256',$password);
    $pass=$dher;
    //if($this->form_validation->run() == TRUE){ 
    if ($hasil = $this->M_database->login_in("user",$username,$pass))  {
    $set=$this->M_database->query_table('data_setting'); 
	$i = 0;	while ( $i < sizeof($set)) {
	$this->session->set_userdata(array($set[$i]['TAG'] => $set[$i]['VALUE']));
	$i++;}
	
		$data_session1 = array(
		'username' => $username,
		'id'=>$hasil['0']['ID'],
		'nama'=>$hasil['0']['NAMA'],
		'tipe'=>"Administrator",
		'level'=>$hasil['0']['LEVEL']);
    $data_session=$this->security->xss_clean($data_session1);
	$this->session->set_userdata($data_session);
	

	redirect(base_url("Manage_app/data_absen")); 	
	
    } else {$this->session->set_flashdata('error','Siapa Anda? Anda Tidak Dikenal'); redirect('login');}
	//} else {$this->session->set_flashdata('error','WRONG CAPTCHA! COBA LAGI!'); redirect('login');}

	}
	
	

	public function logout(){
                
		$this->session->sess_destroy();
        $this->session->set_flashdata('error','Logout'); redirect('login');
		//redirect(base_url(""));
	}
	

    function getResponseCaptcha($str)
    {
        $this->load->library('recaptcha');
        $response = $this->recaptcha->verifyResponse($str);
        if ($response['success'])
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('getResponseCaptcha', '%s is required.' );
            return false;
        }
    }


      
	

       
	
}


