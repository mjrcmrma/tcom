<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class UnidadesMoviles extends REST_Controller
{
    protected $methods = array(
           'unidadMovil_post' => array('level' => 1),
           'unidadMovil2_get' => array('level' => 1),
   );
    
    function unidadMovil_post()
    {
        $this->load->model("unidadMovil_model");
        $this->response($this->unidadMovil_model->set_unidadMovil($this->put("idusuario"), $this->input->post()), 200);   
    }
    
    function unidadMovil2_get()
    {
        $this->load->model("unidadmovil_model");
        $this->response("hola", 200); 
    }
}