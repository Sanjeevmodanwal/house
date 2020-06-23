<?php

class Workout_model extends CI_Model {

   
public function add_workout($data){
    $this->db->insert('workout_detail', $data);
        if ($this->db->affected_rows() > 0) {
            $lid=$insert_id = $this->db->insert_id();
          $res=array('status'=>200,'msg'=>'Add record successfully!','id'=>$lid);
         } else {
          $res=array('status'=>500,'msg'=>'record not saved !');
        }
        return $res;
}

public function get_Today_workout_detail($data){
    $this->db->where('user_id',$data['id']);
    $this->db->where('category_id',$data['cate_id']);
        $query = $this->db->get('workout_detail');
        //print_r($query); exit;
       IF($query->result_array()){
           $res=array('status'=>200,'record'=>$query->result_array());
       }else{
        $res=array('status'=>500);
       }
       return $res;
}

public function get_workout_detail($data){
    $this->db->where('user_id',$data['id']);
    $this->db->where('category_id',$data['cate_id']);
    $query = $this->db->get('workout_detail');
    //print_r($query); exit;
   IF($query->result_array()){
       $res=array('status'=>200,'record'=>$query->result_array());
   }else{
    $res=array('status'=>500);
   }
   return $res;
}



public function search_by_date($data){
    $this->db->where('user_id',$data['uid']);
    $this->db->where('category_id',$data['cate_id']);
    $this->db->where('date',$data['date']);
    $query = $this->db->get('workout_detail');
    //print_r($query); exit;
   IF($query->result_array()){
       $res=array('status'=>200,'record'=>$query->result_array());
   }else{
    $res=array('status'=>500,'msg'=>'record not found !');
   }
   return $res;
}


public function get_count_workout($data){
    $this->db->where('user_id',$data['id']);
    $this->db->group_by('category_id');
    $this->db->where('date',date('Y-m-d'));
    $query = $this->db->count_all_results('workout_detail'); 
    return $query;
}

public function get_data($data){
        $this->db->select('*');
        $this->db->where('location_id',$data['lid']);
        $this->db->where('day',$data['day']);
        $this->db->join('location', 'location.id = schedule.location_id','left');
        $this->db->join('class', 'class.id = schedule.class_id');
        $query = $this->db->get('schedule');
        return $query->result_array();
}

public function add_enroll($data){
    $this->db->where('user_id',$data['user_id']);
    $this->db->where('schedule_id',$data['schedule_id']);
    $result = $this->db->get('enroll')->row();
   if($result){
    $res=array('status'=>200,'msg'=>'you are already join');
   }else{
    $this->db->insert('enroll', $data);
    if ($this->db->affected_rows() > 0) {
      $res=array('status'=>200,'msg'=>'Add record successfully!');
     } else {
      $res=array('status'=>500,'msg'=>'record not saved !');
    }
   
   }
    return $res;
}

public function get_schedule_data(){
    // $this->db->select('*');
    // $this->db->from('class');
    // $this->db->join('schedule', 'schedule.class_id = class.id');
    // $this->db->order_by('schedule.id', 'DESC');
    // $query = $this->db->get();
    // return $query->result_array();
}
  



    
    

}

?>