<?php
class Empresa_model extends CI_Model{
    public function get_empresas(){
        $q = $this->db->get("empresas");
//        echo $this->db->last_query();
        return $q->result_Array();
    }
}