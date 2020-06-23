<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: *');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->library('form_validation');
    }

    public function getpost(){
        $data = json_decode(file_get_contents('php://input'), true);
        $res=$this->post_model->get_all_post($data);
        echo json_encode($res);   
    }

    public function post(){
        $data = json_decode(file_get_contents('php://input'), true);
        $res=$this->post_model->add_post($data);
        echo json_encode($res);  
    }
    
    /*
    * get all people accept my request
    */

    public function accept_req(){
        $data = json_decode(file_get_contents('php://input'), true);
        $res=$this->post_model->get_all_acceptreq($data);
        echo json_encode($res); 
    }

    /*
    * remove user 
    */

    public function remove(){
        $data = json_decode(file_get_contents('php://input'), true);
        $res=$this->post_model->remove_user_data($data);
        echo json_encode($res);  
    }

}