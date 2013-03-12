<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class UnidadesMoviles extends REST_Controller
{
    protected $methods = array(
           'unidadMovil_post' => array('level' => 1),
           'unidadMovil2_get' => array('level' => 1),
           'unidadMovil_get' => array('level' => 1),
           'unidadMovil_modificar_get' => array('level' => 1),
           'unidadMovil_delete_get' => array('level' => 1)
   );
    
    function unidadMovil_post()
    {
        $this->load->model("unidadmovil_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->unidadmovil_model->set_unidadMovil($this->post()), 200);   
    }
    
    function unidadMovil2_get()
    {
        $this->load->model("unidadmovil_model");
        $this->response("hola", 200); 
    }
    
    function unidadMovil_get(){
        $this->load->model("unidadmovil_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->unidadmovil_model->get_propiedades($this->get('idUsuario')),200);
        
    }
    function unidadMovil_modificar_get(){
        $this->load->model("unidadmovil_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->unidadmovil_model->update_propiedad($this->get('usuario'), $this->get('descripcion'), $this->get('placa')),200);
    }
    
    function unidadMovil_delete_get(){
        $this->load->model("unidadmovil_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->unidadmovil_model->delete_propiedad($this->get('idunidad')),200);
    }
}