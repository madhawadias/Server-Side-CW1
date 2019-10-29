<?php

include_once 'Genre.php';
include_once 'UserProfile.php';

class Welcome_model extends CI_Model
{

    public function get_genres()
    {
        $genres = null;
        $result = $this->db->get('genre');
        foreach ($result->result() as $row) {
            $genres[] = new Genre($row->genre_id, $row->genre_name);
        }
        return $genres;
    }

    public function saveUser($user_id, $first_name, $last_name, $email, $username, $password, $image_url, $genres)
    {
        //  $user=new UserProfile($user_id,$first_name,$last_name,$email,$password,$image_url);
        $data = array(
            'user_id' => $user_id,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'image_url' => $image_url
        );
        $result = $this->db->insert('user_profile', $data);
        if ($result == 1) {
            $this->saveUserPreferrdGenres($user_id, $genres);
        }
    }

    public function saveUserPreferrdGenres($user_id, $genres)
    {
        foreach ($genres as $g) {
            $genre_id = (int) $g;
            $data = array(
                'user_id' => $user_id,
                'genre_id' => $genre_id
            );
            $this->db->insert('user_preferred_genres', $data);
        }
    }

    public function getAlreadyAvailableUsers($username, $email)
    {
        $user = null;
        $this->db->where('username', $username);
        $this->db->or_where('email', $email);
        $result = $this->db->get('user_profile');
        foreach($result->result() as $row){
            $user = new UserProfile(
                $row->user_id,
                $row->first_name,
                $row->last_name,
                $row->email,
                $row->username,
                $row->password,
                $row->image_url
            );
        }
        return $user;
    }

    public function getUserAccount($username){
        $user = null;
        $this->db->where('username',$username);
        $result = $this->db->get('user_profile');
        foreach($result->result() as $row){
            $user = new UserProfile(
                $row->user_id,
                $row->first_name,
                $row->last_name,
                $row->email,
                $row->username,
                $row->password,
                $row->image_url
            );
        }
         return $user;
    }
}
