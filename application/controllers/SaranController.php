<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class SaranController extends CI_Controller{

	public function __construct(){
        parent::__construct();		
            
        $this->load->model('M_database');
        $this->load->library('Lib_ext');
        if (empty($this->session->userdata('username'))) redirect('logout');   
	}

    public function index(){
        $complaints = $this->M_database->query_table('complaints');
        $data = [
            'page' => 'admin/saran/saran',
            'complaints' => $complaints
        ];
        $this->load->view('template_admin',$data);
    }

    public function create(){
        $data = [
            'page' => 'admin/saran/saran-tambah',
        ];
        $this->load->view('template_admin',$data);
    }

    public function store(){
        $now = (new DateTime())->format('Y-m-d H:i:s');
        $insert = array(	
            'user_id' => $_SESSION['id'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'status' => 'Terkirim',
            'created_at' => $now,
		);
		$dataus=$this->M_database->insert("complaints",$insert);
        if ($dataus){
		    $this->session->set_flashdata('notification','Sukses menambahkan saran / pengaduan');}
		else {
            $this->session->set_flashdata('notification','Gagal menambahkan saran / pengaduan');
        }
		redirect('Manage_app/saran');
    }

    public function edit($id){
	    $complaint = $this->M_database->query_getdataid($id,'complaints'); 	

        $data = [
            'page' => 'admin/saran/saran-edit',
            'complaint' => $complaint,
        ];
        $this->load->view('template_admin',$data);
    }

    public function update($id){
        $now = (new DateTime())->format('Y-m-d H:i:s');
        $update = array(	
            'user_id' => $_SESSION['id'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'status' => 'Terkirim',
            'created_at' => $now,
		);
        $dataus=$this->M_database->update($update,$id,'complaints');
        if ($dataus){
		    $this->session->set_flashdata('notification','Sukses mengedit saran / pengaduan');}
		else {
            $this->session->set_flashdata('notification','Gagal mengedit saran / pengaduan');
        }
		redirect('Manage_app/saran');
    }

    public function delete($id){
        $dataus=$this->M_database->delete_table($id,'complaints');
        if ($dataus){
		    $this->session->set_flashdata('notification','Sukses menghapus saran / pengaduan');}
		else {
            $this->session->set_flashdata('notification','Gagal menghapus saran / pengaduan');
        }
        redirect('Manage_app/saran');
    }
}