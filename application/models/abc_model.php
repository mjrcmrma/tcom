<?php
class Abc_model extends CI_Model{
    public function get($tabla){
        $q = $this->db->get($tabla);
//        echo $this->db->last_query();
        return $q->result_Array();
    }
    
    function set($tabla, $data){
        $this->db->insert($tabla,$data);
        return $this->db->insert_id();
    }
    
    function delete($tabla,$id,$field){
        $this->db->where($field, $id);
        $this->db->delete($tabla); 
    }
    
    function update($tabla, $id, $idfield, $field, $value){
        $this->db->where($idfield, $id);
        $this->db->update($tabla, array($field => $value)); 
    }
}