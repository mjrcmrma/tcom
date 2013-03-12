<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Usuarios extends REST_Controller
{
    protected $methods = array(
           'idUsuario_nombreUsuario_post' => array('level' => 1),
           'usuario_post' => array('level' => 1),
           'idUsuario_by_correo_contrasena_post' => array('level' => 1),
           'tipo_usuario_post' => array('level' => 1),
           'idUsuario_by_correo_contrasena_post' => array('level' => 1),
           'allUsuarios_get' => array('level' => 1),
   );
    
    function idUsuario_nombreUsuario_post()
    {
        $this->load->model("usuario_model");
        $this->response($this->usuario_model->get_idUsuario_nombreUsuario_by_correo_contrasena($this->post("correo"), 
            $this->post("contrasena")), 200); // 200 being the HTTP response code  
    }
    
    function tipo_usuario_post(){
        $this->load->model("usuario_model");
        $this->response($this->usuario_model->get_tipoUsuario_by_idUsuario($this->post("idUsuario")), 200);
    }
    function idUsuario_by_correo_contrasena_post(){
        $this->load->model("usuario_model");
        $this->response($this->usuario_model->get_idUsuario_by_correo_contrasena($this->post("correo"),
            $this->post("contrasena")), 200);
    }
    function usuario_post(){
        $this->load->model("usuario_model");
        $this->response($this->usuario_model->get_usuario_by_idUsuario($this->post("idUsuario")),200);
    }
    
    function allUsuarios_get(){
        $this->load->model("usuario_model");
        $this->response($this->usuario_model->get_usuarios(),200);
    }
}