<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Condominos extends CI_Controller {

    
//    public function nueva(){
//        $this->load->model("abc_model");
//        $id = $this->abc_model->set("usuarios", $this->input->post()); 
//        echo $id;
//    }
//    
    public function nuevaC(){
        $this->load->model("abc_model");
        $data1["nombrePersona"] = $this->input->post("nombrePersona");
        $data1["apellidoPatPersona"] = $this->input->post("apellidoPatPersona");
        $data1["apellidoMatPersona"] = $this->input->post("apellidoMatPersona");
        $data1["fechaNacimiento"] = $this->input->post("fechaNacimiento");
        $data1["direccionPersona"] = $this->input->post("direccionPersona");
        $data1["telefonoPersona"] = $this->input->post("telefonoPersona");
        $data1["celularPersona"] = $this->input->post("celularPersona");
        $data1["extensionPersona"] = $this->input->post("extensionPersona");
        $data1["correoPersona"] = $this->input->post("correoPersona");
        $data1["estado"] = $this->input->post("estado");
        $id = $this->abc_model->set("personas", $data1);
        $data0["idPersona"] = $id;
        $data0["correoUsuario"] = $this->input->post("correoUsuario");
        $data0["idTipo"] = $this->input->post("idTipo");
        $data0["contrasena"] = $this->input->post("contrasena");
        $data0["fechaRegistro"] = $this->input->post("fechaRegistro");
        $id2 = $this->abc_model->set("usuarios", $data0);
        echo $id2;
    }
    public function insert_lote($id, $lote){
        $this->load->model("abc_model");
        $data['idCondomino'] = $id;
        $data['idLote'] = $lote;
        $idc = $this->abc_model->set("usuariocondominio", $data);
        $res = $this->abc_model->update("lotes",$lote,"lote","estado","0");
       echo $idc;
        
        }
    
    public function borrar($id){
        $this->load->model("abc_model");
        $id = $this->abc_model->delete("usuarios", $id, "idUsuario");
        echo "true";
    }
    
    public function editar(){
        $this->load->model("abc_model");
        $id = $this->input->post("row_id");
        $campo = $this->input->post("column");
        $valor = $this->input->post("value");
        $id = $this->abc_model->update("usuarios", $id, "idUsuario", $campo, $valor);
        echo $valor;
    }

}
?>
