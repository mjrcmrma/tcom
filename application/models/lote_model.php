<?php
class Lote_model extends CI_Model{
    function get_lote(){
        $q = $this->db->get("lotes");
        return $q->result_Array();
    }
}