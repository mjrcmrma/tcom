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
//    function get_usuario_sinLote(){
//        $q = $this->db->query("SELECT u.`idUsuario`,u.`correoUsuario`, u.`idTipo`, 
//            CONCAT(p.`apellidoPatPersona`,' ', p.`apellidoMatPersona`,' ', p.`nombrePersona`) AS nombre, 
//            p.`direccionPersona`, p.`telefonoPersona` FROM usuarios AS u, personas AS p 
//            WHERE idUsuario NOT IN (SELECT idCondomino FROM usuariocondominio) AND 
//            p.`idPersona`= u.`idPersona` GROUP BY u.`idUsuario`");
//        return $q->result_Array();
//    }
}