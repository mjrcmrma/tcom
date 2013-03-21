<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Servicios extends CI_Controller {

    public function index(){
    	
        $this->load->model("abc_model");
        $data["servicios"] = $this->abc_model->get("servicios"); 
        $this->load->view('servicios/lista', $data);

    }
    
    public function registraAccion($id,$campo,$valor) {
    	$this->load->model("abc_model");
//    	$id = $this->input->post("row_id");
//    	$campo = $this->input->post("column");
//    	$valor = $this->input->post("value");
    	$this->rest->debug();
    	$id = $this->abc_model->update("servicios", $id, "idServicio", $campo, $valor);
    	echo $valor;
    }
    public function nueva(){
        $this->load->model("abc_model");
        echo $this->input->post();
        $id = $this->abc_model->set("servicios", $this->input->post()); 
        echo $id;
    }
    
    public function borrar($id){
        $this->load->model("abc_model");
        $id = $this->abc_model->delete("servicios", $id, "idServicio");
        echo "true";
    }
    
    public function editar(){
        $this->load->model("abc_model");
        $id = $this->input->post("row_id");
        $campo = $this->input->post("column");
        $valor = $this->input->post("value");
        $id = $this->abc_model->update("servicios", $id, "idServicio", $campo, $valor);
        echo $valor;
    }

}
