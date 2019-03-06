<?php
class Home extends Ci_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_home');
        $this->load->model('M_insert');
    }

    public function index(){
        $this->load->view('templates/v_header');
        $this->load->view('home/v_index');
        $this->load->view('templates/v_footer');
    }

    public function belanja(){
        $data['seq']=$this->M_home->getIdBelanja();
        $data['insert']=$this->M_insert->tambahBelanjaan();
        // var_dump( $data['insert']=$this->M_insert->tambahBelanjaan());
        // die();
        // var_dump($data['seq']=$this->M_home->getIdBelanja());
        // die();
        $this->load->view('templates/v_header');
        $this->load->view('home/v_belanja',$data);
        $this->load->view('templates/v_footer');
    }

    public function insert(){
        $this->M_insert->tambahBelanjaan();
    }
}