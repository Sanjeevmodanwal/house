<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: *');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('api_model');
        $this->load->library('form_validation');
    }

    function index() {
        $data = $this->api_model->fetch_all();
        echo json_encode($data->result_array());
    }

    function insert() {
        $data = json_decode(file_get_contents('php://input'), true);
        $pass = $data['password'];
        $cpass = $data['cpass'];
        if ($pass == $cpass) {
            $res = $this->api_model->insert_api($data);
        } else {
            $res = array('status' => 500, 'msg' => 'password are not matched');
        }
        echo json_encode($res);
    }

    function login() {
        $data = json_decode(file_get_contents('php://input'), true);
        $email = $data['email'];
        $pass = md5($data['password']);
        // echo $pass; exit;
        $res = $this->api_model->auth($email, $pass);
        echo json_encode($res);
    }

    function fetch_single() {
        $data = json_decode(file_get_contents('php://input'), true);
        $res = $this->api_model->fetch_single_user($data);
        echo json_encode($res);
    }

    function update() {
        $data = json_decode(file_get_contents("php://input"), true);
        $res = $this->api_model->update_api($data);
        echo json_encode($res);
    }

    function delete() {
        if ($this->input->post('id')) {
            if ($this->api_model->delete_single_user($this->input->post('id'))) {
                $array = array(
                    'success' => true
                );
            } else {
                $array = array(
                    'error' => true
                );
            }
            echo json_encode($array);
        }
    }

    // function get_comment(){
    //     $res=$this->api_model->get_all_comment();
    //     echo json_encode($res);
    // }

    public function upload() {

        $this->load->helper(array('form', 'url'));

        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|pdf|doc|docx|xlsx|xls';
        $config['max_size'] = 2000;
        //   //  $config['max_width'] = 1500;
        //   //  $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('myFile')) {
            $res = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            $array = array(
                'id' => $_POST['id'],
                'profile_pic' => $data['file_name']
            );
            $this->api_model->update_api($array);
            $res = array('file' => $data['file_name']); //
            //$array = array('upload_data' => $this->upload->data(),'id'=>$_POST['id']);
        }

        echo json_encode($res);
    }

    public function upbg() {

        $this->load->helper(array('form', 'url'));

        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|pdf|doc|docx|xlsx|xls';
        $config['max_size'] = 2000;
        //   //  $config['max_width'] = 1500;
        //   //  $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('myFile')) {
            $res = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            $array = array(
                'id' => $_POST['id'],
                'bg_img' => $data['file_name']
            );
            $this->api_model->update_api($array);
            $res = array('file' => $data['file_name']); //
            //$array = array('upload_data' => $this->upload->data(),'id'=>$_POST['id']);
        }

        echo json_encode($res);
    }

    public function get_users() {
        $data = json_decode(file_get_contents('php://input'), true);
        $res = $this->api_model->get_all_users($data);
        echo json_encode($res);
    }

    public function invite() {
        $data = json_decode(file_get_contents('php://input'), true);
        $array = array(
            'user_id' => $data['id'],
            'from_id' => $data['from_id'],
            'status' => 1
        );
        $res = $this->api_model->insert_invite($array);
        echo json_encode($res);
    }

    public function get_invite() { //get invite data
        $data = json_decode(file_get_contents('php://input'), true);
        $res = $this->api_model->fech_invite($data);
        echo json_encode($res);
    }

    public function accept() { //accept invite dat
        $data = json_decode(file_get_contents('php://input'), true);
        $res = $this->api_model->accept_req($data);

        echo json_encode($res);
    }

    public function test() {
        $res = $this->api_model->test();
        echo json_encode($res);
    }

    public function getpendingReq() {  //find all invite data
        $data = json_decode(file_get_contents('php://input'), true);
        $res = $this->api_model->get_pending_req($data);
        echo json_encode($res);
    }

    public function acceptReq() {  //get all accept invite data
        $data = json_decode(file_get_contents('php://input'), true);
        $res = $this->api_model->get_accept_req($data);
        echo json_encode($res);
    }

    public function connect() { //count you cannect people
        $data = json_decode(file_get_contents('php://input'), true);
        $res = $this->api_model->get_connction($data);
        echo json_encode($res);
    }

}

?>