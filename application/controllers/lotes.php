<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lotes extends CI_Controller {

   function lote(){
       $this->load->model("lote_model");
       $data['lotes'] = $this->lote_model->get_lote();
       $this->load->view("administrador/mapa_estado", $data);
   }
   
   function loteVer($id){
       $this->load->model("lote_model");
       $data['lotes'] = $this->lote_model->get_lote_by_id($id);
       $this->load->view("contador/asignarLote", $data);
   }

}