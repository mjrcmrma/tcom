<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Areas extends REST_Controller
{
    protected $methods = array(
           'area_post' => array('level' => 1),
           'area_get' => array('level' => 1),
           'area_modificar_get' => array('level' => 1),
           'area_delete_get' => array('level' => 1)
   );
    
    function area_post()
    {
        $this->load->model("area_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->area_model->set_area($this->post()), 200);   
    }
    
    function area_get(){
        $this->load->model("area_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->area_model->get_areas(),200);
        
    }
    function area_modificar_get(){
        $this->load->model("area_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->area_model->update_area($this->get('idArea'), $this->get('nombre'), $this->get('superficie')),200);
    }
    
    function area_delete_get(){
        $this->load->model("area_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->area_model->delete_area($this->get('idArea')),200);
    }
}
?>
