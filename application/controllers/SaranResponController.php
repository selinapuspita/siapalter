<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class SaranResponController extends CI_Controller{

	public function __construct(){
        parent::__construct();		
            
        $this->load->model('M_database');
        $this->load->library('Lib_ext');
        if (empty($this->session->userdata('username'))) redirect('logout');   
	}

    public function index(){
        $saran_users = $this->M_database->saran_users();
        $saran_responses = $this->M_database->saran_responses();
        $data = [
            'page' => 'admin/saran/saran-respon',
            'saran_users' => $saran_users,
            'saran_responses' => $saran_responses
        ];
        $this->load->view('template_admin',$data);
    }

    public function proses($id){
        $now = (new DateTime())->format('Y-m-d H:i:s');
        $update = array(	
            'status' => 'Diproses',
		);
        $this->M_database->update($update,$id,'complaints');
        $insert = [
            'complaint_id' => $id,
            'admin_id' => $_SESSION['id'],
            'status' => 'Diproses',
            'response' => 'Baik akan segera kami proses',
            'created_at' => $now
        ];
        $dataus=$this->M_database->insert("complaint_responses",$insert);
        if ($dataus){
		    $this->session->set_flashdata('notification','Sukses memproses saran / pengaduan');}
		else {
            $this->session->set_flashdata('notification','Gagal memproses saran / pengaduan');
        }
		redirect('Manage_app/saran-respon');
    }

    public function selesai($id){
        $now = (new DateTime())->format('Y-m-d H:i:s');
        $update = array(	
            'status' => 'Selesai',
		);
        $this->M_database->update($update,$id,'complaints');
        $insert = [
            'complaint_id' => $id,
            'admin_id' => $_SESSION['id'],
            'status' => 'Selesai',
            'response' => 'Masalah telah diperbaiki, silakan dicoba kembali',
            'created_at' => $now
        ];
        $dataus=$this->M_database->insert("complaint_responses",$insert);
        if ($dataus){
		    $this->session->set_flashdata('notification','Sukses menyelesaikan saran / pengaduan');}
		else {
            $this->session->set_flashdata('notification','Gagal menyelesaikan saran / pengaduan');
        }
		redirect('Manage_app/saran-respon');
    }

    public function status($id){
        $saran_responses = $this->M_database->saran_responses_bycomplaintid($id);
        $data = [
            'page' => 'admin/saran/saran-respon-status',
            'saran_responses' => $saran_responses
        ];
        $this->load->view('template_admin',$data);
    }

}