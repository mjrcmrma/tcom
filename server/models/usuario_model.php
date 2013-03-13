<?php

class Usuario_model extends CI_Model {
    //NOTA: TODOS LAS FUNCIONES DE TODOS LOS MODELOS DEVUELVEN EL RESULTADO DEL QUERY EN UN ARRAY
    function construct()
    {
        parent::__construct();
    }
    //Realiza un query para obtener el ID y El nombre del usuario por su correo y contraseña 
    function get_idUsuario_nombreUsuario_by_correo_contrasena($correo, $contrasena)
    {
        $query = $this->db->query("SELECT distinct t.tipo, p.idUsuario, CONCAT(p.nombrePersona, ' ', p.apellidoPatPersona, ' ', p.apellidoMatPersona) as usuario
            FROM usuarios u left join personas p ON u.idUsuario = p.idUsuario,
            usuarios us left join tipousuarios t ON us.idTipo = t.idTipo
            WHERE u.correoUsuario = '$correo' AND u.contrasena = '$contrasena'");
        if($query->result_array()){
            $r = $query->result_array();
        }
        else $r = false;
        return $r;
    }
    //Realiza un query que obtiene el ID del usuario por su correo y contraseña
    function get_idUsuario_by_correo_contrasena($correo, $contrasena){
        $query = $this->db->get_where("usuarios", array('correoUsuario' => $correo, 'contrasena' => $contrasena));
        $row = $query->row_array();
        if($query->num_rows()){
            return $row['idUsuario'];
        } else {
            return false;
        }
    }
    //REaliza un query que devuelve el tipo de usuario y su nombre concatenado
    function get_usuario_by_idUsuario($idusuario){
        $query = $this->db->query("SELECT distinct t.tipo, CONCAT(p.nombrePersona, ' ', p.apellidoPatPersona, ' ', p.apellidoMatPersona) as usuario
            FROM usuarios u left join personas p ON u.idUsuario = p.idUsuario,
            usuarios us left join tipousuarios t ON us.idTipo = t.idTipo
            WHERE u.idUsuario = '$idusuario'");
        if($query->row_array()){
            $r = $query->row_array();
        }
        else $r = false;
        return $r;
    }
    //Devuelve el tipo de usuario solo por el ID del usuario
    function get_tipoUsuario_by_idUsuario($idusuario){
        $query = $this->db->query("SELECT distinct t.tipo
            FROM usuarios u left join tipousuarios t ON u.idTipo = t.idTipo
            WHERE u.idUsuario = '$idusuario'");
        $row = $query->row_array();
        if($query->num_rows()){
            return $row['tipo'];
        } else {
            return false;
        }
    }
    //Realiza un query para obtener los datos de todos los usuarios
    function get_usuarios(){
        $query = $this->db->query("SELECT CONCAT(p.nombrePersona, ' ', p.apellidoPatPersona, ' ', p.apellidoMatPersona) as usuario, t.tipo
            FROM usuarios u 
                left join personas p ON u.idUsuario = p.idUsuario
                left join tipousuarios t ON u.idTipo = t.idTipo GROUP BY u.idUsuario");
        if($query->num_rows()){
            return $query->result_array();
        } else {
            return false;
        }
    }
    
}