<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard_model extends CI_Model {

    public function get_cate($id) {
         $this->db->where('id',$id);
         $query = $this->db->get('categories')->row();
         if($query){
             return $query->category_name;
         }else{
              return false;
         }
    }
    
    public function get_single_img($id){
        $this->db->where('plan_id',$id);
        $query = $this->db->get('images')->row();
         if($query){
             return $query->image;
         }else{
              return false;
         }
       
    }

    public function get_classes() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('class');
        return $query->result_array();
    }

    public function get_schedule_data() {
        $query = $this->db->get('schedule');
        return $query->result_array();
    }

    public function count_user($id){
        $this->db->where('schedule_id',$id);
        $query = $this->db->count_all_results('enroll');
        return $query;
    }
    
    public function getl($id){ //get location by id
        $this->db->where('id',$id);
        $query = $this->db->get('location')->row();
        if($query){
            return $query->location_name;
        }else{
            return false;
        }
    }
    
      public function getc($id){ //get class by id
        $this->db->where('id',$id);
        $query = $this->db->get('class')->row();
        return $query->class_name;
    }
    
     public function enroll($id){ //get class by id
        $this->db->where('schedule_id',$id);
        $query = $this->db->get('enroll')->row();
        if($query){
            return $query->user_id;
        }else{
         return 0;   
        }
    }
    
    public function get_avail($id,$cap){
        $this->db->where('schedule_id',$id);
        $query = $this->db->count_all_results('enroll');
        return $cap-$query; 
    }

}
