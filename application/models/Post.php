<?php
class Post{
    private $post_id;
    private $user_id;
    private $content;
    private $created_at;
    private $last_edited;

    function __construct($post_id,$user_id,$content,$created_at,$last_edited) {
        $this->post_id = $post_id;
        $this->user_id = $user_id;
        $this->content=$content;
        $this->created_at=$created_at;
        $this->last_edited=$last_edited;
    }
    
    function getPostId() { return $this->post_id; }
    function getUserId() { return $this->user_id; }
    function getContent() { return $this->content; }
    function getCreatedAt() { return $this->created_at; }
    function getLastEdited() { return $this->last_edited; }  
}