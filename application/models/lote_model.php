<?php
class Lote_model extends CI_Model{
    function get_lote(){
        $q = $this->db->get("lotes");
        return $q->result_Array();
    }
    function get_lote_by_id($id){
        $q = $this->db->get_where("lotes",array("idLote" => $id));
        return $q->row_Array();
    }
}