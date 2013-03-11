<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UnidadesMoviles extends CI_Controller {
    //Esta función manda llamar a la función del server unidadMovil la cual recibe el ID del usuario 
    //para dar de alta a la nueva propiedad del condomino corespondiente
    public function nuevaUM() {
        $this->load->library('rest');   
        $data = $this->input->post();
        $data['idUsuario'] = $this->session->userdata("idUsuario");
        if ($this->session->userdata('idUsuario') > 0) {
            $this->rest->post("server.php/unidadesMoviles/unidadMovil",$data, 'json');
            $this->rest->debug();
        }
        else
            header("Location: " . base_url());
    }

}