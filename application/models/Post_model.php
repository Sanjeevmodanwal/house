<?php

class Post_model extends CI_Model
{

    public function get_all_post($data)
    {

        $this->db->where('user_id', $data['id']);
        $query1 = $this->db->get('posts')->row();
        if ($query1) {
            $this->db->where('post_id', $query1->id);
            $query2 = $this->db->get('comments')->row();
            if ($query2) {
                $query = $this->db->select('*')
                    ->from('posts')
                    ->where('posts.user_id',$data['id'])
                    ->join('comments', 'comments.post_id = posts.id', 'rigth')
                    ->join('users', 'users.id = comments.user_id')
                    ->get();
                  $res=array('status'=>200,'record'=>$query->result_array());
            }else{
              $query = $this->db->select('*')
              ->from('posts')
              ->where('posts.user_id',$data['id'])
              ->join('users', 'users.id = posts.user_id')
              ->get();
              $res=array('status'=>200,'record'=>$query->result_array());
            }
        }else{
          $res=array('status'=>500);
        }
       return $res;
    }

    public function add_post($data)
    {
        $data = array(
            'user_id' => $data['uid'],
            'post' => $data['post'],
        );
        $this->db->insert('posts', $data);
        if ($this->db->affected_rows() > 0) {
            $res = array('status' => 200);
        } else {
            $res = array('status' => 500);
        }
        return $res;
    }

    public function get_all_acceptreq($data){
      $query = $this->db->select('*')
      ->from('invite_people')
      ->where('invite_people.user_id',$data['id'])
      ->where('invite_people.accept',1)
      ->join('users', 'users.id = invite_people.from_id')
      ->get();
       return $query->result_array();
    }

     public function friend_post(){
          
     }

    public function remove_user_data($data){
        $this->db->where('from_id', $data['id']);
        $this->db->delete('invite_people');
        if ($this->db->affected_rows() > 0) {
            $res = array('status' => 200);
        } else {
            $res = array('status' => 500);
        }
        return $res;
    }
}
