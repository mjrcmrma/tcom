<?php

class Usuario_model extends CI_Model {

    function construct()
    {
        parent::__construct();
    }

    function get_idUsuario_nombreUsuario_by_correo_contrasena($correo, $contrasenia)
    {
        $query = $this->db->query("SELECT distinct t.TipoUsuario, p.idUsuario, CONCAT(p.nombrePersona, ' ', p.apellidoPatPersona, ' ', p.apellidoMatPersona) as usuario
            FROM usuarios u left join personas p ON u.idUsuario = p.idUsuario,
            usuarios us left join tipos t ON us.idTipoUsuario = t.idTipoUsuario
            WHERE u.correoUsuario = '$correo' AND u.contrasenia = '$contrasenia'");
        if($query->result_array()){
            $r = $query->result_array();
        }
        else $r = false;
        return $r;
    }
    function get_idUsuario_by_correo_contrasena($correo, $contrasenia){
        $query = $this->db->get_where("usuarios", array('correoUsuario' => $correo, 'contrasenia' => $contrasenia));
        $row = $query->row_array();
        if($query->num_rows()){
            return $row['idUsuario'];
        } else {
            return false;
        }
    }
    
    function get_usuario_by_idUsuario($idusuario){
        $query = $this->db->query("SELECT distinct t.tipoUsuario, CONCAT(p.nombrePersona, ' ', p.apellidoPatPersona, ' ', p.apellidoMatPersona) as usuario
            FROM usuarios u left join personas p ON u.idUsuario = p.idUsuario,
            usuarios us left join tipos t ON us.idTipoUsuario = t.idTipoUsuario
            WHERE u.idUsuario = '$idusuario'");
        if($query->row_array()){
            $r = $query->row_array();
        }
        else $r = false;
        return $r;
    }
    
    function get_tipoUsuario_by_idUsuario($idusuario){
        $query = $this->db->query("SELECT distinct t.tipoUsuario
            FROM usuarios u left join tipos t ON u.idTipoUsuario = t.idTipoUsuario
            WHERE u.idUsuario = '$idusuario'");
        $row = $query->row_array();
        if($query->num_rows()){
            return $row['tipoUsuario'];
        } else {
            return false;
        }
    }
        
    function get_usuarios(){
        $query = $this->db->query("SELECT CONCAT(p.nombrePersona, ' ', p.apellidoPatPersona, ' ', p.apellidoMatPersona) as usuario, t.tipoUsuario
            FROM usuarios u 
                left join personas p ON u.idUsuario = p.idUsuario
                left join tipos t ON u.idTipoUsuario = t.idTipoUsuario GROUP BY u.idUsuario");
        if($query->num_rows()){
            return $query->result_array();
        } else {
            return false;
        }
    }
}