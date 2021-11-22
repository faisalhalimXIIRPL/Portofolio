<?php
class Siswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Siswa');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Siswa ";
        $data['siswa'] = $this->M_Siswa->data_siswa();
        $this->template->load_admin('index','siswa',$data);
    }	
}
