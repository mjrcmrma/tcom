<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresas extends CI_Controller {

    public function index(){
        $this->load->model("abc_model");
        $data["empresas"] = $this->abc_model->get("empresas"); 
        $this->load->view('empresas/lista', $data);
    }
    
    public function nueva(){
        $this->load->model("abc_model");
        $id = $this->abc_model->set("empresas", $this->input->post()); 
        echo $id;
    }
    
    public function borrar($id){
        $this->load->model("abc_model");
        $id = $this->abc_model->delete("empresas", $id, "idEmpresa");
        echo "true";
    }
    
    public function editar(){
        $this->load->model("abc_model");
        $id = $this->input->post("row_id");
        $campo = $this->input->post("column");
        $valor = $this->input->post("value");
        $id = $this->abc_model->update("empresas", $id, "idEmpresa", $campo, $valor);
        echo $valor;
    }

}