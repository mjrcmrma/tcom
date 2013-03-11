<?php

class Unidadmovil_model extends CI_Model {

    function construct()
    {
        parent::__construct();
    }

    function set_unidadMovil($idusuario, $post)
    {
        $data = array(
            "idUsuario" => $idusuario,
            "descripcionMovil" => $post['descripcionMovil'],
            "placas" => $post['placas']
        );
        $this->db->insert("unidadesMoviles", $data);
    }
}