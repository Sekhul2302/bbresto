<?php
class Home extends Ci_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_home');
    }

    public function index(){
        $this->load->view('templates/v_header');
        $this->load->view('home/v_index');
        $this->load->view('templates/v_footer');
    }

    public function belanja(){
        $data['seq']=$this->M_home->getIdBelanja();
        // var_dump($data['seq']=$this->M_home->getIdBelanja());
        // die();
        $this->load->view('templates/v_header');
        $this->load->view('home/v_belanja',$data);
        $this->load->view('templates/v_footer');
    }
}