<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresas extends CI_Controller {

    public function index(){
        $this->load->model("empresa_model");
        $data["empresas"] = $this->empresa_model->get_empresas(); 
        $this->load->view('empresas/lista', $data);
//        var_dump($data);
    }
    
    public function nueva(){
        echo "1";
    }
    
    public function borrar($id){
        echo "true";
    }

}