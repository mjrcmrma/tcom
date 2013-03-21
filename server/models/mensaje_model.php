<?php

Class Mensaje_model extends CI_Model{
    function get_Notificaciones_Cantidad($id){
        $q = $this->db->query("SELECT COUNT(*) AS cantidad FROM notificaciones WHERE idUsuario1 = $id");
        return $q->row_Array();
    }
    
    function get_where($id){
        $q = $this->db->query("SELECT CONCAT(p.nombrePersona, ' ', p.apellidoPatPersona) AS nombre,
        n.`mensaje`
        FROM personas AS p, usuarios AS u, notificaciones AS n WHERE 
        n.`idUsuario2`= u.`idUsuario` AND u.`idPersona` = p.`idPersona` AND n.`idUsuario1`= $id");
        return $q->result_Array();
    }
    
}
?>
