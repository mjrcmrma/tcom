<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Amenidades extends CI_Controller {

    public function index(){
        $this->load->model("amenidad_model");
        $data['amenidades'] = $this->amenidad_model->get_amenidades();
        $this->load->view("administrador/amenidades", $data);
    } 

}