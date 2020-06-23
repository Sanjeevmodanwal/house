<?php

class Api_model extends CI_Model {

    function fetch_all() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('users');
    }

    function insert_api($data) {
       // print_r($data); exit;
        $fname=$data['fname'];
        $lname=$data['lname'];
        $email=$data['email'];
        $pass=md5($data['password']);
        $this->db->where('email', $email);
        $result=  $this->db->get('users')->row();
        if($fname &&$lname &&$email){
            if(!$result){
                $sql="INSERT INTO users (first_name, last_name, email, password) VALUE ('$fname','$lname','$email','$pass')";
                $this->db->query($sql);
                if ($this->db->affected_rows() > 0) {
                    $res=array('status'=>200,'msg'=>'You have signed up successfully!  Please login to continue');
                    return $res;
                } else {
                    $res=array('status'=>500,'msg'=>'record not saved !');
                    return $res;
                }
           }
            else{
                $res=array('status'=>500,'msg'=>'Email id Already Exits !');
                return $res;
            }
        }
    }

    function auth($email, $pass) {
      //  echo $pass; exit;
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $result=  $this->db->get('users')->row();
        if($result){
           $res=array('status'=>200,'user'=>$result);  
        }else{
            $res=array('status'=>500,'msg'=>'email or password are not matched');
        }
        return $res;
    }

    function fetch_single_user($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->get('users')->row();
        return $query;
    }

    function update_api($data) {
       // print_r($data); exit;
        $this->db->where('id', $data['id']);
        $this->db->update('users', $data);
        if ($this->db->affected_rows() > 0) {
            $res=array('status'=>200,'msg'=>'Update Record Succesfully !');
        }else{
            $res=array('status'=>500,'msg'=>'Update Record Succesfully');
        }
        return $res;
    }

   

    function delete_single_user($user_id) {
        $this->db->where('id', $user_id);
        $this->db->delete('tbl_sample');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

   

    // function get_all_comment(){

    //     $this->db->select('*');
    //     $this->db->from('users');
    //     $this->db->join('comments', 'comments.user_id = users.id');
    //    // $this->db->order_by('id', 'DESC');
    //     $query = $this->db->get();
       
    //    // $this->db->order_by('id', 'DESC');
       
    //     // $this->db->join('comments', 'comments.user_id = users.id');
    //     // $query = $this->db->get();
    //     return $query->result_array();
    // }


    function get_all_users($data){
        $this->db->where('user_id',$data['id']);
        $query = $this->db->get('invite_people');
        $r=array($data['id']);
        foreach ($query->result() as $row){
            $r[]=$row->from_id;
        }
       if(count($r)>0){
        $this->db->where_not_in('id',$r);
        $query1 = $this->db->get('users');
        return $query1->result_array();
       }else{
        $this->db->order_by('id', 'DESC');
         $this->db->where('id !=', $data['id']);
         $query2= $this->db->get('users');
         return $query2->result_array();   
       }
       
      
    }

    public function insert_invite($data){
        $this->db->where('user_id', $data['user_id']);
        $this->db->where('from_id', $data['from_id']);
        $query = $this->db->get('invite_people')->row();
        if(count($query)>0){
            $res=array('status'=>500,'msg'=>'invite already send !');
        }else{
            $this->db->insert('invite_people', $data);
            if ($this->db->affected_rows() > 0) {
              $res=array('status'=>200,'msg'=>'Invite request sent successfully!');
             } else {
              $res=array('status'=>500,'msg'=>'record not saved !');
            }
        }
        return $res;
    }

    function fech_invite($data){

        $this->db->where('from_id', $data['id']);
        $this->db->where('accept',null);
        $count = $this->db->count_all_results('invite_people');

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('from_id',$data['id']);
        $this->db->join('invite_people', 'invite_people.user_id = users.id');
        $query = $this->db->get();

        //return $query->result_array(); 
        $array=array('count'=>$count,'user'=>$query->result_array());
        return $array; 
    }


    function accept_req($data){
        $this->db->where('id', $data['id']);
        $this->db->update('invite_people', $data);
        if ($this->db->affected_rows() > 0) {
            $res=array('status'=>200,'msg'=>'Update Record Succesfully !');
        }else{
            $res=array('status'=>500,'msg'=>'Update Record Succesfully');
        }
        return $res;
    }

    function get_pending_req($data){  //get all send request
        // $this->db->where('user_id', $data['id']);
        // $this->db->where('accept',null);
        // $count = $this->db->count_all_results('invite_people');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('accept',null);
        $this->db->join('invite_people', 'invite_people.from_id = users.id');
        $query = $this->db->get();
        $res=array('data'=>$query->result_array());
        return $res;
    }


    function get_accept_req($data){  //get all send request
        // $this->db->where('user_id', $data['id']);
        // $this->db->where('accept',null);
        // $count = $this->db->count_all_results('invite_people');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('accept',1);
        $this->db->join('invite_people', 'invite_people.from_id = users.id');
        $query = $this->db->get();
        $res=array('status'=>'200','data'=>$query->result_array());
        return $res;
    }


    function test(){

        // $this->db->select('*');
        // $this->db->from('invite_people');
        // $this->db->where('user_id',42);
        // $this->db->join('users', 'users.id = invite_people.from_id');
        // $query = $this->db->get();
        // print_r($query->result_array()) ; exit; 
    //     $this->db->where('user_id',42);
    //     $query = $this->db->get('invite_people');
    //     foreach ($query->result() as $row){
    //         $r[]=$row->from_id;
    //     }
    //   //  $am=['42'];
    //    // $r1=array_push($r,$am);

    //     $this->db->where_not_in('id',$r);
    //     $this->db->where('id !=', 42);
    //     $query1 = $this->db->get('users');
    //     print_r($query1->result_array()); exit;
        //print_r($r1); exit;  
       // print_r($data); exit;
    }


    function get_connction($data){
        $this->db->where('user_id', $data['id']);
        $this->db->where('accept',1);
        $count = $this->db->count_all_results('invite_people');
        return $count;
    }



  



    
    

}

?>