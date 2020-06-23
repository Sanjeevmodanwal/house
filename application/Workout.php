<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Headers: application/x-www-form-urlencoded');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With,");

defined('BASEPATH') OR exit('No direct script access allowed');

class Workout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Workout_model');
        $this->load->model('Dashboard_model');
        $this->load->library('form_validation');
    }

    public function add(){
       $data = json_decode(file_get_contents('php://input'), true);
       $date=explode("T",$data['date']); 
      // print_r($date); exit;
       $array=array(
           'user_id'=>$data['uid'],
           'category_id'=>$data['cate_id'],
           'set_weight'=>$data['set'],
           'rep'=>$data['rep'],
           'weight'=>$data['weight'],
           'date'=>$date[0]

       );
       $res= $this->Workout_model->add_workout($array);
       echo json_encode($res);
    }
    /*
    *Getting workout data
    */

    public function getTodayworkout(){

        $data = json_decode(file_get_contents('php://input'), true); 
        $res=$this->Workout_model->get_Today_workout_detail($data);
        echo json_encode($res);
    }

    public function getworkout(){
        $data = json_decode(file_get_contents('php://input'), true); 
        $res=$this->Workout_model->get_workout_detail($data);
        echo json_encode($res);
    }

    public function search(){
        $data = json_decode(file_get_contents('php://input'), true); 
        $res=$this->Workout_model->search_by_date($data);
        echo json_encode($res);
    }

    public function count_workout(){
        $data = json_decode(file_get_contents('php://input'), true); 
        $res=$this->Workout_model->get_count_workout($data);
        echo json_encode($res);  
    }

    public function getschedule(){
        $data=$this->Workout_model->get_schedule_data();
         echo json_encode($data);
    }

    public function getlocation(){
        $this->db->order_by('id', 'DESC');
        $query= $this->db->get('location'); 
        echo json_encode($query->result_array()); 
    }

    public function getdata(){
        $data = json_decode(file_get_contents('php://input'), true); 
        $res=$this->Workout_model->get_data($data);
        echo json_encode($res);    
    }

    public function enroll(){
        $data = json_decode(file_get_contents('php://input'), true); 
        $array=array(
            'user_id'=>$data['uid'],
            'schedule_id'=>$data['sid'],
            'status'=>1
        );
        $res=$this->Workout_model->add_enroll($array);
        echo json_encode($res);   
    }


}