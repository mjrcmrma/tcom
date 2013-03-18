<?php

class Usuario_model extends CI_Model{
    
    public function get_UsuariosPersona(){
        $q = $this->db->query("SELECT * FROM usuarios AS u, personas AS p WHERE u.`idPersona`=p.`idPersona` GROUP BY idUsuario");
        return $q->result_Array();
    }
}
?>
