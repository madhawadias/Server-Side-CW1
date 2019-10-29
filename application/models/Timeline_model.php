<?php

include_once 'Post.php';

class Timeline_model extends CI_Model{

    public function saveUserPost($user_id,$content,$created_at){
        $data=array(
            'user_id'=>$user_id,
            'content'=>$content,
            'created_at'=>$created_at
        );
        $this->db->insert('post', $data);
    }
}