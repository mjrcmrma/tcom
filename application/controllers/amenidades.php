<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Amenidades extends CI_Controller {

    public function index(){
        $this->load->model("abc_model");
        $data["amenidades"] = $this->abc_model->get("amenidades"); 
        $this->load->view('amenidades/lista', $data);
//        var_dump($data);
    }
    
    public function nueva(){
        $this->load->model("abc_model");
        $id = $this->abc_model->set("amenidades", $this->input->post()); 
        echo $id;
    }
    
    public function borrar($id){
        $this->load->model("abc_model");
        $id = $this->abc_model->delete("amenidades", $id, "idArticulo");
        echo "true";
    }
    
    public function editar(){
        $this->load->model("abc_model");
        $id = $this->input->post("row_id");
        $campo = $this->input->post("column");
        $valor = $this->input->post("value");
        $id = $this->abc_model->update("amenidades", $id, "idArticulo", $campo, $valor);
        echo $valor;
    }

}