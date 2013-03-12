<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class ArticulosAmenidad extends REST_Controller {

    protected $methods = array(
        'articulosamendiad_post' => array('level' => 1),
        'articulosamendiad_get' => array('level' => 1),
        'articulosamendiad_modificar_get' => array('level' => 1),
        'articulosamendiad_delete_get' => array('level' => 1)
    );

    function articulosamendiad_post() {
        $this->load->model("articuloamenidad_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->area_model->set_area($this->post()), 200);
    }

    function articulosamendiad_get() {
        $this->load->model("articuloamenidad_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->area_model->get_areas(), 200);
    }

    function articulosamendiad_modificar_get() {
        $this->load->model("articuloamenidad_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->area_model->update_area($this->get('idArticulo'), $post()), 200);
    }

    function articulosamendiad_delete_get() {
        $this->load->model("articuloamenidad_model");
        header('Access-Control-Allow-Origin: *');
        $this->response($this->area_model->delete_area($this->get('idArea')), 200);
    }

}

?>
