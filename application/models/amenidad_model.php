<?php
class Amenidad_model extends CI_Model{
    public function get_amenidades(){
        $q = $this->db->get("amenidades");
        return $q->result_Array();
    }
}
