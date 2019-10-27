<?php

class Welcome extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->model('Welcome_model', 'welcome_model');
        $genres = $this->welcome_model->get_genres();
        $values = array(
            'genres' => $genres
        );
        $this->load->view('welcome', $values);
    }

    public function login()
    {

     }

    public function register()
    {

        $this->load->model('Welcome_model', 'welcome_model');

        $errors=array();

        $firstName = $this->input->post("firstname");
        $lastName = $this->input->post("lastname");
        $email = $this->input->post("email");
        $username = $this->input->post("new_username");
        $password = password_hash($this->input->post("new_password"), PASSWORD_BCRYPT);
        $genres = $this->input->post("music_genres");
        $image_url = "";

        $user_id = uniqid(rand(), true);

        if ($this->isEmailValid($email)) {
             $result=$this->welcome_model->getAlreadyAvailableUsers($username,$email);
             if($result){
                if($result->getUsername() === $username){
                    array_push($errors, "Username already exists");
                } 
                if($result->getEmail() === $email){
                    array_push($errors, "Email already exists");
                }
             }        
        } else {
            array_push($errors,"Email is not valid");
        }

        if(count($errors)==0){
            $this->welcome_model->saveUser(
                $user_id,
                $firstName,
                $lastName,
                $email,
                $username,
                $password,
                $image_url,
                $genres
            );
        }else{
           echo 'There are errors'; 
        }
    }

    public function isEmailValid($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }
}
