<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Mensajes extends REST_Controller
{
    public function notificaciones_get($id){
        $this->load->model("mensaje_model");
        $this->response($this->mensaje_model->get_Notificaciones_Cantidad($id), 200);
    }
    public function contenido_get($id){
         $this->load->model("mensaje_model");
         $this->response($this->mensaje_model->get_where($id),200);
    }
        
        
}
?>
