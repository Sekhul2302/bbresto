<?php
class M_home extends CI_model{
    public function getIdBelanja(){
        $query =$this->db->query("SELECT MAX(id+1)as seq from tb_belanja");
        return $query->row_array();
    }
}