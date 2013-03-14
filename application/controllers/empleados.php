<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empleados extends CI_Controller {

    public function index() {
        $this->load->view('empleados/lista');
    }

    function upload_pic() {
        $status = "";
        $msg = "";
        $file_element_name = 'userfile';

        if ($status != "error") {
            $config['upload_path'] = './fotos/tmp/';
            $config['allowed_types'] = 'gif|jpg|png|doc|txt';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload($file_element_name)) {
                $data = $this->upload->data();
                $this->session->set_userdata("tmp_pic", $data['full_path']);
//                $file_id = $this->files_model->insert_file($data['file_name'], $_POST['title']);
//                if ($file_id) {
//                    $status = "success";
//                    $msg = "File successfully uploaded";
//                } else {
//                    unlink($data['full_path']);
//                    $status = "error";
//                    $msg = "Something went wrong when saving the file, please try again.";
//                }
            }
//            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array("src"=>$data['full_path']));
    }

}