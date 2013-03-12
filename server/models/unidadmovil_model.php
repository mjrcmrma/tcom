<?php

class Unidadmovil_model extends CI_Model {

    function construct()
    {
        parent::__construct();
    }

    function set_unidadMovil($post)
    {
        $this->db->insert("unidadesMoviles", $post);
    }
}