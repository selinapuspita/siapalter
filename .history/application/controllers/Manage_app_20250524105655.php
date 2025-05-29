<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Manage_app extends CI_Controller{

	Public function __construct(){
	parent::__construct();		
        
    $this->load->model('M_database');
	$this->load->library('Lib_ext');
    if (empty($this->session->userdata('username'))) redirect('logout');   
	}


    Public function index(){
    echo "Class protected!";
    }
    
 	public function dashboard(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=88 && $this->session->userdata('level')!=77 && $this->session->userdata('level')!=66) redirect('logout'); 
	if ($this->session->userdata('level')==99){
	$data['sumuser']=$this->M_database->sum("user");	    
	$data['sumlog']=$this->M_database->sum_log(date('Y-m-d'));		
	$data['sum_log_pulang']=$this->M_database->sum_log_pulang(date('Y-m-d'));		
	}
    $data['page']='admin/dashboard_admin';
    $this->load->view('template_admin',$data);
	}   
	
	public function data_cek(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=88 && $this->session->userdata('level')!=77) redirect('logout'); 	    
	if (ISSET($_POST['filtertgl'])){
    $tgl=explode(" - ", $_POST['rangetanggal']);
    $tglfrom=str_replace("/", "-", $tgl[0]);  
    $tglto=str_replace("/", "-", $tgl[1]);     
	$data['log']=$this->M_database->query_cek_userid_date($_SESSION['id'],$tglfrom,$tglto);	    
	} else { 
	$data['log']=$this->M_database->query_cek_userid_date($_SESSION['id'],date('Y-m-d'),date('Y-m-d')); 
	} 
    $data['page']='admin/data_cek';		
    $this->load->view('template_admin',$data);
   	}	
   	
	public function data_clientvisit(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=77 && $this->session->userdata('level')!=66) redirect('logout'); 	    
	if (ISSET($_POST['filtertgl'])){
    $tgl=explode(" - ", $_POST['rangetanggal']);
    $tglfrom=str_replace("/", "-", $tgl[0]);  
    $tglto=str_replace("/", "-", $tgl[1]);     
	$data['log']=$this->M_database->query_clientvisit_userid_date($_SESSION['id'],$tglfrom,$tglto);	    
	} else { 
	$data['log']=$this->M_database->query_clientvisit_userid_date($_SESSION['id'],date('Y-m-d'),date('Y-m-d')); 
	} 
    $data['page']='admin/data_clientvisit';		
    $this->load->view('template_admin',$data);
   	}
   	
	public function all_clientvisit(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=77 && $this->session->userdata('level')!=66) redirect('logout');    
	if (ISSET($_POST['filtertgl'])){
    $tgl=explode(" - ", $_POST['rangetanggal']);
    $tglfrom=str_replace("/", "-", $tgl[0]);  
    $tglto=str_replace("/", "-", $tgl[1]);     
	$data['log']=$this->M_database->query_clientvisit_date($tglfrom,$tglto);	    
	} else { 
	$data['log']=$this->M_database->query_clientvisit_date(date('Y-m-d'),date('Y-m-d')); 
	} 
    $data['page']='admin/all_clientvisit';		
    $this->load->view('template_admin',$data);
   	}	      	
	
	public function data_absen(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=88 && $this->session->userdata('level')!=77 && $this->session->userdata('level')!=66) redirect('logout'); 	    
	if (ISSET($_POST['filtertgl'])){
    $tgl=explode(" - ", $_POST['rangetanggal']);
    $tglfrom=str_replace("/", "-", $tgl[0]);  
    $tglto=str_replace("/", "-", $tgl[1]);     
	$data['log']=$this->M_database->query_log_userid_date($_SESSION['id'],$tglfrom,$tglto);	    
	} else { 
	$data['log']=$this->M_database->query_log_userid_date($_SESSION['id'],date('Y-m-d'),date('Y-m-d')); 
	} 

    $data['page']='admin/data_absen';		
    
    $this->load->view('template_admin',$data);
   	}
   	
   	public function all_absen(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=66 && $this->session->userdata('level')!=77) redirect('logout');    
	if (ISSET($_POST['filtertgl'])){
    $tgl=explode(" - ", $_POST['rangetanggal']);
    $tglfrom=str_replace("/", "-", $tgl[0]);  
    $tglto=str_replace("/", "-", $tgl[1]);     
	$data['log']=$this->M_database->query_log_all_date($tglfrom,$tglto);	    
	} else { 
	$data['log']=$this->M_database->query_log_all_date(date('Y-m-d'),date('Y-m-d')); 
	} 
	//$data['absen']=$this->M_database->query_absen_all(); 
	//$data['log']=$this->M_database->query_log_all(); 	
    $data['page']='admin/all_absen';		
    $this->load->view('template_admin',$data);
   	}
   	
   	public function all_cekpos(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=66 && $this->session->userdata('level')!=77) redirect('logout');      
	if (ISSET($_POST['filtertgl'])){
    $tgl=explode(" - ", $_POST['rangetanggal']);
    $tglfrom=str_replace("/", "-", $tgl[0]);  
    $tglto=str_replace("/", "-", $tgl[1]);     
	$data['log']=$this->M_database->query_cek_all_date($tglfrom,$tglto);	    
	} else { 
	$data['log']=$this->M_database->query_cek_all_date(date('Y-m-d'),date('Y-m-d')); 
	} 
    $data['page']='admin/all_cek';		
    $this->load->view('template_admin',$data);
   	}   	
   	
   	public function all_detail_absen(){
    if ($this->session->userdata('level')!=99) redirect('logout');    
	if (ISSET($_POST['filtertgl'])){
    $tgl=explode(" - ", $_POST['rangetanggal']);
    $tglfrom=str_replace("/", "-", $tgl[0]);  
    $tglto=str_replace("/", "-", $tgl[1]);     
	$data['absen']=$this->M_database->query_absen_all_date($tglfrom,$tglto);	    
	} else { 
	$data['absen']=$this->M_database->query_absen_all_date(date('Y-m-d'),date('Y-m-d')); 
	} 
	//$data['absen']=$this->M_database->query_absen_all(); 
	//$data['log']=$this->M_database->query_log_all(); 	
    $data['page']='admin/all_detail_absen';		
    $this->load->view('template_admin',$data);
   	}
   	
   	public function pengecekan(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=88 && $this->session->userdata('level')!=77) redirect('logout');    

    $data['datauser']=$_SESSION['id']."_".date('dmYHis');	
    $data['page']='admin/pengecekan';		
    $this->load->view('template_admin',$data);
   	}	
 
   	public function input_pengecekan(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=88 && $this->session->userdata('level')!=77) redirect('logout');    
    $data['pos']=$_POST['pos'];
    $data['datauser']=$_SESSION['id']."_".date('dmYHis');	
    $data['page']='admin/input_pengecekan';		
    $this->load->view('template_admin',$data);
   	}   
   	
   	public function submit_pengecekan(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=88 && $this->session->userdata('level')!=77) redirect('logout'); 	    
    if ($_POST['submitcek']){
	$poscode=$this->M_database->query_pos_code($_POST['pos']); 
	if (!$poscode){$this->session->set_flashdata('error','QR POS ANDA TIDAK VALID!');redirect('Manage_app/pengecekan');} else {
	$insert = array(	
	'ID_USER' => $_SESSION['id'],
	'JAM' => $_POST['jam'],
	'TANGGAL' => $_POST['date'],
	'LOKASI' => $_POST['lokasi'],
	'IP' => $_POST['ip'],
	'KETERANGAN' => $_POST['ket'],	
	'GPS' => $_POST['gps'],	
	'POS' => $poscode[0]['NAMAPOS'].' '.$poscode[0]['LOKASI'],		
	'AGENT' => $_SERVER['HTTP_USER_AGENT'],	
	'GAMBAR' => $_POST['dat'].".jpg",
	);
	}
	$dataus=$this->M_database->insert("data_cek",$insert); 	
	$idlast=$this->M_database->last_row("data_cek");   

	if ($dataus){
    $this->session->set_flashdata('success','Sukses');}
    else {$this->session->set_flashdata('error','Gagal');}
    redirect('Manage_app/data_cek');
   	}}   
   	
   	public function submit_clientvisit(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=77) redirect('logout'); 	    
    if ($_POST['submitclientvisit']){

	$insert = array(	
	'ID_USER' => $_SESSION['id'],
	'JAM' => $_POST['jam'],
	'TANGGAL' => $_POST['date'],
	'LOKASI' => $_POST['lokasi'],
	'IP' => $_POST['ip'],
	'KETERANGAN' => $_POST['ket'],	
	'GPS' => $_POST['gps'],	
	'AGENT' => $_SERVER['HTTP_USER_AGENT'],	
	'GAMBAR' => $_POST['dat'].".jpg",
	);
	
	$dataus=$this->M_database->insert("data_clientvisit",$insert); 	
	$idlast=$this->M_database->last_row("data_clientvisit");   

	if ($dataus){
    $this->session->set_flashdata('success','Sukses');}
    else {$this->session->set_flashdata('error','Gagal');}
    redirect('Manage_app/data_clientvisit');
   	}}    	

	public function input_clientvisit(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=77) redirect('logout');    

    $data['datauser']=$_SESSION['id']."_".date('dmYHis');	
    $data['page']='admin/input_clientvisit';		
    $this->load->view('template_admin',$data);
   	}
	
	public function input_absen(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=88 && $this->session->userdata('level')!=77 && $this->session->userdata('level')!=66) redirect('logout');    
    $data['datauser']=$_SESSION['id']."_".date('dmYHis');	
    $data['page']='admin/input_absen';		
    $this->load->view('template_admin',$data);
   	}
   	
   	public function absen(){
    if ($this->session->userdata('level')!=99 && $this->session->userdata('level')!=88 && $this->session->userdata('level')!=77 && $this->session->userdata('level')!=66) redirect('logout'); 	    
    if ($_POST['submitabsen']){
	$getabsen=$this->M_database->cari_absen(date('Y-m-d'),$_SESSION['id']);             
	//insert to table data_absen
	$insert = array(	
	'ID_USER' => $_SESSION['id'],
	'JAM' => $_POST['jam'],
	'TANGGAL' => $_POST['date'],
	'LOKASI' => $_POST['lokasi'],
	'IP' => $_POST['ip'],
	'KETERANGAN' => $_POST['ket'],	
	'GPS' => $_POST['gps'],	
	'AGENT' => $_SERVER['HTTP_USER_AGENT'],	
	'GAMBAR' => $_POST['dat'].".jpg",
	);
	$dataus=$this->M_database->insert("data_absen",$insert); 	
	$idlast=$this->M_database->last_row("data_absen");   

    if ($getabsen[0]) { 
	$querylog=$this->M_database->cari_log(date('Y-m-d'),$_SESSION['id']); 
	
    $interval=strtotime($_SESSION['JAM_KELUAR'])-strtotime($_POST['jam']);
    $seconds = $interval % 60;
    $minutes = floor(($interval % 3600) / 60);
    $hours = floor($interval / 3600);
    if ($interval>0){$selisih=$hours.":".$minutes.":".$seconds;} else {$selisih="";}
    if (date('l')=="Friday"){$jammasuk=$_SESSION['JAM_MASUK_JUMAT'];$jampulang=$_SESSION['JAM_KELUAR_JUMAT'];} else {$jammasuk=$_SESSION['JAM_MASUK'];$jampulang=$_SESSION['JAM_KELUAR'];}
    
	$update1 = array(	
	'TANGGAL' => date('Y-m-d'),
	'JAM_MASUK' => $jammasuk,
	'JAM_KELUAR' => $jampulang,
	'ABSEN_KELUAR' => $_POST['date']." ".$_POST['jam'],	
	'KETERANGAN_KELUAR' => $_POST['ket'],
	'ID_KELUAR' => $idlast[0]['ID'],	
	'PULANG_CEPAT' => $selisih,
	);
	$datausu=$this->M_database->update($update1,$querylog[0]['ID'],"data_log");         
    } else {
        
    $interval=strtotime($_POST['jam'])-strtotime($_SESSION['JAM_MASUK']);
    $seconds = $interval % 60;
    $minutes = floor(($interval % 3600) / 60);
    $hours = floor($interval / 3600);
    if ($interval>0){$selisih=$hours.":".$minutes.":".$seconds;} else {$selisih="";}
  
    //insert pertama
	$insert1 = array(	
	'ID_USER' => $_SESSION['id'],
	'TANGGAL' => date('Y-m-d'),
	'JAM_MASUK' => $_SESSION['JAM_MASUK'],
	'JAM_KELUAR' => $_SESSION['JAM_KELUAR'],
	'ABSEN_MASUK' => $_POST['date']." ".$_POST['jam'],	
	'KETERANGAN_MASUK' => $_POST['ket'],
	'ID_MASUK' => $idlast[0]['ID'],	
	'TERLAMBAT' => $selisih,	
	);
	$datausx=$this->M_database->insert("data_log",$insert1);             
    }        

	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses');}
    else {$this->session->set_flashdata('error','Gagal');}
    redirect('Manage_app/data_absen');
   	}}
   	
   	public function data_pos(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitpos']){
    $code=hash('sha256',$_POST['pos']);
      $this->load->library('ciqrcode');
 	  $params['data'] = $code;
      $params['level'] = 'H';
      $params['size'] = 10;
      $params['savename'] = './assets/qrcode/'.$code.'.png';
      $this->ciqrcode->generate($params);	    
	$insert = array(	
	'NAMAPOS' => $_POST['pos'],
	'CODE' => $code,
	'LOKASI' => $_POST['lokasi'],
	);
	$dataus=$this->M_database->insert("data_pos",$insert); 	
	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah Pos');}
    else {$this->session->set_flashdata('error','Gagal Tambah Pos');}
    redirect('Manage_app/data_pos');

    } else if ($_GET['edit']){
	$data['datadosen']=$this->M_database->query_table('data_pos'); 
	$data['editdosen']=$this->M_database->query_dataid($_GET['edit'],'data_pos'); 	
    $data['page']='admin/data_pos';		
    $this->load->view('template_admin',$data);      
        
    } else if ($_POST['editadmin']){  
      $code=hash('sha256',$_POST['pos']);
      $code_old=hash('sha256',$_POST['pos_old']);      
      if ($code==$code_old){}
      else {
      $this->load->library('ciqrcode');
 	  $params['data'] = $code;
      $params['level'] = 'H';
      $params['size'] = 10;
      $params['savename'] = './assets/qrcode/'.$code.'.png';
      $this->ciqrcode->generate($params);        
      }	
	$update = array(	
	'NAMAPOS' => $_POST['pos'],
	'CODE' => $code,
	'LOKASI' => $_POST['lokasi'],
	);
	$datau=$this->M_database->update($update,$_POST['id'],'data_pos'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Pos');}
    else {$this->session->set_flashdata('error','Gagal Update Pos');}
    redirect('Manage_app/data_pos');
        
    } else {
	$data['admin']=$this->M_database->query_table('data_pos'); 	    
    $data['page']='admin/data_pos';		
    $this->load->view('template_admin',$data);
    }	   
   	}   	
   	
   	public function data_user(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitadmin']){
	$insert = array(	
	'NAMA' => $_POST['nama'],
	'NIK' => $_POST['nik'],
	'NO_HP' => $_POST['nohp'],	
	'JABATAN' => $_POST['jabatan'],	
	'AREA' => $_POST['area'],		
	'USERNAME' => $_POST['username'],
    'PASSWORD' => hash('sha256',$_POST['password']),
    'LEVEL' => $_POST['level'],
	);
	$dataus=$this->M_database->insert("user",$insert); 	
	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah Admin');}
    else {$this->session->set_flashdata('error','Gagal Tambah Admin');}
    redirect('Manage_app/data_user');

    } else if ($_GET['edit']){
	$data['datadosen']=$this->M_database->query_table('user'); 
	$data['editdosen']=$this->M_database->query_dataid($_GET['edit'],'user'); 	
    $data['page']='admin/data_admin';		
    $this->load->view('template_admin',$data);      
        
    } else if ($_POST['editadmin']){  
    
    if ($_POST['password']){
	$update = array(
	'NAMA' => $_POST['nama'],
	'USERNAME' => $_POST['username'],	
	'NIK' => $_POST['nik'],
	'NO_HP' => $_POST['nohp'],	
	'JABATAN' => $_POST['jabatan'],	
	'AREA' => $_POST['area'],	
	'LEVEL' => $_POST['level'],
	'PASSWORD' => hash('sha256',$_POST['password']));            
    } else {
	$update = array(
	'NAMA' => $_POST['nama'],
	'USERNAME' => $_POST['username'],	
	'NIK' => $_POST['nik'],
	'NO_HP' => $_POST['nohp'],	
	'JABATAN' => $_POST['jabatan'],	
	'AREA' => $_POST['area'],	
	'LEVEL' => $_POST['level']);                    
    }
	$datau=$this->M_database->update($update,$_POST['id'],'user'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update User');}
    else {$this->session->set_flashdata('error','Gagal Update User');}
    redirect('Manage_app/data_user');
        
    } else {
	$data['admin']=$this->M_database->query_table('user'); 	    
    $data['page']='admin/data_admin';		
    $this->load->view('template_admin',$data);
    }	   
   	}
   	
   	public function data_setting(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitset']){
	$insert = array(	
	'TAG' => $_POST['tag'],
	'VALUE' => $_POST['value'],
	);
	$dataus=$this->M_database->insert("data_setting",$insert); 	
	$data_session1 = array($_POST['tag'] => $_POST['value']);
	$this->session->set_userdata($data_session1);	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah ');}
    else {$this->session->set_flashdata('error','Gagal Tambah ');}
    redirect('Manage_app/data_setting');

    } else if ($_GET['edit']){
	$data['datadosen']=$this->M_database->query_table('data_setting'); 
	$data['editdosen']=$this->M_database->query_dataid($_GET['edit'],'data_setting'); 	
    $data['page']='admin/data_setting';		
    $this->load->view('template_admin',$data);      
        
    } else if ($_POST['editset']){  
    
	$update = array('TAG' => $_POST['tag'],'VALUE' => $_POST['value']);                    
	$datau=$this->M_database->update($update,$_POST['id'],'data_setting'); 	  
	$data_session1 = array($_POST['tag'] => $_POST['value']);
	$this->session->set_userdata($data_session1);	
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Setting');}
    else {$this->session->set_flashdata('error','Gagal Update Setting');}
    redirect('Manage_app/data_setting');
        
    } else {
	$data['admin']=$this->M_database->query_table('data_setting'); 	    
    $data['page']='admin/data_setting';		
    $this->load->view('template_admin',$data);
    }	   
   	}
   	
   	
   	
    public function delete($tabel,$id){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($tabel=='user'){$dataus=$this->M_database->delete_table($id,'user'); $back='data_user';   }   
    if ($tabel=='setting'){$dataus=$this->M_database->delete_table($id,'data_setting'); $back='data_setting';   }   
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Delete '.$tabel);}
    else {$this->session->set_flashdata('error','Gagal Delete '.$tabel);}
    redirect('Manage_app/'.$back);
	} 


    public function upload_logo(){
    if ($_POST['uploadlogo']){
		$namafile0="logo.png";    
		$config['upload_path'] = './assets/images/'; 
		$config['allowed_types'] = 'jpeg|gif|jpg|png';
		$config['max_size'] = '0'; 
		$config['overwrite'] = true;	
		$config['file_name'] = $namafile0;	

		$this->load->library('upload', $config);
        	$this->upload->initialize($config); 
		if(!$this->upload->do_upload('inputfile')){
		$msg = $this->upload->display_errors();
	    	echo "<script>alert('Gagal!, $msg');window.location.href='../manage_app/data_setting';</script>";	
		}else{
        	$datau = $this->upload->data();  

	if ($datau){
    $this->session->set_flashdata('success','Sukses upload Logo');}
    else {$this->session->set_flashdata('error','Gagal upload Logo');}
    redirect('Manage_app/data_setting');
     }
    }
}


    public function upload_fav(){
    if ($_POST['uploadfav']){
		$namafile0="favlogo.png";    
		$config['upload_path'] = './assets/images/'; 
		$config['allowed_types'] = 'jpeg|gif|jpg|png';
		$config['max_size'] = '0'; 
		$config['overwrite'] = true;	
		$config['file_name'] = $namafile0;	

		$this->load->library('upload', $config);
        	$this->upload->initialize($config); 
		if(!$this->upload->do_upload('inputfile')){
		$msg = $this->upload->display_errors();
	    	echo "<script>alert('Gagal!, $msg');window.location.href='../manage_app/data_setting';</script>";	
		}else{
        	$datau = $this->upload->data();  

	if ($datau){
    $this->session->set_flashdata('success','Sukses upload Fav Logo');}
    else {$this->session->set_flashdata('error','Gagal upload Fav Logo');}
    redirect('Manage_app/data_setting');
     }
    }
}



























	

	
	
	public function data_pegawai(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitpegawai']){
	$insert = array(	
	'NAMA' => $_POST['nama'],
	'EMAIL' => $_POST['email'],
	'JURUSAN' => $_POST['status'],	
	'USERNAME' => $_POST['username'],
    'PASSWORD' => hash('sha256',$_POST['password']),
	);
	$dataus=$this->M_database->insert("tabel_pegawai",$insert); 	
	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah Pegawai');}
    else {$this->session->set_flashdata('error','Gagal Tambah Pegawai');}
    redirect('Manage_app/data_pegawai');

    } else if ($_GET['edit']){
	$data['datadosen']=$this->M_database->query_table('tabel_pegawai'); 
	$data['editdosen']=$this->M_database->query_dataid($_GET['edit'],'tabel_pegawai'); 	
    $data['page']='admin/data_pegawai';		
    $this->load->view('template_admin',$data);      
        
    } else if ($_POST['editpegawai']){  
    
    if ($_POST['password']){
	$update = array('NAMA' => $_POST['nama'],'USERNAME' => $_POST['username'],	'JURUSAN' => $_POST['status'], 'EMAIL' => $_POST['email'],'PASSWORD' => hash('sha256',$_POST['password']));            
    } else {
	$update = array('NAMA' => $_POST['nama'],'USERNAME' => $_POST['username'],	'JURUSAN' => $_POST['status'], 'EMAIL' => $_POST['email']);                    
    }
	$datau=$this->M_database->update($update,$_POST['id'],'tabel_pegawai'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Pegawai');}
    else {$this->session->set_flashdata('error','Gagal Update Pegawai');}
    redirect('Manage_app/data_pegawai');
        
    } else {
	$data['datadosen']=$this->M_database->query_table('tabel_pegawai'); 	    
    $data['page']='admin/data_pegawai';		
    $this->load->view('template_admin',$data);
    }	   
   	}
   	
















		public function admin_nilai(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitnilai']){
	$insert = array('TEMA' => $_POST['jenis'],'KETERANGAN' => $_POST['keterangan']);
	$dataus=$this->M_database->insert("tabel_penilaian",$insert); 	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah Kelompok');}
    else {$this->session->set_flashdata('error','Gagal Tambah Kelompok');}
    redirect('Manage_app/admin_nilai');
    
    } else if ($_GET['edit']){
	$data['nilai']=$this->M_database->query_table('tabel_penilaian'); 	 
	$data['datanilai']=$this->M_database->query_nilai_id($_GET['edit']); 
    $data['page']='admin/nilai';		
    $this->load->view('template_admin',$data);     

   } else if ($_POST['updatenilai']){  
	$update= array('TEMA' => $_POST['jenis'],'KETERANGAN' => $_POST['keterangan']);          
	$datau=$this->M_database->update_user($update,$_POST['id'],'tabel_penilaian'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Nilai');}
    else {$this->session->set_flashdata('error','Gagal Update Nilai');}
    redirect('Manage_app/admin_nilai');

    } else {	    
	$data['nilai']=$this->M_database->query_table('tabel_penilaian'); 	    
    $data['page']='admin/nilai';		
    $this->load->view('template_admin',$data);
   	}
	}
	
		public function admin_kelompok(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitcat']){
	$insert = array('KELOMPOK' => $_POST['kelompok']);
	$dataus=$this->M_database->insert("tabel_kelompok",$insert); 	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah Kelompok');}
    else {$this->session->set_flashdata('error','Gagal Tambah Kelompok');}
    redirect('Manage_app/admin_kelompok');


    } else if ($_GET['edit']){
    $data['editkelompok']=$this->M_database->query_dataid($_GET['edit'],'tabel_kelompok'); 	
    $data['kategori']=$this->M_database->query_table('tabel_kelompok'); 	    
    $data['page']='admin/kelompok';		
    $this->load->view('template_admin',$data);

   } else if ($_POST['editkelompok']){  
	$update = array('KELOMPOK' => $_POST['kelompok']);            
	$datau=$this->M_database->update_user($update,$_POST['id'],'tabel_kelompok'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Kelompok');}
    else {$this->session->set_flashdata('error','Gagal Update Kelompok');}
    redirect('Manage_app/admin_kelompok');
    

    
    } else {	    
	$data['kategori']=$this->M_database->query_table('tabel_kelompok'); 	    
    $data['page']='admin/kelompok';		
    $this->load->view('template_admin',$data);
   	}
	}
	
	public function admin_kategori(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitcat']){
	$insert = array('KATEGORI' => $_POST['kategori']);
	$dataus=$this->M_database->insert("tabel_kategori",$insert); 	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah Kategori');}
    else {$this->session->set_flashdata('error','Gagal Tambah Kategori');}
    redirect('Manage_app/admin_kategori');
    
    } else if ($_GET['edit']){
    $data['editkategori']=$this->M_database->query_dataid($_GET['edit'],'tabel_kategori'); 	
    $data['kategori']=$this->M_database->query_table('tabel_kategori'); 	    
    $data['page']='admin/kategori';		
    $this->load->view('template_admin',$data);

   } else if ($_POST['editkategori']){  
	$update = array('KATEGORI' => $_POST['kategori']);            
	$datau=$this->M_database->update_user($update,$_POST['idkategori'],'tabel_kategori'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Kategori');}
    else {$this->session->set_flashdata('error','Gagal Update Kategori');}
    redirect('Manage_app/admin_kategori');
    

    } else {	    
	$data['kategori']=$this->M_database->query_table('tabel_kategori'); 	    
    $data['page']='admin/kategori';		
    $this->load->view('template_admin',$data);
   	}
	}
    
    public function laporan_saya(){
	$data['laporan']=$this->M_database->query_laporan_mahasiswa($_SESSION['id']); 	    
    $data['page']='laporan_saya';		
    $this->load->view('template_admin',$data);
   	}
   	
   	public function laporan_dosen(){
    if ($_GET['feedback']){
	$data['editlaporan']=$this->M_database->query_dataid($_GET['feedback'],'tabel_laporan'); 	
	$data['nilai']=$this->M_database->query_table('tabel_penilaian'); 	
    $data['page']='view_laporan';		
    $this->load->view('template_admin',$data);     
    } else if ($_POST['submit_komen']){  
	$getlaporan=$this->M_database->query_dataid($_POST['id'],'tabel_laporan'); 	
	$update = array(	
	'KOMENTAR' => $_POST['komentar'],
	'NILAI' => json_encode($_POST['check_list']),
	);            
	$datau=$this->M_database->update_user($update,$_POST['id'],'tabel_laporan'); 

	$querymahasiswa=$this->M_database->query_dataid($_POST['id_mahasiswa'],"tabel_mahasiswa"); 
        $mail_data = array('mahasiswa' => $querymahasiswa[0]['NAMA'],'judul'=> $getlaporan[0]['JUDUL'],'kelompok'=> $getlaporan[0]['KELOMPOK'],'kategori'=> $getlaporan[0]['KATEGORI'],'dosen'=> $_SESSION['nama'],);
  	$to=$querymahasiswa[0]['EMAIL'];  
        $bcc=$this->config->item('bccemail'); 
  	$subject="[Feedback_laporan | ".$querymahasiswa[0]['NAMA']."] ".$getlaporan[0]['JUDUL'];
	$isi=$this->load->view('mailer/email_to_mahasiswa',$mail_data,TRUE);
	$this->load->library('email'); # load email library
        $this->email->from('no-reply@poltekkesjakarta3.ac.id','');
	$this->email->to($to);
	$this->email->bcc($bcc);
	$this->email->subject($subject);
	$this->email->message($isi);
        $this->email->send();

	if ($datau){
      echo "<script>alert('Sukses Update Feedback & Nilai');window.location.href='Manage_app/laporan_dosen';</script>";
       } else { 
       echo "<script>alert('Gagal Update Feedback & Nilai');window.location.href='Manage_app/laporan_dosen';</script>";     
     }

    } else if ($_GET['look']){
	$data['laporan']=$this->M_database->query_laporan_lengkap_iddos($_SESSION['id']); 	
   $data['editlaporan']=$this->M_database->query_dataid($_GET['look'],'tabel_laporan'); 		    
    $data['page']='lihat_laporan';		
    $this->load->view('template_admin',$data);
    } else {    
	$data['laporan']=$this->M_database->query_laporan_lengkap_iddos($_SESSION['id']); 	    
    $data['page']='laporan_dosen';		
    $this->load->view('template_admin',$data);
   	}}
   	
   	
   	public function admin_laporan(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_GET['edit']){
	$data['editlaporan']=$this->M_database->query_dataid($_GET['edit'],'tabel_laporan'); 	
	$data['kategori']=$this->M_database->query_table('tabel_kategori'); 
    $data['page']='admin/edit_laporan';		
    $this->load->view('template_admin',$data);     
 
    } else if ($_POST['editlaporan']){  
       
if ($_FILES['inputfile']['name']) {
	 unlink('../laporan/assets/form/'.$_POST['filenow']);
	$filename1 = $_FILES['inputfile']['name'];
        $file_ext = pathinfo($filename1,PATHINFO_EXTENSION);
		$namafile0=rand(1,100)."_".date('ydHis').".".$file_ext;    
		$config['upload_path'] = './assets/form/'; 
		$config['allowed_types'] = 'jpg|jpeg|pdf';
		$config['max_size'] = '0'; 
		$config['overwrite'] = true;	
		$config['file_name'] = $namafile0;	

		$this->load->library('upload', $config);
        	$this->upload->initialize($config); 
		if(!$this->upload->do_upload('inputfile')){
		$msg = $this->upload->display_errors();
	    	echo "<script>alert('Gagal!, $msg');window.location.href='../manage_app/admin_laporan';</script>";	
		}else{
        	$datau = $this->upload->data(); 
	$update = array(	
	'ISI' => $_POST['isi'],
	'KATEGORI' => $_POST['kategori'],
    'LOKASI' => $_POST['lokasi'],
    'TANGGAL' => $_POST['tanggal'],
    'JUDUL' => $_POST['judul'],
    'FILE' => $namafile0,
	);    
}

} else {

	$update = array(	
	'ISI' => $_POST['isi'],
	'KATEGORI' => $_POST['kategori'],
    'LOKASI' => $_POST['lokasi'],
    'TANGGAL' => $_POST['tanggal'],
    'JUDUL' => $_POST['judul'],
	);            
}
	$datau=$this->M_database->update_user($update,$_POST['id'],'tabel_laporan'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Laporan');}
    else {$this->session->set_flashdata('error','Gagal Update Laporan');}
    redirect('Manage_app/admin_laporan');
    
    } else {
	$data['laporan']=$this->M_database->query_laporan_lengkap();       
    $data['page']='admin/data_laporan';		
    $this->load->view('template_admin',$data);
    }	   
   	}
    

    public function laporan_add(){
    if ($_POST['submitlaporan']){

                $filename1 = $_FILES['inputfile']['name'];
        	$file_ext = pathinfo($filename1,PATHINFO_EXTENSION);
		$namafile0=rand(1,100)."_".date('ydHis').".".$file_ext;    
		$config['upload_path'] = './assets/form/'; 
		$config['allowed_types'] = 'jpg|jpeg|pdf';
		$config['max_size'] = '0'; 
		$config['overwrite'] = true;	
		$config['file_name'] = $namafile0;	

		$this->load->library('upload', $config);
        	$this->upload->initialize($config); 
		if(!$this->upload->do_upload('inputfile')){
		$msg = $this->upload->display_errors();
	    	echo "<script>alert('Gagal!, $msg');window.location.href='../manage_app/laporan_add';</script>";	
		}else{
        	$datau = $this->upload->data();  


	$insert = array(	
	'ISI' => $_POST['isi'],
	'KATEGORI' => $_POST['kategori'],
	'KELOMPOK' => $_POST['kelompok'],
    'JUDUL' => $_POST['judul'],
    'LOKASI' => $_POST['lokasi'],
    'TANGGAL' => $_POST['tanggal'],
    'ID_MAHASISWA' => $_POST['id_mahasiswa'],
    'ID_DOSEN' => $_POST['id_dosen'],
    'FILE' => $namafile0,
	);
	$dataus=$this->M_database->insert("tabel_laporan",$insert); 	

	$querydosen=$this->M_database->query_dataid($_POST['id_dosen'],"tabel_dosen"); 
        $mail_data = array('mahasiswa' => $_SESSION['nama'],'judul'=> $_POST['judul'],'kelompok'=> $_POST['kelompok'],'kategori'=> $_POST['kategori'],);
  	$to=$querydosen[0]['EMAIL'];  
       $bcc=$this->config->item('bccemail'); 
  	$subject="[Submit_laporan | ".$_SESSION['nama']."] ".$_POST['judul'];
	$isi=$this->load->view('mailer/email_to_dosen',$mail_data,TRUE);
	$this->load->library('email'); # load email library
        $this->email->from('no-reply@poltekkesjakarta3.ac.id','');
	$this->email->to($to);
	$this->email->bcc($bcc);
	$this->email->subject($subject);
	$this->email->message($isi);
        $this->email->send();

	if ($dataus){
      echo "<script>alert('Laporan Berhasil di Submit');window.location.href='Manage_app/laporan_add';</script>";
       } else { 
       echo "<script>alert('Laporan Gagal di Submit');window.location.href='Manage_app/laporan_add';</script>";     
     }
     }
    } else if ($_GET['edit']){
	$data['editlaporan']=$this->M_database->query_dataid($_GET['edit'],'tabel_laporan'); 	
	$data['kategori']=$this->M_database->query_table('tabel_kategori'); 
	$data['kelompok']=$this->M_database->query_table('tabel_kelompok'); 
    $data['page']='laporan_add';		
    $this->load->view('template_admin',$data);     
 
    } else if ($_POST['editlaporan']){  
	$update = array(	
	'ISI' => $_POST['isi'],
	'KATEGORI' => $_POST['kategori'],
	'KELOMPOK' => $_POST['kelompok'],
    'LOKASI' => $_POST['lokasi'],
    'TANGGAL' => $_POST['tanggal'],
    'JUDUL' => $_POST['judul'],
	);            
	$datau=$this->M_database->update_user($update,$_POST['id'],'tabel_laporan'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Laporan');}
    else {$this->session->set_flashdata('error','Gagal Update Laporan');}
    redirect('Manage_app/laporan_saya');
    
    } else {
	$data['dosen']=$this->M_database->query_mahasiswa_bimbingan($_SESSION['id']);  
	$data['kategori']=$this->M_database->query_table('tabel_kategori'); 
	$data['kelompok']=$this->M_database->query_table('tabel_kelompok'); 
    $data['page']='laporan_add';		
    $this->load->view('template_admin',$data);
    }	   
   	}
    
    public function admin_pembimbing(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitpembimbing']){
	$insert = array(	
	'ID_DOSEN' => $_POST['dosen'],
	'ID_MAHASISWA' => $_POST['mahasiswa'],
    'KETERANGAN' => $_POST['keterangan'],
	);
	$dataus=$this->M_database->insert("tabel_data_pembimbing",$insert); 	
	$update = array('STATUS' => 'AKTIF');	
	$upd=$this->M_database->update_user($update,$_POST['mahasiswa'],'tabel_mahasiswa'); 	   
	if ($dataus && $upd){
    $this->session->set_flashdata('success','Sukses Set Dosen Pembimbing');}
    else {$this->session->set_flashdata('error','Gagal Set Dosen Pembimbing');}
    redirect('Manage_app/admin_pembimbing');
        
    } else {
	$data['data_pembimbing']=$this->M_database->query_bimbingan();
	$data['datadosen']=$this->M_database->query_table('tabel_dosen'); 	    
	$data['datamahasiswa']=$this->M_database->query_mahasiswa_aktif(); 	
    $data['page']='admin/pembimbing';		
    $this->load->view('template_admin',$data);
    }	   
   	}
   	
    
   	public function admin_dosen(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitdosen']){
	$insert = array(	
	'NAMA' => $_POST['nama'],
	'EMAIL' => $_POST['email'],
	'USERNAME' => $_POST['username'],
    'PASSWORD' => hash('sha256',$_POST['password']),
	);
	$dataus=$this->M_database->insert("tabel_dosen",$insert); 	
	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah Dosen');}
    else {$this->session->set_flashdata('error','Gagal Tambah Dosen');}
    redirect('Manage_app/admin_dosen');

    } else if ($_GET['edit']){
	$data['datadosen']=$this->M_database->query_table('tabel_dosen'); 
	$data['editdosen']=$this->M_database->query_dataid($_GET['edit'],'tabel_dosen'); 	
    $data['page']='admin/dosen';		
    $this->load->view('template_admin',$data);      
        
    } else if ($_POST['editdosen']){  
    
    if ($_POST['password']){
	$update = array('NAMA' => $_POST['nama'],'USERNAME' => $_POST['username'],	'EMAIL' => $_POST['email'],'PASSWORD' => hash('sha256',$_POST['password']));            
    } else {
	$update = array('NAMA' => $_POST['nama'],'USERNAME' => $_POST['username'],	'EMAIL' => $_POST['email']);                    
    }
	$datau=$this->M_database->update_user($update,$_POST['id'],'tabel_dosen'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Dosen');}
    else {$this->session->set_flashdata('error','Gagal Update Dosen');}
    redirect('Manage_app/admin_dosen');
        
    } else {
	$data['datadosen']=$this->M_database->query_table('tabel_dosen'); 	    
    $data['page']='admin/dosen';		
    $this->load->view('template_admin',$data);
    }	   
   	}
    



 public function admin_penilaian(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
   $data['datadosen']=$this->M_database->query_table('tabel_mahasiswa'); 	    
    $data['page']='admin/penilaian';		
    $this->load->view('template_admin',$data);
 	   
   	}


 public function upload_format(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 

if ($_FILES['inputfile']['name'] && $_POST['submitupload']) {
	 unlink('../laporan/assets/form/'.$_POST['file_eksis']);
	$filename1 = $_FILES['inputfile']['name'];
        $file_ext = pathinfo($filename1,PATHINFO_EXTENSION);
		$namafile0="Format_".rand(1,100)."_".date('ydHis').".".$file_ext;    
		$config['upload_path'] = './assets/form/'; 
		$config['allowed_types'] = 'jpg|jpeg|pdf';
		$config['max_size'] = '0'; 
		$config['overwrite'] = true;	
		$config['file_name'] = $namafile0;	

		$this->load->library('upload', $config);
        	$this->upload->initialize($config); 
		if(!$this->upload->do_upload('inputfile')){
		$msg = $this->upload->display_errors();
	    	echo "<script>alert('Gagal!, $msg');window.location.href='../manage_app/upload_format';</script>";	
		}else{
        	$datau = $this->upload->data(); 
	$update = array('DATA' => $namafile0);    

	$datau=$this->M_database->update_user($update,$_POST['id'],'tabel_setting'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Setting');}
    else {$this->session->set_flashdata('error','Gagal Update Setting');}
    redirect('Manage_app/upload_format');
}
} else {
    $data['jenis']=$this->M_database->query_setting('FORMAT_LAPORAN'); 
    $data['page']='admin/upload_format';		
    $this->load->view('template_admin',$data);
 }	  
 
   	}

    
    public function admin_mahasiswa(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitmahasiswa']){
	$insert = array(	
	'NAMA' => $_POST['nama'],
	'EMAIL' => $_POST['email'],
	'USERNAME' => $_POST['username'],
    'PASSWORD' => hash('sha256',$_POST['password']),
	);
	$dataus=$this->M_database->insert("tabel_mahasiswa",$insert); 	
	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah Mahasiswa');}
    else {$this->session->set_flashdata('error','Gagal Tambah Mahasiswa');}
    redirect('Manage_app/admin_mahasiswa');

    } else if ($_GET['edit']){
	$data['datadosen']=$this->M_database->query_table('tabel_mahasiswa'); 
	$data['editdosen']=$this->M_database->query_dataid($_GET['edit'],'tabel_mahasiswa'); 	
    $data['page']='admin/mahasiswa';		
    $this->load->view('template_admin',$data);      
        
    } else if ($_POST['editmahasiswa']){  
    
    if ($_POST['password']){
	$update = array('NAMA' => $_POST['nama'],'USERNAME' => $_POST['username'],	'EMAIL' => $_POST['email'],'PASSWORD' => hash('sha256',$_POST['password']));            
    } else {
	$update = array('NAMA' => $_POST['nama'],'USERNAME' => $_POST['username'],	'EMAIL' => $_POST['email']);                    
    }
	$datau=$this->M_database->update_user($update,$_POST['id'],'tabel_mahasiswa'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Mahasiswa');}
    else {$this->session->set_flashdata('error','Gagal Update Mahasiswa');}
    redirect('Manage_app/admin_mahasiswa');
        
    } else {
	$data['datadosen']=$this->M_database->query_table('tabel_mahasiswa'); 	    
    $data['page']='admin/mahasiswa';		
    $this->load->view('template_admin',$data);
    }	   
   	}
    
    public function admin_admin(){
    if ($this->session->userdata('level')!=99) redirect('logout'); 
    if ($_POST['submitadmin']){
	$insert = array(	
	'NAMA' => $_POST['nama'],
	'EMAIL' => $_POST['email'],
	'USERNAME' => $_POST['username'],
    'PASSWORD' => hash('sha256',$_POST['password']),
	);
	$dataus=$this->M_database->insert("tabel_admin",$insert); 	
	
	if ($dataus){
    $this->session->set_flashdata('success','Sukses Tambah Admin');}
    else {$this->session->set_flashdata('error','Gagal Tambah Admin');}
    redirect('Manage_app/admin_admin');

    } else if ($_GET['edit']){
	$data['datadosen']=$this->M_database->query_table('tabel_admin'); 
	$data['editdosen']=$this->M_database->query_dataid($_GET['edit'],'tabel_admin'); 	
    $data['page']='admin/admin';		
    $this->load->view('template_admin',$data);      
        
    } else if ($_POST['editadmin']){  
    
    if ($_POST['password']){
	$update = array('NAMA' => $_POST['nama'],'USERNAME' => $_POST['username'],	'EMAIL' => $_POST['email'],'PASSWORD' => hash('sha256',$_POST['password']));            
    } else {
	$update = array('NAMA' => $_POST['nama'],'USERNAME' => $_POST['username'],	'EMAIL' => $_POST['email']);                    
    }
	$datau=$this->M_database->update_user($update,$_POST['id'],'tabel_admin'); 	   
	if ($datau){
    $this->session->set_flashdata('success','Sukses Update Admin');}
    else {$this->session->set_flashdata('error','Gagal Update Admin');}
    redirect('Manage_app/admin_admin');
        
    } else {
	$data['datadosen']=$this->M_database->query_table('tabel_admin'); 	    
    $data['page']='admin/admin';		
    $this->load->view('template_admin',$data);
    }	   
   	}
    

    
    
    
    
    
}


