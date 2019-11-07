<?php

include_once 'UserProfile.php';

class Userlist_model extends CI_Model
{

    public function get_user_list($genre)
    {
        $genre_id = null;
        $user_profile_list = null;
        $errors = array();
        $this->db->select('genre_id');
        $this->db->from('genre');
        $this->db->like('genre_name', $genre);
        $genre = $this->db->get();
        if ($genre->num_rows()) {
            foreach ($genre->result() as $row) {
                $genre_id = $row->genre_id;
            }
            $this->db->select('*');
            $this->db->from('user_profile');
            $this->db->join(
                'user_preferred_genres',
                'user_profile.user_id = user_preferred_genres.user_id'
            );
            $this->db->where('user_preferred_genres.genre_id', $genre_id);
            $profiles = $this->db->get();
            if ($profiles->num_rows()) {
                foreach ($profiles->result() as $row) {
                    $user_profile_list[] = new UserProfile(
                        $row->user_id,
                        $row->first_name,
                        $row->last_name,
                        $row->email,
                        $row->username,
                        $row->password,
                        $row->image_url
                    );
                }
            } else {
                array_push($errors, 'There is no users');
                return $errors;
            }
        } else {
            array_push($errors, 'There is no such genre available');
            return $errors;
        }
        return $user_profile_list;
    }
}
