<?php
class UserProfile{
    private $user_id;
    private $first_name;
    private $last_name;
    private $email;
    private $username;
    private $password;
    private $image_url;

    function __construct($user_id,$first_name,$last_name,$email,$username,$password,$image_url) {
        $this->user_id = $user_id;
        $this->first_name = $first_name;
        $this->last_name=$last_name;
        $this->email=$email;
        $this->username=$username;
        $this->password=$password;
        $this->image_url=$image_url;
    }

    function getUserId() { return $this->user_id; }
    function getFirstName() { return $this->first_name; }
    function getLastName() { return $this->last_name; }
    function getEmail() { return $this->email; }
    function getUsername() { return $this->username; }
    function getPassword() { return $this->password; }
    function getImageUrl() { return $this->image_url; }     
}