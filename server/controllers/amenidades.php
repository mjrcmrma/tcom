<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Amenidades extends REST_Controller
{
    protected $methods = array(
           'amenidad_post' => array('level' => 1),
           'amenidad_get' => array('level' => 1),
           'amenidad_modificar_get' => array('level' => 1),
           'amenidad_delete_get' => array('level' => 1)
   );
    
    function amenidad_post()
    {
        $this->load->model("amenidad_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->amenidad_model->set_amenidad($this->post()), 200);   
    }
    
    function amenidad_get(){
        $this->load->model("amenidad_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->amenidad_model->get_amendiades(),200);
        
    }
    function amenidad_modificar_get(){
        $this->load->model("amenidad_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->amenidad_model->update_amenidad($this->get('idAmenidad'), $this->get('nombre'), $this->get('idArea'), $this->get('estado')),200);
    }
    
    function amenidad_delete_get(){
        $this->load->model("amenidad_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->amenidad_model->delete_amenidad($this->get('idAmenidad')),200);
    }
}
?>
